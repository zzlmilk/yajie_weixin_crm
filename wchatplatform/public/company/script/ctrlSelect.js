$("#porpleNum").click(function(){
    $("#Bk").css("display","block");
    $("#context").show(0,function(){
        $("#context").animate({
            top:'10%'
        },300);
        
    });
});
$("#Bk").click(function(){
    $(this).hide();
    $("#context").hide();
    $("#context").css("top","100%");
})

for(var i=1;i<=8;i++){
    var content="<li class='porpleNumListItem'>"+i+"</li>";
    if( i==1){
        var content="<li class='porpleNumListItem listSelect'>"+i+"</li>";
    }
    $("#porpleNumList").append(content);
}
$(".porpleNumListItem").click(function(){
    $(".porpleNumListItem").each(function(){
        $(this).removeClass("listSelect");
    });
    $(this).addClass("listSelect");
    var selectVal= $(this).html();
    $("#porpleCount").html(selectVal);
    $("#porpleCountSubmit").val(selectVal);
    $("#Bk").hide();
    $("#context").hide();
});
//从某个时间点开始获取 N天之后的日期 
//startTime参数请使用unix时间戳或者yyyy/MM/dd HH：ii的格式
//timeFormat=1为返回默认js日期格式 2为yyyy/MM/dd HH：ii的格式 3为js时间戳
function getDateTimeMessage(startTime,useDays,timeFormat){ 
    var date=new Date(startTime);
    var unixTime=date.getTime()/1000;
    var useSecond=(86400*useDays)+(86399*1);
    var dateTimeCache=new Date((unixTime+useSecond)*1000);
    var year=dateTimeCache.getFullYear();
    var month=dateTimeCache.getMonth()+1;
    var days=dateTimeCache.getDate();
    var dateTime= year+"-"+month+"-"+days;
    switch(timeFormat){
        case 1:
        case "1":
            return dateTimeCache;
            break;
        case 2:
        case "2":
            return dateTime;
            break;  
        case 3:
        case "3":
            return dateTimeCache.getTime();
            break; 
        default:
            return dateTimeCache;
            break;
    }
}
