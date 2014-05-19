<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
		<meta name="viewport" content="width=device-width"><!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

		<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

		<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
</script>
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
		<script src="{$WebSiteUrl}/js/Chart.js" type="text/javascript">
</script>

<script src="{$WebSiteUrl}/js/highcharts.js" type="text/javascript">
</script>
		<style type="text/css">
.labelWidth{
		width: auto !important;
		}
		.inputWidth{
		width: 170px;
		}
		.userMangerTitle{
		color: rgb(91,91,91);
		font-size: 2.5em;
		margin-top: 15px;
		text-align: center;
		}
		.errorMessage{
		width: 300px;
		margin: 0 auto;
		display: none;
		}
		</style>
		<title></title>
	</head>
	<body>
		<div class="userMangerTitle">
			统计
		</div>

		   <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">统计类型</label>
                <div class="col-sm-2">
                    <select name="type" id='type' class="form-control inputWidth" onchange='locationUrl()'>
                        <option value="1" {if $type == 1}selected="selected" {/if}>每月用户消费</option>
                        <option value="2" {if $type == 2}selected="selected" {/if}>1季度消费</option>
                         <option value="3" {if $type == 3}selected="selected" {/if}>每月项目消费</option>
                    </select>
                </div>

                 <div class="col-sm-2">
                    <select name="tongjiType" id='tongjiType' class="form-control inputWidth" onchange='locationUrl()'>
                        <option value="0" {if $tongjiType == 0}selected="selected" {/if}>折线图</option>
                        <option value="1" {if $tongjiType == 1}selected="selected" {/if}>圆柱图</option>
                        
                    </select>
                </div>
            </div>

            <br />
		<div id="container" style="min-width:800px;height:400px"></div>
	</body>

	<script>

	   var url = '{$WebSiteUrl}';

	   var type = '{$type}';

	   var XVAL = eval('{$XVAL}');



	   var YVAL = eval('{$YVAL}');

       var tongjiType = '{$tongjiType}';

       var $name;

        if(tongjiType == 1){

             $name = 'column';
         
        }

        if(tongjiType == 0){

             $name = 'line';

        }

      

     $(function () {
    $('#container').highcharts({

      

         chart: {
            type: $name
         },
       
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: XVAL
        },
        yAxis: {
            title: {
                text: ''
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '金额',
            data: YVAL
        }]
    });
});
				

    function locationUrl(){


    	window.location.href= url+'/pageredirst.php?action=statistics&functionname=statistics&type='+$('#type').val()+'&tongjiType='+$('#tongjiType').val();

    }
    
    </script>
</html>