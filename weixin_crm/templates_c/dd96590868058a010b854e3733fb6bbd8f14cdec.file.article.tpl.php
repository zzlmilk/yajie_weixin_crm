<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-20 14:23:35
         compiled from "/web/www/webAdmin//templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18672921352dcc0e7d4b787-84687716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd96590868058a010b854e3733fb6bbd8f14cdec' => 
    array (
      0 => '/web/www/webAdmin//templates/article.tpl',
      1 => 1390190712,
    ),
  ),
  'nocache_hash' => '18672921352dcc0e7d4b787-84687716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet/less" type="text/css" href="../css/manage.less" />
        <script type="text/javascript" src="../js/less-1.3.0.min.js"></script>
        <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
        <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
            });
            function asd(){
                var  html = document.getElementById('editor_id').value; // 原生API
                // 取得HTML内容
                html = editor.html();
                editor.sync();
                $('#article_form').submit();
            }
        </script>
        <style type="text/css">
            body{
                margin:15px;
            }
            .ke-container{
                margin:0 0 0 10px;
            }
        </style>
    </head>
    <body>
	<h1 class="manager_title" style="margin:0 0 20px 0;">专家说新闻 编辑文章</h1>
        <div class="skill_tips">
            <h6>技巧提示</h6>
            <p>·&nbsp;&nbsp;当你需要插入视频时可以选用<img alt="" width="17" height="19" src="../images/default2.gif" style="position:relative;top:4px;margin:0 3px;" />标签，在URL栏中输入以.swf结尾的路径即可。<span style="color:#999999;">（例：http://player.youku.com/player.php/sid/XNDMxNTk5NzQ0/v.swf）</span></p>
            <p>·&nbsp;&nbsp;需要给文章分页时可以选用<img alt="" width="16" height="17" src="../images/default3.gif" style="position:relative;top:4px;margin:0 3px;" />标签，需要居中时可以选择需要改变的内容然后选用<img alt="" width="17" height="18" src="../images/default1.gif" style="position:relative;top:4px;margin:0 3px;" />标签。</p>
            <p>·&nbsp;&nbsp;上传图片时可以选用<img alt="" width="16" height="17" src="../images/default4.gif" style="position:relative;top:4px;margin:0 3px;" />或批量上传<img alt="" width="17" height="18" src="../images/default5.jpg" style="position:relative;top:4px;margin:0 3px;" />。</p>
        </div>
        <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/article_action.php"  method="post" id="article_form" name="article_form">
            <input type="hidden" id="news_id" name="news_id" value="<?php echo $_smarty_tpl->getVariable('news_id')->value;?>
">
            <textarea id="editor_id" name="content" style="width:643px;height:500px;"><?php echo $_smarty_tpl->getVariable('article')->value;?>
</textarea>
            <input type="button" name="as" id="as" class="important_button" value="上传文章"  onclick="asd()" style="margin:12px 0 0 16px;" />
        </form>

        
    </body>
</html>
