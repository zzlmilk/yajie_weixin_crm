<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>刮刮卡</title>
        <script type="text/javascript" src="{$WebSiteUrlPublic}/company/ggk/jQuery.js"></script>
        <script type="text/javascript" src="{$WebSiteUrlPublic}/company/ggk/wScratchPad.js"></script>  
    </head>
    <body>

        <style>
            .wScratchPad3{
                display:inline-block;
                position:relative; 
                border:solid #ccc 1px;
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 3%;
                width: 90%;
                height: 20em;
                overflow: hidden;

            }

        </style>

        <div id="wScratchPad3" class="wScratchPad3"></div>

        <script type="text/javascript">

            var WebSiteUrlPublic = '{$WebSiteUrlPublic}';
            $(function(){
            $("#wScratchPad3").wScratchPad({
            cursor:'',
            image:WebSiteUrlPublic+'/company/ggk/xx.jpg',			
            scratchUp: function(e, percent){
            console.log(percent);
            if(percent > 30){
            this.clear();
        }
    }
});
})		
        </script>
    </body>
</html>