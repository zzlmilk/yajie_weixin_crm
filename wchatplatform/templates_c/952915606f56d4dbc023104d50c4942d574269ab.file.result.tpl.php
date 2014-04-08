<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-03 10:17:12
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Public/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1640609337533cc4a893b190-33364376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952915606f56d4dbc023104d50c4942d574269ab' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Public/result.tpl',
      1 => 1396433975,
    ),
  ),
  'nocache_hash' => '1640609337533cc4a893b190-33364376',
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

                <?php if ($_smarty_tpl->getVariable('type')->value==2){?>

                    <button type="button" id="reloadPage"  onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                <?php }else{ ?>
                    
                    <button type="button" onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>

                <?php }?>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
