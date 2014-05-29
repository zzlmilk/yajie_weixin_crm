<?php


include_once '1DB.class.php';
class DB_Mysql_search  extends DB_Mysql {
   

    protected $user = '';

    protected $pass = '';

    protected $dbhost = '';
    
    protected $dbname =  '';


}
/*服务器使用连接

class DB_Mysql_search  extends DB_Mysql {
    protected $user   = "zg";
    protected $pass   = "zg!QAZ@WSX";
    protected $dbhost = "127.0.0.1";
    protected $dbname = "search";
    public function __construct($DB=NULL) {

    }
}
 */

class Query extends DB_Mysql_search {
    protected  $table='';
    protected $convertor;
    protected $mode = '1';

    protected $offset = 0;
    protected $limit = '';
    protected $orderby = array();
    protected $groupby = array();
    protected $having = array();
    protected $join = array();

    protected $select_string = '*';
    protected $condition_string = '';
    protected $orderby_string  = '';
    protected $groupby_string  = '';
    protected $having_string  = '';
    protected $join_string = '';
    protected $like_string = '';
    protected $limit_string;

    function __construct() {

        $this->convertor = new Convertor;

       

    }

    public function changeDataTable($table) {
        $this->table = $table;
    }

    function changeDB($DB) {
        $this->dbname=$DB;
    }

    function changeDBInfo($DBInfo) {
        $this->dbhost=$DBInfo['dbhost'];
        $this->user=$DBInfo['user'];
        $this->pass=$DBInfo['pass'];
    }

    public function clearUp() {
        $this->select= array();
        $this->condition = array();
        $this->offset = 0;
        $this->limit = '';
        $this->orderBy = array();
        $this->groupBy = array();
        $this->having = array();
        $this->join = array();
        $this->select_string = '*';
        $this->condition_string = '';
        $this->orderby_string  = '';
        $this->groupby_string  = '';
        $this->having_string  = '';
        $this->join_string = '';
        $this->limit_string = '';
       
    }




    /*------------------------------------------------------------------------------------
                $array is the entities array that need to be selected from the query
                $where_array is the condition array---> Field_name=>Field_value
    */

    public function addJoin($join_arrays) {
        $join ='';
        if(!empty($join_arrays)) {
            if(is_array($join_arrays)) {
                foreach($join_arrays as $join_array) {
                    $join .= ' LEFT JOIN '.$this->dbname.'.'.$join_array[0].' ON '.$join_array[1].' = '.$join_array[2].' ';
                }
            }
            else if(is_string($join_arrays)) {
                $join .= $join_arrays;
            }

        }

        $this->join_string .= $join;

    }

    public function addSelect($select,$override=0) {
        if(!empty($select)) {
            if($override==1) {
                $this->select_string = '';
            }
            if(is_array($select)) {
                $this->select_string = $attributeString = $this->convertor->convertArrayToString($select,'VALUE');
            }
            else if(is_string($select)) {
                $this->select_string = $select;
            }

        }
        else {
            $this->select_string = "*";
        }
    }


    public function addCondition($condition,$override=0) {

        if(!empty($condition)) {
            if($override==1) {
                $this->condition_string = '';
            }
            if(is_array($condition)) {
                foreach($condition as $key=>$value) {
                    $this->condition_string .= ' AND '.$key.' = "'.$value.'"';
                }

            }
            else if(is_string($condition)) {
                $this->condition_string .= ' AND '.$condition;
            }

        }
    }

    public function addOrderBy($orderby) {
        if(!empty($orderby)) {
            $order_string = ' ORDER BY ';
            $order_string_sub='';
            if(is_array($orderby)) {
                foreach($orderby as $order_by) {
                    foreach($order_by as $key=>$value) {
                        $sub = ','.$key.' '.$value;
                    }
                    $order_string_sub.=$sub;
                }
                $order_string_sub = substr($order_string_sub,1);
                $order_string .= $order_string_sub;
            }
            else if(is_string($orderby)) {
                $order_string .= $orderby;
            }
            $this->orderby_string .= $order_string;
        }
    }

    public function addGroupBy($groupby) {
        if(!empty($groupby)) {
            $this->groupby_string = ' GROUP BY '.$groupby;
        }
    }

    public function addHaving($having) {
        if(!empty($having)) {
            $this->having_string = ' HAVING '.$having;
        }
    }

    public function addOffset($offset,$limit) {
        if(isset($offset) && isset($limit)) {
            $this->limit_string = ' LIMIT '.$offset.','.$limit;
        }
    }

    public function randOffset($limit) {
        if(isset($limit)) {
            $this->limit_string = ' LIMIT '.$limit;
        }
    }
   public function randLike($like) {
        if(isset($like)) {
            $this->like_string = ' like %'.$limit.'%';
        }
    }


    public function addUpdate($update,$mode=0) {
        $this->update_string='';
        $partialString='';
        if(!empty($update)) {
            if(is_array($update)) {
                foreach ($update as $key => $value) {
                    if($mode !=0) {
                        $partialString .= $key."=".$this->makeStringDBSafe($value).", ";
                    }else {
                        $partialString .= $key."='".$this->makeStringDBSafe($value)."', ";
                    }
                }
                $partialString = substr($partialString, 0, strlen($partialString)-2);
            }
            else if(is_string($update)) {
                $partialString .= $update;
            }
            $this->update_string .= $partialString;
        }
    }

    protected function selectQuery($mode=0) {
        if($this->table) {
         
            $select = 'SELECT '.$this->select_string.' FROM '.$this->dbname.'.'.$this->table.' '.$this->join_string.' WHERE 1 '.$this->condition_string.' '.$this->groupby_string.' '.$this->having_string.' '.$this->orderby_string.' '.$this->limit_string.' '.$this->like_string;
           // echo '<br>'.$select.'<br>';
            $db = $this->prepare($select)->execute();
            $records = $db->fetchall_assoc();
            if(!empty($records)) {
                if($mode==1) {
                    $result= $records[0];

                }
                else if($mode==2) {
                    $result= $records;
                }
                else {
                    $result[0]=$records[0];
                    $result[1]=$records;
                }
                return $result;
            }
            else {
                return $records;
            }
        }
    }


    protected  function getRecordRow() {
        if($this->table) {
            $select = 'SELECT '.$this->select_string.' FROM '.$this->dbname.'.'.$this->table.$this->join_string.' WHERE 1 '.$this->condition_string.' '.$this->groupby_string.' '.$this->having_string.' '.$this->orderby_string.' '.$this->limit_string;
            //echo '<br>'.$select.'<br>';
            $db = $this->prepare($select)->execute();

            return $db->fetch_num_row();
        }
    }

    protected  function getTotalRow() {
        if($this->table) {
            $select = 'SELECT '.$this->select_string.' FROM '.$this->dbname.'.'.$this->table.$this->join_string.' WHERE 1 '.$this->condition_string.' '.$this->groupby_string;
            $db = $this->prepare($select)->execute();

            return $db->fetch_num_row();

        }
    }

    /* --------------------------------------------------------------------------------------------


    */
    protected  function updateQuery() {

        $partialString = '';
        if (!empty($this->table) and !empty($this->update_string)) {
            $update = 'UPDATE '.$this->dbname.'.'.$this->table.' SET '.$this->update_string.' WHERE 1 '.$this->condition_string;
            //echo '<br>'.$update.'<br>';
            $this->prepare($update)->execute();
        }
    }

    protected  function deleteQuery() {
        if(!empty($this->condition_string)) {
            $sql = 'DELETE FROM '.$this->dbname.'.'.$this->table.' WHERE 1'.$this->condition_string;
            //echo $sql;
            $this->prepare($sql)->execute();
            if($this->mode==1) {
                $this->clearUp();
            }
        }
    }

    public function Trancate() {
        $sql = ' TRUNCATE TABLE '.$this->table.'  ';
        $this->prepare($sql)->execute();
    }

    /*------------------------------------------------------------------------------------
                $array is the entities array that need to be inserted from the query format: $key=>$value

    */

    protected  function insertQuery($array) {

      
        if (!empty($this->table) && is_array($array)) {
            $attributeString = $this->convertor->convertArrayToString($array,'KEY');
            $valueString = $this->convertor->convertArrayToString($array,'DB_VALUE');
            $insert = 'insert into '.$this->dbname.'.'.$this->table.' ('.$attributeString.') values('.$valueString.')';
         //  echo $insert.'<br />';
            if($this->mode==1) {
                $this->clearUp();
            }
            return $this->prepare($insert)->executeInsert();
        }
        else if(is_string($array)) {
            //echo $array.'<br />';
            return $this->prepare($array)->executeInsert();
        }
    }

    public  function makeStringDBSafe($value) {
        return addslashes($value);
    }

    public function getTableColumn($table) {
        $array = array();
        $sql = 'describe `'.$this->table.'`';
        $db = $this->prepare($sql)->execute();
        $fields = $db->fetchall_assoc();
        foreach($fields as $field) {
            $array[]=$field['Field'];
        }
        return $array;
    }

    public function ifRecordExist($value,$field,$table) {
        $where_array = array($field=>$value);
        return  $this->selectQuery($field,$where_array,$table);
    }

    public function getAffectedRows() {
        return mysql_affected_rows($this->dbh);
    }

}
?>