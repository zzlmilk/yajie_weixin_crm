/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var webUrl = '{$websiteUrl}'

function sendGiftAward(open_id, id) {

    $.ajax({
        url: webUrl + "?g=company&a=game&v=getBigWheeSendAward",
        type: "get",
        data: {
            open_id: open_id,
            gift_id: id,
        },
        success: function(res) {

            $('#myModal').modal('hide');

            $('#myModal').remove();

            $('.modal-backdrop').remove();

            $('#bobyGame').append(res);
            $('#myModal').modal('show');

        },
    })

}

