

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{$title}</h4>
            </div>
            <div class="modal-body">
                {$name}
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" onclick='sendGiftAward("{$open_id}","{$gift_id}","{$type}")'>领取</button>
                <button type="button" onclick='location.reload();'  class="btn btn-default" data-dismiss="modal" >关闭</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
