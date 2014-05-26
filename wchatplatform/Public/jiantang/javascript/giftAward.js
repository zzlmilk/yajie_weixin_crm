/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var webUrl = '{$websiteUrl}';

var model = '{$model}';

function sendGiftAward(open_id, id, type) {

    $.ajax({
        url: webUrl + "?g="+model+"&a=game&v=getBigWheeSendAward",
        type: "get",
        data: {
            open_id: open_id,
            gift_id: id,
            type: type,
        },
        success: function(res) {

            $('#myModal').modal('hide');

            $('#myModal').remove();

            $('.modal-backdrop').remove();

            $('#bobyGame').append(res);
            $('#myModal').modal('show');

        },
        error: function(xhr, textStatus) {
            if (textStatus == 'timeout') {
                //处理超时的逻辑

                alert('网络超时');

            }
            else {
                //其他错误的逻辑
            }
        },
        timeout: 8000
    })

}

