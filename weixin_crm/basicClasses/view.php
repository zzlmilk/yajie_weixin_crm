<?php

class view {

    public $smarty;
    public $display_page;
    public $smarty_dir;
    public $tVar;

    public function initView() {

        if (!$this->smarty) {

// 载入  smarty 文件
            require_once ROOTPATH . 'js/smarty.php';

            $this->smarty = $smarty;
        }

        if ($this->tVar) {

            $this->smarty->assign($this->tVar);
        }


        if (!empty($this->smarty_dir)) {

            $this->smarty->template_dir = ROOTPATH . '/templates/'.$_SESSION['weixin_crm_source']. '/'. $this->smarty_dir . '/';
        } else {

            $this->smarty->template_dir = ROOTPATH . '/templates/'.$_SESSION['weixin_crm_source'].'/';
        }

    
    }

    public function display($page = '') {

        $this->initView();

        $displayPage = '';

        if (!empty($page)) {

            $displayPage = $page;
        }

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");
        }


       
       
        $this->smarty->assign('uname', $_SESSION['weixin_crm_user_name']);

        $this->smarty->assign('account',$_SESSION['weixin_user_account']);

        $this->smarty->assign('ROOTPATH', ROOTPATH);

        $this->smarty->assign('WebSiteUrl', WebSiteUrl);

        $this->smarty->assign('URLHANDLER', URLHANDLER);

        $this->smarty->assign('URLCONTROLLER', URLCONTROLLER);

        $this->smarty->assign('source',$_SESSION['weixin_crm_source']);

        $this->smarty->display($displayPage . '.tpl');
    }

    public function assign($name, $value = '') {

        if (is_array($name)) {

            $this->tVar = array_merge($this->tVar, $name);
        } else {

            $this->tVar[$name] = $value;
        }
    }

    public function setDirTemplates($dir) {

        if (!empty($dir)) {

            $this->smarty_dir = $dir;
        } else {

            $this->smarty_dir = '';
        }
    }

    public function getPages($targetUrl, $page, $dateCount, $pageSize = 10, $isAjax = 0) {
        $str = "";
        $init = 1;
        $page_len = 8;
        $page_count = ceil($dateCount / $pageSize);
        $maxPage = $page_count;
        $pages = $page_count;
        if (empty($page) || $page < 0) {  //判断传送的页码
            $page = 1;
        } else {
            
        }
        $offset = $pageSize * ($page - 1);
        $page_len = ($page_len % 2) ? $page_len : $page_len + 1; //页码个数
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量
        $key1 = '<ul class="pagination pagination-sm">';
// $key1.="<span>$page/$pages</span>&nbsp;";    //第几页,共几页
        if ($isAjax == 1) {
            if ($page != 1) {
//  $key1.="&nbsp;&nbsp;<a href=\"" . $targetUrl . "&page=1&" . $str . "\">首页</a> ";     //第一页
                $key1.="<li class='usablePage'><a  onclick='pageFunction(this)' pageLink=\"" . $targetUrl . "&page=" . ($page - 1) . "&" . $str . "\">&laquo;</a></li>"; //上一页
            } else {
//  $key1.="&nbsp;&nbsp;首页 "; //第一页
                $key1.="<li  class='disabled'><a>&laquo;</a></li>"; //上一页
            }
        } else {
            if ($page != 1) {
//  $key1.="&nbsp;&nbsp;<a href=\"" . $targetUrl . "&page=1&" . $str . "\">首页</a> ";     //第一页
                $key1.="<li class='usablePage'><a href=\"" . $targetUrl . "&page=" . ($page - 1) . "&" . $str . "\">&laquo;</a></li>"; //上一页
            } else {
//  $key1.="&nbsp;&nbsp;首页 "; //第一页
                $key1.="<li  class='disabled'><a>&laquo;</a></li>"; //上一页
            }
        }
        if ($pages > $page_len) {//如果当前页小于等于左偏移
            if ($page <= $pageoffset) {
                $init = 1;
                $maxPage = $page_len;
            } else {//如果当前页大于左偏移/如果当前页码右偏移超出最大分页数
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {//左右偏移都存在时的计算
                    $init = $page - $pageoffset;
                    $maxPage = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $maxPage; $i++) {
            if ($i == $page) {
                $key1.=' <li class="active"><span>' . $i . '</span></li>';
            } else {


                if ($isAjax == 1) {
                    $key1.=" <li class='usablePage'><a onclick='pageFunction(this)' pageLink=\"" . $targetUrl . "&page=" . $i . "&" . $str . "\">" . $i . "</a></li>";
                } else {
                    $key1.=" <li class='usablePage'><a disabled href=\"" . $targetUrl . "&page=" . $i . "&" . $str . "\">" . $i . "</a></li>";
                }
            }
        }

        if ($page != $pages) {
            if ($isAjax == 1) {
                $key1.=" <li class='usablePage'><a onclick='pageFunction(this)' pageLink=" . $targetUrl . "&page=" . ($page + 1) . "&" . $str . ">&raquo;</a></li>"; //下一页
            } else {
                $key1.=" <li class='usablePage'><a onclick='pageFunction(this)' href=" . $targetUrl . "&page=" . ($page + 1) . "&" . $str . ">&raquo;</a></li>"; //下一页
            }

            //  $key1.="&nbsp;&nbsp;<a href=" . $targetUrl . "&page={$pages}&" . $str . ">最后一页</a>"; //最后一页
        } else {
            $key1.="<li class='disabled'><a>&raquo;</a></li> "; //下一页
            //  $key1.="&nbsp;&nbsp;最后一页"; //最后一页
        }
        $key1.='</ul>';
        return $key1;
    }

}

$_ENV['smarty'] = new view();
?>