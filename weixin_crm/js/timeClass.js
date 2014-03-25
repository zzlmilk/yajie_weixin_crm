function timeToString(timeVal,typeNumber){
    timeVal=parseInt(timeVal);
    var dateTimeVal=new Date(timeVal)
    var timeYear=dateTimeVal.getFullYear();
    var timeMonth=dateTimeVal.getMonth();
    var timeDay=dateTimeVal.getDate();
    var timeHour=dateTimeVal.getHours();
    var timeMin=dateTimeVal.getMinutes();
    if(timeHour<10){
        timeHour="0"+timeHour;
    }
    if(timeMin<10){
        timeMin="0"+timeMin;
    }
    
    var returnTimeString='';
    switch(typeNumber){
        case "1":
        case 1:
            returnTimeString=timeYear+"-"+timeMonth+"-"+timeDay+" "+timeHour+":"+timeMin;
            break;
    }
    return returnTimeString;
}
function getDateTimeMessage(startTime,useDays){ //从某个时间点开始获取 N天之后的日期 startTime参数请使用unix时间戳或者yyyy/MM/dd HH：ii的格式
    var date=new Date(startTime);
    var unixTime=date.getTime()/1000;
    var useSecond=86400*useDays;
    var dateTimeCache=new Date((unixTime+useSecond)*1000);
    var year=dateTimeCache.getFullYear();
    var month=dateTimeCache.getMonth()+1;
    var days=dateTimeCache.getDate();
    var dateTime= year+"-"+month+"-"+days;
    return dateTime;
}