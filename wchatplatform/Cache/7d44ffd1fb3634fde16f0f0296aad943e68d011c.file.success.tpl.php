<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-23 12:32:38
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Public/success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753729233537ecf66c670f1-12123880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d44ffd1fb3634fde16f0f0296aad943e68d011c' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Public/success.tpl',
      1 => 1400817575,
    ),
  ),
  'nocache_hash' => '1753729233537ecf66c670f1-12123880',
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
