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


       <title>活动</title>
    </head>

      <script>

        $(function(){
          $("#mySign").click(function(event) {
            /* Act on the event */
            $(".bgMask").show();
          });

          $("#closeFloatWarp").click(function(event) {
            /* Act on the event */
            $(".bgMask").hide();
          });
        })
      </script>

    <style>
        body{
            Font-size=62.5%;
             background-color: rgb(243,237,227);
             /*background-color: rgb(225,225,225);*/
        }

        .regWarp{

        /*  border: solid 1px red;*/
        }
        .titleText{
          height: 2em;
          line-height: 2em;
          font-size: 1.8em;
          color: #fff;
          text-align: center;
          background-color: rgb(47,176,200);

        }
        .articleTitle{
          /*border: solid 1px red;*/
          font-size: 1.2em;
          padding-left: 0.5em;
          margin-top: 0.5em;
        }
        .timeReadNumber{
          /*border: solid 1px red;*/
           color: rgb(118,118,118);
           padding-left: 0.8em;
           font-size: 1em;
        }
        .textCotent{
          width: 98%;
          margin: 0 auto;
          min-height: 10em;
          border: solid 1px rgb(204,204,204);
          background-color: #fff;
        }
        .signedNumber{

        }
        .rowOne{
          /*border: solid 1px red;*/
          font-size: 1.2em;
          overflow: hidden;
        }
        .rowtwo{
      /*    border: solid 1px red;*/
          text-align: right;
          font-size: 1.2em;
          overflow: hidden;
        }




        .bgMask{
          width: 100%;
          height: 35em;
         
          background-color: rgba(0,0,0,0.4);
          position: absolute;
          z-index: 10;
          margin-top: -35em;
          display: none;
          
        }
    </style>

    <boby>
        
      <div class="regWarp">

          <div class="titleText">活动</div>
          <div class="articleTitle">{$info.activity_name}</div>
          <div class="timeReadNumber">
            <span>{$info.activity_end_time|date_format:'%m-%d'}</span>
            <span style=" margin-left: 1em;">阅读{$info.read_number}</span>
          </div>

          <div class="textCotent">
             {$info.activity_html}
          </div>

          <div class="timeReadNumber">
            已有人<b>{$info.apply_number}</b>报名
          </div>

          <table class="table table-striped" style=" width: 98%; margin: 0 auto;">

            {foreach from=$record item=v}

             <tr>
                <td class="rowOne">{$v.real_name}</td>
                <td class="rowtwo">{$v.apply_time|date_format:'%m-%d'}</td>
              </tr>

            {/foreach}
          </table>

        <div style=" text-align: center; margin-top: 2em;">

          {if $today_time > $info.activity_end_time}
          <button type="button" class="btn btn-info"  style="height: 2em; font-size: 1.5em; width: 95%;">报名已关闭</button>

          {else}

         <button type="button" class="btn btn-info" id="mySign" style="height: 2em; font-size: 1.5em; width: 95%;">报名</button>
     
          {/if}
        </div>

      </div>
          <div style=" height: 2em;"></div>

          <div class="bgMask">

            <div style=" width: 98%; margin: 0 auto; height: 25em; margin-top: 2em; background-color: #fff">

              <div style=" border-bottom: solid 1px #ccc; height: 2.5em; font-size: 1.6em; line-height: 2.5em; text-align: center;">填写报名信息</div>


              <div style=" width: 100%; text-align: right; padding-right: 1em; height: 2em; line-height: 2.5em; ">
                <span class="glyphicon glyphicon-remove" id="closeFloatWarp"></span>
              </div>


                <form action='{$WebSiteUrl}?g=company&a=game&v=applyAction' class="form-horizontal" method='post'role="form" style=" padding-left: 1.8em; ">
                  

                  <input type="hidden" name='id' id='id' value='{$info.activity_id}'>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"style=" font-size: 1.2em; margin-bottom: 0.5em;">真实姓名</label>
                    <div class="col-sm-10">
                      <input type="text" style=" width: 92%;" class="form-control" id="real_name" placeholder="真实姓名" name='real_name'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label" style=" font-size: 1.2em; margin-bottom: 0.5em;"> 手机号码</label>
                    <div class="col-sm-10">
                      <input type="text"style=" width: 92%;" class="form-control" id="user_phone" name='user_phone' placeholder="手机号码">
                    </div>
                  </div>
                  <div style=" text-align: center; margin-top: 2.7em;">
                    <button id="apply_button" type="submit" style=" width: 92%; font-size: 1.6em; height: 1.8em; line-height: 0.8em; margin-left: -0.8em;" class="btn btn-info">报名</button>
                  </div>
                </form>

            </div>
          </div>


    </boby>

    <script type="text/javascript">


      $('#apply_button').click(function(){

          var real_name = $('#real_name').val();

          var user_phone = $('#user_phone').val();


          if(real_name == ''){

              alert('真实姓名必须填写！！！！');

              return false;
          }


          if(user_phone == ''){

            alert('手机号码必须填写！！！！');

              return false;
          }

      })

    </script>
   
</html>
