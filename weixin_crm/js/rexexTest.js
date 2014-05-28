function getDateRegex(data){
    var regex=/^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-))$/;
    return regex.test(data);
}
function getMobilPhoneRegex(data){
    var regex= /^1[3|4|5|8][0-9]\d{8}$/;
    return regex.test(data);
}
function getIntRegex(data){
    var regex = /^\d\d*$/;
    return regex.test(data);
}
function getTimeRegex(data){
    var regex = /^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))$/;
    return regex.test(data);
}
function getDateTimeRegex(data){
    var regex = /^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-))[ ](([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])$/;
    return regex.test(data);
}
function getPhoneRegex(data){
    var regex = /^\d{3}\-\d{3}\-\d{5}$/;
    return regex.test(data);
}


