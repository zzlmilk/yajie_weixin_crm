<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width" http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>用户信息</title>
        <style>
                body{
                width: 95%;
                min-width:320px;
        }
                .valInline{
        display:inline-block;
        }
                .itemsMargin{
                    margin-bottom:  20px;
                }
                .tablesWidth{
                  width: 45px;  
                  font-size: 15px;
                }
                .textContentLeave{
                    margin-left: 15px;
                    width: 60%;
                    
                }
                .textContent{
                    font-weight: bold;
                    height: 40px;
                    line-height: 40px;
                    width: 100%;
                    font-size: 15px;
                    border-radius: 7px;
                    border: 1px solid #aaa;
                    box-shadow: 6px 10px 4px -8px #ccc inset;
                    padding-left: 5px;
                }
                .userInfoButton{
                        width:40%;
            height:30px;
            text-align:center;
            background:#e7e7e7;
            line-height:30px;
            color:#a2a2a2;
            font-size:smaller;
            letter-spacing:15px;
            border:1px solid #000;
            border-radius: 5px;
            margin:5px auto;
            margin-top:15px;
            cursor:pointer;
                        box-shadow: 1px 1px 4px #000 ;
                }
                .topContent{
                    color: #c11214;
                    font-size: 15px;
                    margin-bottom: 30px;
                    line-height: 10px;
                    text-align:justify;
                    text-justify:inter-ideograph;
                    margin-top: 1em;
                }
                .mainDivStyle{
                    min-width: 320px; 
                    background-color: #fff;
                    background-image: url('{$WebSiteUrlPublic}/company/image/logBackground.png');
                    padding-left: 10px;
                }
        </style>
    </head>

    <body style="background-color: #EBEBEB">
        <div class="mainDivStyle">
            <div style="height: 0.5em;"></div>
            <div class="topContent" >
                <p style="word-spacing: 9px">李连杰客户分级：vip客户 客龄：7年</p>
                <p style="word-spacing: 30px;">特征: 存款日均中等,理财业务活跃</p>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">姓名</div><div class="valInline textContentLeave"><input class="textContent" type="text" readonly="readonly" disabled="no" value="李连杰"/></div>
            </div>
            <div class="itemsMargin"> 
                <div class="valInline tablesWidth">手机</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="1888888888" /></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">座机</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="010-88888888"/></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">住址</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="北京市王府井大街88号"/></div>
            </div>
            <div class="itemsMargin">
               <div class="valInline tablesWidth">邮箱</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="jerk@126.com"/></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">微信号</div><div class="valInline textContentLeave"><input class="textContent" type="text" readonly="readonly" disabled="no"  value="A123WERDGFDGYYT@45"/></div>
            </div>
            <div style="height: 1em"></div>
<!--            <div class="userInfoButton">修改</div>-->
        </div>
    </body>
</html>