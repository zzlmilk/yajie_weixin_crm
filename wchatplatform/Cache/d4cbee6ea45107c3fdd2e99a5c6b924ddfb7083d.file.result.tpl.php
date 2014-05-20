<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-20 17:25:07
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Public/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752054830537b1f73b332c9-00751301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4cbee6ea45107c3fdd2e99a5c6b924ddfb7083d' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Public/result.tpl',
      1 => 1400037397,
    ),
  ),
  'nocache_hash' => '1752054830537b1f73b332c9-00751301',
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
