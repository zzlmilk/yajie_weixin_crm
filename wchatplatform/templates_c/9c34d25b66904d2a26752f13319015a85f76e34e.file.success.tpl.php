<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-02 18:19:01
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Public/success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895081870533be4159c7dd2-58530967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c34d25b66904d2a26752f13319015a85f76e34e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Public/success.tpl',
      1 => 1396433930,
    ),
  ),
  'nocache_hash' => '1895081870533be4159c7dd2-58530967',
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
                
                <button type="button" class="btn btn-primary" onclick='sendGiftAward("<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
","<?php echo $_smarty_tpl->getVariable('gift_id')->value;?>
","<?php echo $_smarty_tpl->getVariable('type')->value;?>
")'>领取</button>
                <button type="button" onclick='location.reload();'  class="btn btn-default" data-dismiss="modal" >关闭</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
