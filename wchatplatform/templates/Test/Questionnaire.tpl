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

                <form class="form-horizontal"  method='post' role="form" action="">
                      <fieldset>
                    <div style=" padding-left: 2em;">
                        <legend>第一部分 - 基本信息</legend>
                    </div>

                <div style="padding-left: 2em;">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label" style=" margin-bottom: 0.5em;">1.你的姓名是</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="例如：张三">
                            </div>
                          </div>

                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">2.你的性别是</label>
                    <div style=" padding-left: 1em;">
                        <div class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            男
                        </div>
                        <div class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            女
                        </div>

                        <div class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            女博士/程序媛
                        </div>
                    </div>
                </div>

                        <legend style="">第二部分 - 更多信息</legend>


                <div class="form-group">
                        <label for="optionsRadios1" class="col-sm-2 control-label">3.你的兴趣有</label>

                    <div style=" padding-left: 1em;">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox1" value="option1"> 足球
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox2" value="option2"> 篮球
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox3" value="option3"> 跑步
                        </label>
                    </div>
                </div>


                <div class="form-group">

                    <label for="optionsRadios1" class="col-sm-2 control-label">4.你的自我介绍</label>
                    <div style=" padding-left: 1em;">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                </div>


                <!-- <div style=" padding-left: 1em;"> -->
                    <button type="button" class="btn btn-primary">提&nbsp;&nbsp;&nbsp;交</button>
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