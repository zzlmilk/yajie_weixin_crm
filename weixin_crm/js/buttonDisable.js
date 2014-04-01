function buttonDisable(buttonObject){
    var nowData=new Array();
    var inputEachNum=0;
    buttonObject.prop("disabled",true);
    $(":text").each(function(){
        nowData[inputEachNum]=$(this).val();
        inputEachNum++;
    });
    $("select").each(function(){
        nowData[inputEachNum]=$(this).val();
        inputEachNum++;
    })
    $("textarea").each(function(){
        nowData[inputEachNum]=$(this).val();
        inputEachNum++;
    })
    $(":text").on("change",function(){
        var checkEachNum=0;
        var checkInputChange=false;
        $(":text").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("select").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("textarea").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        if(checkInputChange){
            buttonObject.prop("disabled",false);
        }else{
            buttonObject.prop("disabled",true);
        }

    });



    $("select").change(function(){
        var checkEachNum=0;
        var checkInputChange=false;
        $(":text").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("select").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("textarea").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        if(checkInputChange){
            buttonObject.prop("disabled",false);
        }else{
            buttonObject.prop("disabled",true);
        }  
    });
    $("textarea").change(function(){
        var checkEachNum=0;
        var checkInputChange=false;
        $(":text").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("select").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        $("textarea").each(function(){
            if(nowData[checkEachNum]!=$(this).val()){
                checkInputChange=true;
            }
            checkEachNum++;
        });
        if(checkInputChange){
            buttonObject.prop("disabled",false);
        }else{
            buttonObject.prop("disabled",true);
        }  
    });
    $(":file").change(function(){
        
        if($(this).val()!=""){
            buttonObject.prop("disabled",false);
        }else{
            buttonObject.prop("disabled",true);
        }  
    })
    
}