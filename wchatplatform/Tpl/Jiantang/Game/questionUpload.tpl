<!DOCTYPE html>
<html>
    <head>
        <title>问卷调查结果</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <style>
            body{
                Font-size=62.5%;
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
                width: 95%;
            }
            .tableSize{
                width: 100%;
                text-align: center;
            }
            .inlinDisplay{
                display: inline-block;
            }
            td{
                width: 50%;
            }
            .giftListStyle{
                background-color: #fff;
                height: 125px;
                margin-top: 15px;

            }
            .round_photo{
                width:100%;
                height: auto;
                min-height: 65px;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:50%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .giftBox{
                background-color: white; 
                width: 45%;
                height:240px;
                float: left;
                margin-right:  10px;
                margin-top: 15px;
                border: 1px solid #8C8C8C;
            }
            .integration{
                color: orange; 
                text-align: right; 
                padding-right: 10px;
                font-weight: bold;
            }
            .integration a{
                color: orange;
            }
            .integration a:hover{
                color: orange;
                text-decoration: none;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <div class="registerWarp" style="padding-bottom: 10px;">
            <div style="width: 90%;margin: 0 auto;">{$message}</div>
            <div style="height:25px;"></div>
            <div style="width: 90%; margin: 0 auto;">
                <p>科普：如果你有以下症状达七个，就须提高警惕!</p>
                <p>1.<em>鞋跟有高低</em>：如果你的鞋后跟常被磨得高低不平，通常是由于双腿长度的不等或沿着脊柱长轴压力的不均衡造成的。 </p> 
                <p>2.<em>深呼吸困难</em>：你不能完成十分舒适的深长呼吸，呼吸、健康、脊椎的健康和活力相互紧密联系。</p>
                <p>3.<em>骨头咔嗒响</em>：你的下颌运动时会发出“咔嗒”的声音，多是由于颈部或者髋关节半脱位引起的。</p>
                <p>4.<em>关节爆破声</em>：你的颈部、背部或更多关节会发出爆裂的声音，通常是由于你的脊椎关节被锁住或卡住。</p>
                <p>5.<em>扭动有困难</em>：你的头或髋部不能向两侧轻松地扭动或者旋转相同的角度，运动的范围正逐渐缩小。</p>
                <p>6.<em>身体一边侧</em>：假如你的头部总是不自觉地偏向一侧，你的一条腿总想搭到另一条腿上，或是不留神时走路时身体总向一侧倾斜，是脊柱侧弯的表现。</p>　　
                <p>7.<em>常有疲劳感</em>：你经常感到疲劳，不平衡的脊柱耗尽你的能量。</p>
                <p>8.<em>经常周身痛</em>：经常闪腰、岔气是椎间关节活动受限所致，经常周身疼痛是脊椎病的征兆。</p>
                <p>9.<em>精神不集中</em>：你的精神不能很好地集中，因为脊椎半脱位会影响大脑健康。</p>
                <p>10.<em>抵抗力降低</em>：你对疾病的抵抗力较弱，脊椎半脱位影响你的神经内分泌系统。</p>
                <p>11.<em>走路外八字</em>：你的脚在行走的时候脚尖向外展开。</p>
                <p>12.<em>长短腿现象</em>：出现一条腿比另一条腿短。不脱鞋，俯卧，让一个人在你后边站着，把你的脚后跟沿着身体的方向轻轻拉直，观察你的脚。比脚后跟的位置，若出现长短不一，则说明你的骨盆和脊椎有扭曲错位的现象。</p>
                <p>13.<em>有不良姿态</em>：两脚分开，与肩同宽站立，体重应该相等地分配在两个脚掌。如果不是，这就是你的脊椎扭曲的最好证明。</p>
                <p>14.<em>软组织疼痛</em>：你有头痛或颈、腰、背部的疼痛及肌肉或关节的软组织疼痛，通常是具有脊椎半脱位的信号。</p>
                <p>15.<em>肌肉紧张感</em>：你有一种持续的紧张皱缩感和压力感，尤其是在肌肉和关节中有发紧的感觉，通常是脊椎半脱位的影响。</p>
                <p>16.<em>肩颈常僵硬</em>：你感到背和颈部僵硬不适,也许是脊椎半脱位的信号。</p>
                <p>17.<em>浑身不舒服</em>：你只是感到轻微的不舒服，但你的健康状况并不好，脊椎半脱位能影响你的全面健康。</p>
            </div>
        </div>

</html>