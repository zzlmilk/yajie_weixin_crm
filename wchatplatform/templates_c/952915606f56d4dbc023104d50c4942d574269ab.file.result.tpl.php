<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-02 15:57:41
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Public/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497640824533bc2f54519b6-17596877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952915606f56d4dbc023104d50c4942d574269ab' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Public/result.tpl',
      1 => 1396423539,
    ),
  ),
  'nocache_hash' => '1497640824533bc2f54519b6-17596877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h4>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->getVariable('name')->value;?>

            </div>
            <div class="modal-footer">
                
                
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
