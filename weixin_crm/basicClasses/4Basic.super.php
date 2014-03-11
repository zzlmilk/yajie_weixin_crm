<?php

/*
 * Created on 2009-11-12
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
ini_set('date.timezone', 'Asia/Shanghai');
//include '2DB_con.php';
class Basic extends Query {

    public $vars;
    public $vars_all;
    public $vars_number;
    public $col_name;
    protected $error;
    public $mem;
    protected $child_name;

    function __construct() {
        try {
            if (empty($this->child_name)) {
                throw new Exception("wrong child config");
            }
//            $this->mem =  new Memcache;
//            $this->mem->connect('127.0.0.1', 11211) or die ("Could not connect");
            
            parent::__construct($this->child_name);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function getVar() {
        $records = $this->selectQuery();
        if ($records) {
            $this->vars = $records[0];
            $this->vars_all = $records[1];
            $this->vars_number = count($this->vars_all);
        } else {
            $this->vars_number = 0;
        }
    }

    function initialize($condition=null) {
        if ($condition != null) {
            $this->addCondition($condition);
        }
        $this->getVar();
    }

    function overrideCondition($condition) {
        if ($condition != null) {
            $this->addCondition($condition, 1);
        }
    }
  function operatorsAction($channel,$adminid,$action,$uid){  //操作记录
      $admin_auth = new auth_detail();
      $admin_auth->addCondition('news_type like "'.$channel.'" and action_name like "'.$action.'"', 1);
      $admin_auth->initialize();
      if($admin_auth->vars_number>0){
          $admin_action = new admin_action();
          $insert['admin_id'] = $adminid;
          $insert['action'] = $admin_auth->vars['id'];
          $insert['channel'] = $channel;
          $insert['associate_id'] = $uid;
          $insert['insert_time'] = time();
          $admin_action->insert($insert);
      }
      
  }
    function loadAll() {
        $orderBy[] = array($this->table . '_id' => 'ASC');
        $this->addOrderBy($orderBy);
        $records = $this->selectQuery(2);
        $return_data = array();
        if ($records) {
            foreach ($records as $key => $value) {
                $return_data[$value[$this->table . '_id']] = $value;
            }
        }
        return $return_data;
    }

    function selectObject($condition) {
        $this->clearUp();
        $this->addCondition($condition);
    }

    function showError($message) {
        echo $message;
        exit();
    }

    function changeTable($table) {
        $this->changeDataTable($table);
        $this->clearUp();
    }

    function t($text, $parse_br = false, $quote_style = ENT_NOQUOTES) {
        if (is_numeric($text))
            $text = (string) $text;

        if (!is_string($text))
            return null;

        if (!$parse_br) {
            $text = str_replace(array("\r", "\n", "\t"), ' ', $text);
        } else {
            $text = nl2br($text);
        }

        $text = stripslashes($text);
        $text = htmlspecialchars($text, $quote_style, 'UTF-8');

        return $text;
    }

    function updateVars($update=null) {
        $this->addUpdate($this->vars);
        $this->updateQuery();
    }
            function page5($php, $page, $data, $news_id) {
        $Page_size = 4;
        $init = 1;
        $page_len = 6;
        $count = count($data);

        $page_count = ceil($count / $Page_size);
        $max_p = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {

        }
        $min = ($Page_size * $page) - $Page_size;
        $max = ($Page_size * $page) - 1;
        foreach ($data as $key => $value) {
            if ($key >= $min && $key <= $max) {
                $professional_data[] = $value;
            }
        }

        $array['data'] = $professional_data;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<div class="page">';
        $key1.="<span>$page/$pages</span>&nbsp;";    //第几页,共几页
        if ($page != 1) {
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=1&tool_id=" . $news_id . ">首页</a> ";     //第一页
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=" . ($page - 1) . "&tool_id=" . $news_id . ">上一页</a>"; //上一页
        } else {
            $key1.="&nbsp;&nbsp;首页 "; //第一页
            $key1.="&nbsp;&nbsp;上一页"; //上一页
        }

        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                $key1.=' <span>' . $i . '</span>';
            } else {
                $key1.=" <a href=\"" . $php . "?page=" . $i . "&tool_id=" . $news_id . "\">" . $i . "</a>";
            }
        }

        if ($page != $pages) {
            $key1.=" &nbsp;&nbsp;<a href=\"" . $php . "?page=" . ($page + 1) . "&tool_id=" . $news_id . "\">下一页</a> "; //下一页
            $key1.="&nbsp;&nbsp;<a href=\"" . $php . "?page={$pages}&tool_id=" . $news_id . "\">最后一页</a>"; //最后一页
        } else {
            $key1.="&nbsp;&nbsp;下一页 "; //下一页
            $key1.="&nbsp;&nbsp;最后一页"; //最后一页
        }
        $key1.='</div>';
        $array['key'] = $key1;
        return $array;
    }
//    字符截取
    function cut_str($string, $sublen, $start = 0, $code = 'UTF-8') {
        if ($code == 'UTF-8') {
            $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
            preg_match_all($pa, $string, $t_string);

            if (count($t_string[0]) - $start > $sublen)
                return join('', array_slice($t_string[0], $start, $sublen));
            return join('', array_slice($t_string[0], $start, $sublen));
        }
        else {
            $start = $start * 2;
            $sublen = $sublen * 2;
            $strlen = strlen($string);
            $tmpstr = '';

            for ($i = 0; $i < $strlen; $i++) {
                if ($i >= $start && $i < ($start + $sublen)) {
                    if (ord(substr($string, $i, 1)) > 129) {
                        $tmpstr.= substr($string, $i, 2);
                    } else {
                        $tmpstr.= substr($string, $i, 1);
                    }
                }
                if (ord(substr($string, $i, 1)) > 129)
                    $i++;
            }
            if (strlen($tmpstr) < $strlen)
                $tmpstr.= '';
            return $tmpstr;
        }
    }

    function page1($php, $page, $data, $news_id) {
        $Page_size = 4;
        $init = 1;
        $page_len = 6;
        $count = count($data);

        $page_count = ceil($count / $Page_size);
        $max_p = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {

        }
        $min = ($Page_size * $page) - $Page_size;
        $max = ($Page_size * $page) - 1;
        foreach ($data as $key => $value) {
            if ($key >= $min && $key <= $max) {
                $professional_data[] = $value;
            }
        }

        $array['data'] = $professional_data;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<div class="page">';
        $key1.="<span>$page/$pages</span>&nbsp;";    //第几页,共几页
        if ($page != 1) {
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=1&id=" . $news_id . ">首页</a> ";     //第一页
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=" . ($page - 1) . "&id=" . $news_id . ">上一页</a>"; //上一页
        } else {
            $key1.="&nbsp;&nbsp;首页 "; //第一页
            $key1.="&nbsp;&nbsp;上一页"; //上一页
        }

        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                $key1.=' <span>' . $i . '</span>';
            } else {
                $key1.=" <a href=\"" . $php . "?page=" . $i . "&id=" . $news_id . "\">" . $i . "</a>";
            }
        }

        if ($page != $pages) {
            $key1.=" &nbsp;&nbsp;<a href=\"" . $php . "?page=" . ($page + 1) . "&id=" . $news_id . "\">下一页</a> "; //下一页
            $key1.="&nbsp;&nbsp;<a href=\"" . $php . "?page={$pages}&id=" . $news_id . "\">最后一页</a>"; //最后一页
        } else {
            $key1.="&nbsp;&nbsp;下一页 "; //下一页
            $key1.="&nbsp;&nbsp;最后一页"; //最后一页
        }
        $key1.='</div>';
        $array['key'] = $key1;
        return $array;
    }

    function page4($php, $page, $data, $news_id) {
        $Page_size = 4;
        $init = 1;
        $page_len = 6;
        $count = count($data);

        $page_count = ceil($count / $Page_size);
        $max_p = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {

        }
        $min = ($Page_size * $page) - $Page_size;
        $max = ($Page_size * $page) - 1;
        foreach ($data as $key => $value) {
            if ($key >= $min && $key <= $max) {
                $professional_data[] = $value;
            }
        }

        $array['data'] = $professional_data;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<div class="page">';
        $key1.="<span>$page/$pages</span>&nbsp;";    //第几页,共几页
        if ($page != 1) {
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=1&game_news_id=" . $news_id . ">首页</a> ";     //第一页
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page=" . ($page - 1) . "&game_news_id=" . $news_id . ">上一页</a>"; //上一页
        } else {
            $key1.="&nbsp;&nbsp;首页 "; //第一页
            $key1.="&nbsp;&nbsp;上一页"; //上一页
        }

        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                $key1.=' <span>' . $i . '</span>';
            } else {
                $key1.=" <a href=\"" . $php . "?page=" . $i . "&game_news_id=" . $news_id . "\">" . $i . "</a>";
            }
        }

        if ($page != $pages) {
            $key1.=" &nbsp;&nbsp;<a href=\"" . $php . "?page=" . ($page + 1) . "&game_news_id=" . $news_id . "\">下一页</a> "; //下一页
            $key1.="&nbsp;&nbsp;<a href=\"" . $php . "?page={$pages}&game_news_id=" . $news_id . "\">最后一页</a>"; //最后一页
        } else {
            $key1.="&nbsp;&nbsp;下一页 "; //下一页
            $key1.="&nbsp;&nbsp;最后一页"; //最后一页
        }
        $key1.='</div>';
        $array['key'] = $key1;
        return $array;
    }

    function path($table, $field, $where=1) {
        $$table = new $table;
        $$table->addselect($field);
        $$table->addCondition($where, 1);
        $$table->initialize();
        $var = array();
        if ($$table->vars_number > 0) {
            foreach ($$table->vars_all as $key => $value) {
                foreach ($var as $item) {
                    if ($item != $value['' . $field . '']) {
                        $a = 0;
                    } else {
                        $a = 1;
                        break;
                    }
                }
                if ($a == 0) {
                    if ($key == 0) {
                        $array.='' . str_replace('&', '&amp;', $value['' . $field . '']);
                    } else {
                        $array.='|' . str_replace('&', '&', $value['' . $field . '']);
                    }
                }
                $name = str_replace('&amp;', '&', $value['' . $field . '']);
                array_push($var, $name);
                unset($value);
            }
            return $array;
        }
    }
    function page_2($table, $php, $page, $where=1, $orderby=1, $where_array='') {
        if (is_array($where_array)) {
            $str = '';
            foreach ($where_array as $k_a => $item) {
                if ($k_a != 'page' && $k_a != 'PHPSESSID') {
                    $str .='&' . $k_a . '=' . urlencode($item);
                }
            }
        }
        $_SESSION['back_where'] = $str;
        $$table = new $table();
        $$table->addCondition($where, 1);
        if ($orderby != 1) {
            $$table->addOrderBy($orderby);
        }

        $$table->initialize();
        $Page_size = 12;
        $init = 1;
        $page_len = 6;
        $count = $$table->vars_number;
        $page_count = ceil($count / $Page_size);
        $max_p = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {

        }
        $offset = $Page_size * ($page - 1);
        $$table->addCondition($where, 1);
        $$table->addOffset($offset, $Page_size);
        $$table->initialize();
        $array['data'] = $$table->vars_all;
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<div class="page">';
        $key1.="<span>$page/$pages</span>&nbsp;";    //第几页,共几页
        if ($page != 1) {
            $key1.="&nbsp;&nbsp;<a href=\"" . $php . "?page=1&" . $str . "\">首页</a> ";     //第一页
            $key1.="&nbsp;&nbsp;<a href=\"" . $php . "?page=" . ($page - 1) . "&" . $str . "\">上一页</a>"; //上一页
        } else {
            $key1.="&nbsp;&nbsp;首页 "; //第一页
            $key1.="&nbsp;&nbsp;上一页"; //上一页
        }
        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                $key1.=' <span>' . $i . '</span>';
            } else {
                $key1.=" <a href=\"" . $php . "?page=" . $i . "&" . $str . "\">" . $i . "</a>";
            }
        }

        if ($page != $pages) {
            $key1.=" &nbsp;&nbsp;<a href=" . $php . "?page=" . ($page + 1) . "&" . $str . ">下一页</a> "; //下一页
            $key1.="&nbsp;&nbsp;<a href=" . $php . "?page={$pages}&" . $str . ">最后一页</a>"; //最后一页
        } else {
            $key1.="&nbsp;&nbsp;下一页 "; //下一页
            $key1.="&nbsp;&nbsp;最后一页"; //最后一页
        }
        $key1.='</div>';
        $array['key'] = $key1;
        return $array;
    }
    /**
     * 用于更新已经定义了的类属性自动过滤不属于类的数组内element
     * @param <type> $array
     */
    function updateAttributes($array) {
        foreach ($array as $key => $val) {
            if (isset($this->vars[$key])) {
                $this->vars[$key] = $val;
            }
        }
        $this->updateVars();
    }

    public function update($update=null, $mode=0) {
        parent::addUpdate($update, $mode);
        parent::updateQuery();
    }

    function remove() {
        $this->deleteQuery();
    }

    function insert($insert) {

        
        $id = $this->insertQuery($insert);
        return $id;
    }

    function getTotalRecord($condition=null) {
        if ($condition != null) {
            $this->selectObject($condition);
        }
        return $this->getRecordRow();
    }

    function setQueryMode($mode) {
        $this->mode = $mode;
    }

    function getColumns() {
        $this->col_name = $this->getTableColumn($this->table);
        return $this->col_name;
    }

    public function setOffset($offset) {
        $this->addOffset($offset, $this->_limit);
    }

    public function setLimit($limit) {

        $this->_limit = $limit;
    }

    /**
     * set limit of class
     * @param <type> $limit
     */
    public function changeLimit($limit) {
        $this->limit = $limit;
    }

    public function totalRow() {
        return $this->getTotalRow();
    }

    /**
     * 用于将var_all的参数转化成数组needle是需要转换的名称，$restrict是大于0的标准
     * @param <type> $needle
     * @param <type> $restrict
     * @return <type> array
     */
    public function varsToArray($needle, $restrict=NULL) {
        $array = array();
        if ($this->vars_all) {
            foreach ($this->vars_all as $purchase) {
                if (!empty($restrict)) {
                    if ($purchase[$restrict] > 0) {
                        $array[] = $purchase[$needle];
                    }
                } else {
                    $array[] = $purchase[$needle];
                }
            }
        }
        return $array;
    }

}

?>
