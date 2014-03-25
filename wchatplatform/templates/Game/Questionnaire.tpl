<!DOCTYPE html>
<html> 
    <head>

       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
       <meta name="viewport" content="width=device-width,user-scalable=yes" />


       <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


       <title>问卷调查</title>
    </head>
    <script>

    </script>


    <style>
        body{
            Font-size=62.5%;
        }
        .form-control{
            width: 80%;
        }

    </style>

    <boby>
            <div class="registerWarp">

                <form class="form-horizontal"  method='post' role="form"  action="{$WebSiteUrl}?g=company&a=game&v=uploadQuestion">

                    <input type='hidden' name='title' id='title' value='{$title}'>

                    <input type='hidden' name='open_id' id='open_id' value='{$open_id}'>
                      <fieldset>
                    <div style=" padding-left: 2em;">
                        <legend>第一部分 - 基本信息</legend>
                    </div>

                <div style="padding-left: 2em;">

                   {foreach from=$info item=infos key=k}

                        {if $k <=1}

                            <div class="form-group">

                            <label for="inputEmail3" class="col-sm-2 control-label" style=" margin-bottom: 0.5em;">{$k+1}.{$infos.question_title}</label>

                            {if $infos.question_type == 0}

                                 <div class="col-sm-10">
                                   <input type="text" class="form-control"  placeholder="例如：张三" id='{$infos.question_id}' name='{$infos.question_id}'>
                                 </div>

                            {elseif $infos.question_type == 1}

                                {foreach from=$infos.question_answer_1 item=v}

                                     <div class="radio-inline">

                                       <input type="radio" name="{$infos.question_id}" id="{$infos.question_id}" value="{$v}" checked>
                                        {$v}
                                     </div>

                                {/foreach}

                            {/if}

                            </div>


                       


                        {/if}
                   {/foreach}
                          
                    <legend style="">第二部分 - 更多信息</legend>


                     {foreach from=$info item=infos key=k}

                        {if $k > 1}

                            <div class="form-group">

                            <label for="inputEmail3" class="col-sm-2 control-label" style=" margin-bottom: 0.5em;">{$k+1}.{$infos.question_title}</label>

                            {if $infos.question_type == 0}

                                 <div class="col-sm-10">
                                   <input type="text" class="form-control" id="inputEmail3" placeholder="例如：张三" id='{$infos.question_id}' name='{$infos.question_id}'>
                                 </div>

                            {elseif $infos.question_type == 1}

                                {foreach from=$infos.question_answer_1 item=v}

                                     <div class="radio-inline">

                                       <input type="radio" name="{$infos.question_id}" id="{$infos.question_id}" value="{$v}" checked>
                                        {$v}
                                     </div>

                                {/foreach}

                              {elseif $infos.question_type == 2}

                                <div style=" padding-left: 1em;">

                                {foreach from=$infos.question_answer_2 item=v}

                                      <label class="checkbox-inline">
                                      <input type="checkbox" id="{$infos.question_id}" name="{$infos.question_id}" value='{$v}'> {$v}
                                      </label>

                                {/foreach}

                               </div>

                               {elseif $infos.question_type == 3}

                                <div style=" padding-left: 1em;">
                                    <textarea class="form-control" rows="3" name='{$infos.question_id}'></textarea>
                                </div>


                            {/if}

                            </div>


                       
                        

                        {/if}
                   {/foreach}
                          
                <!-- <div style=" padding-left: 1em;"> -->
                    <button type="submit" class="btn btn-primary">提&nbsp;&nbsp;&nbsp;交</button>
                <!-- </div> -->
                        </fieldset>
                    </div>
                </form>
            </div>

            <div style=" height: 2em;"></div>
            
    </boby>

    
   
</html>

</body>
</html>