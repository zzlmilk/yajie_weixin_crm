<html><head> 
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>今日大奖</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/client-page1d095f.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/pc-page1d0858.css"/>
    <![endif]-->
    <link media="screen and (min-width:1000px)" rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/pc-page1d0858.css">
    <style>
        body{ -webkit-touch-callout: none; -webkit-text-size-adjust: none; }
    </style>
    <script type="text/javascript">
        document.domain = "qq.com";
        var _wxao = window._wxao || {};
        _wxao.begin = (+new Date());
    </script>
    <style>
        #nickname{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;max-width:90%;}
                ol,ul{list-style-position:inside;}
        #activity-detail .page-content .text{font-size:16px;}
            </style>
</head> 

<body id="activity-detail">
            <img width="12px" style="position: absolute;top:-1000px;" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/ico_loading1984f1.gif">
        
        <div class="page-bizinfo">
            <div class="header">
            <h1 id="activity-name">今日大奖</h1>
            <p class="activity-info">
                <span id="post-date" class="activity-meta no-extra">2014-04-11</span>
                                                <a href="javascript:viewProfile();" id="post-user" class="activity-meta">
                    <span class="text-ellipsis">雅捷</span><i class="icon_link_arrow"></i>
                </a>
                            </p>
            </div>
        </div>
        
        <div id="page-content" class="page-content">
            <div id="img-content">
                                    
                        <div class="media" id="media">
            <img onerror="this.parentNode.removeChild(this)" src="http://mmbiz.qpic.cn/mmbiz/icY3k0U70337jqsbGrVUBmHktFvxBnqibIsv12D1eVRGgbAVGZNYyKk18BxicjYKXJ1zmh4KFX5sATeHxpibz90MHA/0">
            </div>
                        <div class="text"><p>从邮储转账5万，享受3个月ATM异地跨行取款免手续费<br></p></div>
            <p class="page-toolbar">
                                <a href="javascript:viewSource();" class="page-url">阅读原文</a>
                                <a href="javascript:report_article();" class="page-imform">举报</a>
            </p>
            </div>
                    </div>
        <script type="text/javascript">
        var ISWP = !!(navigator.userAgent.match(/Windows\sPhone/i));
        var sw = 0;

        if (ISWP){
            var profile = document.getElementById('post-user');
            if (profile){
                profile.setAttribute("href", "weixin://profile/gh_7a87e4090c58");
            }
        }
        var tid = "";
        var aid = "";
        var uin = "";
        var key = "";
        var biz = "MzA4MDQyNTQyNQ==";
		var networkType;
		
        var cookie = {
            get: function(name){
                if( name=='' ){
                    return '';
                }
                var reg = new RegExp(name+'=([^;]*)');
                var res = document.cookie.match(reg);
                return (res && res[1]) || '';
            },
            set: function(name, value){
                var now = new Date();
                    now.setDate(now.getDate() + 1);
                var exp = now.toGMTString();
                document.cookie = name + '=' + value + ';expires=' + exp;
                return true;
            }
        };

        function hash(str){
            var hash = 5381;
            for(var i=0; i<str.length; i++){
                hash = ((hash<<5) + hash) + str.charCodeAt(i);
                hash &= 0x7fffffff;
            }
            return hash;
        }

        function trim(str){
            return str.replace(/^\s*|\s*$/g,'');
        }

        function ajax(obj){
            var type  = (obj.type || 'GET').toUpperCase();
            var url   = obj.url;
            var async = typeof obj.async == 'undefined' ? true : obj.async;
            var data  = typeof obj.data  == 'string' ? obj.data : null;
            var xhr   = new XMLHttpRequest();
            var timer = null;
            xhr.open(type, url, async);
            xhr.onreadystatechange = function(){
                if( xhr.readyState == 3 ){
                    obj.received && obj.received(xhr);
                }
                if( xhr.readyState == 4 ){
                    if( xhr.status >= 200 && xhr.status < 400 ){
                        clearTimeout(timer);
                        obj.success && obj.success(xhr.responseText);
                    }
                    obj.complete && obj.complete();
                    obj.complete = null;
                }
            };
            if( type == 'POST' ){
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
            }
            xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
            xhr.send(data);
            if( typeof obj.timeout != 'undefined' ){
                timer = setTimeout(function(){
                    xhr.abort("timeout");
                    obj.complete && obj.complete();
                    obj.complete = null;
                }, obj.timeout);
            }
        }

        var title     = trim('今日大奖'      .replace(/&lt;/g, '<').replace(/&gt;/g, '>'));
        var sourceurl = trim('http://112.124.25.155/yaJieWeChatx/ggk/index.html#rd'.replace(/&lt;/g, '<').replace(/&gt;/g, '>'));
      
        // 举报 
        function report_article(){
            var url   = sourceurl == '' ? location.href : sourceurl;
            var query = [
                '雅捷', 
                location.href, 
                title,
                url
            ].join("|WXM|");
              
            location.href = '/mp/readtemplate?t=wxm-appmsg-inform&__biz=MzA4MDQyNTQyNQ==&info=' + encodeURIComponent(query) + "#wechat_redirect";
        }


        // 阅读原文
        function viewSource(){
            var redirectUrl = sourceurl.indexOf('://') < 0 ? 'http://'+sourceurl : sourceurl;
                redirectUrl = 'http://' + location.host + '/mp/redirect?url=' + encodeURIComponent(sourceurl);
            // TODO 统计不需要服务器响应数据
            var opt = {
                url : '/mp/advertisement_report' + location.search + '&report_type=3&action_type=0&url=' + encodeURIComponent(sourceurl) + "&uin=" + uin + "&key=" + key + "&__biz=" + biz + '&r=' + Math.random(),
                type:"GET",
                async:false
            };
            if (!!tid){
                opt.success = function(res){
                    try{
                        res = eval('(' + res + ')');
                    }catch(e){res = {}}
                    if (res && res.ret == 0){
                        location.href = redirectUrl;
                    }else{
                        viewSource();//REDO
                    }
                }
            }else{
                opt.timeout = 2000;
                opt.complete = function(){
                    location.href = redirectUrl;
                }
            }
            ajax(opt);
            return false;
        };


        function parseParams(str) {
            if( !str ) return {};

            var arr = str.split('&'), obj = {}, item = '';
            for( var i=0,l=arr.length; i<l; i++ ){
                item = arr[i].split('=');
                obj[item[0]] = item[1];
            }
            return obj;
        }

        function htmlDecode(str){
            return str
                  .replace(/&#39;/g, '\'')
                  .replace(/<br\s*(\/)?\s*>/g, '\n')
                  .replace(/&nbsp;/g, ' ')
                  .replace(/&lt;/g, '<')
                  .replace(/&gt;/g, '>')
                  .replace(/&quot;/g, '"')
                  .replace(/&amp;/g, '&');
        }
                  
        function report(link, fakeid, action_type){
            var queryStr = link.split('?').pop();
                queryStr = queryStr.split('#').shift();
            if( queryStr == '' ){
                return;
            }

            var param = [
                queryStr,
                'action_type=' + action_type,
                'uin=' + fakeid
            ].join('&');
            
            ajax({
                url : '/mp/appmsg/show',
                type: 'POST',
                timeout: 2000,
                data: param
            });
        }

        function reportTimeOnPage(){
            var link     = location.href;
            var fakeid   = "";
            var queryStr = link.split('?').pop();
                queryStr = queryStr.split('#').shift();
            if( queryStr == '' ){
                return;
            }

            var param = [
                queryStr,
                'start_time='+_wxao.begin,
                'end_time='+new Date().getTime(),
                'uin='+fakeid,
                'title='+encodeURIComponent(title),
                'action=pagetime'
            ].join('&');

            ajax({
                url: '/mp/appmsg/show?'+param,
                //url: '/mp/comm_report?'+param,
                async : false,
                timeout: 2000
            });
            //var img = new Image(1,1);
            //img.src = '/mp/appmsg/show?'+param;
        }

        function share_scene(link, scene_type){
            var extargs = "";
            if (tid != ""){//gdt traceid
                extargs = "tid=" + tid + "&aid=" + 54;//share must be 54
            }
            var queryStr = link.split('?')[1] || '';
                queryStr = queryStr.split('#')[0];
            if( queryStr == '' ){
                return;
            }
            
            var queryarr = [queryStr, 'scene='+scene_type];
            (extargs != "") && (queryarr.push(extargs));
            queryStr = queryarr.join('&');

            return link.split('?')[0] + '?' + queryStr + '#' + (link.split('#')[1]||'');
        }
        function get_url(link, extargs){
            extargs = extargs || "";
            var queryStr = link.split('?')[1] || '';
                queryStr = queryStr.split('#')[0];
            if( queryStr == '' ){
                return;
            }
            
            var queryarr = [queryStr];
            (extargs != "") && (queryarr.push(extargs));
            queryStr = queryarr.join('&');

            return link.split('?')[0] + '?' + queryStr + '#' + (link.split('#')[1]||'');
        }
        
        function viewProfile(){
            if (typeof WeixinJSBridge != "undefined" && WeixinJSBridge.invoke){
                WeixinJSBridge.invoke('profile',{
                    'username':'gh_7a87e4090c58',
                    'scene':'57'
                });
            }
        }
      
      
        (function(){

        function onBridgeReady() {

            var appId  = '',
                imgUrl = "http://mmbiz.qpic.cn/mmbiz/icY3k0U70337jqsbGrVUBmHktFvxBnqibIsv12D1eVRGgbAVGZNYyKk18BxicjYKXJ1zmh4KFX5sATeHxpibz90MHA/0",
                link   = "http://mp.weixin.qq.com/s?__biz=MzA4MDQyNTQyNQ==&mid=200172820&idx=1&sn=4c9ef2755aa54315c5c2364d2263dff3#rd",
                title  = htmlDecode("今日大奖"),
                desc   = htmlDecode("邮储转账5万元抽取大奖，快快行动把！"),
                fakeid = "";
                desc   = desc || link;  

            if( "1" == "0" ){
                WeixinJSBridge.call("hideOptionMenu");  
            }

            // 发送给好友; 
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
            
                        WeixinJSBridge.invoke('sendAppMessage',{
                                              "appid"      : appId,
                                              "img_url"    : imgUrl,
                                              "img_width"  : "640",
                                              "img_height" : "640",
                                              "link"       : share_scene(link, 1),
                                              "desc"       : desc,
                                              "title"      : title
                        }, function(res) {report(link, fakeid, 1);
                        });
            });

                    // 分享到朋友圈;
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                        report(link, fakeid, 2);
                        WeixinJSBridge.invoke('shareTimeline',{
                                              "img_url"    : imgUrl,
                                              "img_width"  : "640",
                                              "img_height" : "640",
                                              "link"       : share_scene(link, 2),
                                              "desc"       : desc,
                                              "title"      : title
                        }, function(res) {
                        });
            
            });

                    // 分享到微博;
            var weiboContent = '';
            WeixinJSBridge.on('menu:share:weibo', function(argv){
            
                        WeixinJSBridge.invoke('shareWeibo',{
                                              "content" : title + share_scene(link, 3),
                                              "url"     : share_scene(link, 3) 
                                              }, function(res) {report(link, fakeid, 3);
                                              });
            });

                    // 分享到Facebook
            WeixinJSBridge.on('menu:share:facebook', function(argv){
                report(link, fakeid, 4);
                WeixinJSBridge.invoke('shareFB',{
                      "img_url"    : imgUrl,
                      "img_width"  : "640",
                      "img_height" : "640",
                      "link"       : share_scene(link, 4),
                      "desc"       : desc,
                      "title"      : title
                }, function(res) {} );
            });

                    // 新的接口
            WeixinJSBridge.on('menu:general:share', function(argv){
                var scene = 0;
                switch(argv.shareTo){
                    case 'friend'  : scene = 1; break;
                    case 'timeline': scene = 2; break;
                    case 'weibo'   : scene = 3; break;
                }
                    argv.generalShare({
                                        "appid"      : appId,
                                        "img_url"    : imgUrl,
                                        "img_width"  : "640",
                                        "img_height" : "640",
                                        "link"       : share_scene(link,scene),
                                        "desc"       : desc,
                                        "title"      : title
                    }, function(res){report(link, fakeid, scene);
                    });
            });
			
            // get network type
			var nettype_map = {
				"network_type:fail" : "fail",
				"network_type:edge": "2g",
				"network_type:wwan": "3g",
				"network_type:wifi": "wifi"
			};
			if (typeof WeixinJSBridge != "undefined" && WeixinJSBridge.invoke){
				WeixinJSBridge.invoke('getNetworkType',{}, function(res) {
					networkType = nettype_map[res.err_msg];
					initpicReport();
				});
			}        }

        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
                document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
            }
        }else{
            onBridgeReady();
        }
        
        })();

        // 记住阅读位置
        (function(){
            var timeout = null;
            var val = 0;
            var url = "http://mp.weixin.qq.com/s?__biz=MzA4MDQyNTQyNQ==&mid=200172820&idx=1&sn=4c9ef2755aa54315c5c2364d2263dff3#rd".split('?').pop();
            var key = hash(url);
            /*
            var params = parseParams( url );
            var biz = params['__biz'].replace(/=/g, '#');
            var key = biz + params['appmsgid'] + params['itemidx'];
            */

            if( window.addEventListener ){
                window.addEventListener('load', function(){
                    val = cookie.get(key);
                    window.scrollTo(0, val);
                }, false);

                window.addEventListener('unload', function(){
                    cookie.set(key,val);
                    // 上报页面停留时间
                    reportTimeOnPage();
                }, false);

                window.addEventListener('scroll', function(){
                    clearTimeout(timeout);
                    timeout = setTimeout(function(){
                        val = window.pageYOffset;
                    },500);
                }, false);

                document.addEventListener('touchmove', function(){
                    clearTimeout(timeout);
                    timeout = setTimeout(function(){
                        val = window.pageYOffset;
                    },500);
                }, false);
            }else if(window.attachEvent){
                window.attachEvent('load', function(){
                    val = cookie.get(key);
                    window.scrollTo(0, val);
                }, false);

                window.attachEvent('unload', function(){
                    cookie.set(key,val);
                    // 上报页面停留时间
                    reportTimeOnPage();
                }, false);

                window.attachEvent('scroll', function(){
                    clearTimeout(timeout);
                    timeout = setTimeout(function(){
                        val = window.pageYOffset;
                    },500);
                }, false);

                document.attachEvent('touchmove', function(){
                    clearTimeout(timeout);
                    timeout = setTimeout(function(){
                        val = window.pageYOffset;
                    },500);
                }, false);
            }
        })();

    
        //弹出框中图片的切换
        (function(){
            var imgsSrc = [];
            function reviewImage(src) {
                if (typeof window.WeixinJSBridge != 'undefined') {
                    WeixinJSBridge.invoke('imagePreview', {
                        'current' : src,
                        'urls' : imgsSrc
                    });
                }
            }
            function onImgLoad() {
                var imgs = document.getElementById("img-content");
                imgs = imgs ? imgs.getElementsByTagName("img") : [];
                for( var i=0,l=imgs.length; i<l; i++ ){//忽略第一张图 是提前加载的loading图而已
                    var img = imgs.item(i);
                    var src = img.getAttribute('data-src') || img.getAttribute('src');
                    if( src ){
                        imgsSrc.push(src);
                        (function(src){
                            if (img.addEventListener){
                                img.addEventListener('click', function(){
                                    reviewImage(src);
                                });
                            }else if(img.attachEvent){
                                img.attachEvent('click', function(){
                                    reviewImage(src);
                                });
                            }
                        })(src);
                    }
                }
            }
            if( window.addEventListener ){
                window.addEventListener('load', onImgLoad, false);
            }else if(window.attachEvent){
                window.attachEvent('load', onImgLoad);
                window.attachEvent('onload', onImgLoad);
            }
        })();

        var has_click = {};
        function gdt_click(type, url, rl, apurl, traceid, group_id){
            if (has_click[traceid]){return;}
            has_click[traceid] = true;
            var loading = document.getElementById("loading_" + traceid);
            if (loading){
                loading.style.display = "inline";
            }
            var b = (+new Date());
            ajax({
                url : "/mp/advertisement_report?report_type=2&type=" + type + "&url=" + encodeURIComponent(url) + "&tid=" + traceid + "&rl=" + encodeURIComponent(rl) + "&uin=" + uin + "&key=" + key + "&__biz=" + biz + "&r=" + Math.random(),
                type : "GET",
                timeout: 1000,
                complete : function(res){
                /*
                    try{ 
                        res = eval("(" + res + ")");
                    }catch (e){res = {};}
                    if (res && res.ret == 0){
                    */
                        has_click[traceid] = false;
                        if (loading){
                            loading.style.display = "none";
                        }
                        if (type == "5"){
                            //ping profile
                            if (typeof WeixinJSBridge != "undefined"){ 
                                WeixinJSBridge.invoke('profile',{
                                    'username':url,
                                    'scene':'57'
                                });
                            }
                        }else{
                            //ping
                            location.href = get_url(url,"tid=" + traceid);
                        }
                        /*
                           }
                           */

                },
                async:true
                });
        }

        // 图片延迟加载
        (function(){
            var timer  = null;
            var innerHeight = (window.innerHeight||document.documentElement.clientHeight);
            var height = innerHeight + 40;
            var images = [];
            function detect(){
                var scrollTop = (window.pageYOffset||document.documentElement.scrollTop) - 20;
                for( var i=0,l=images.length; i<l; i++ ){
                    var img = images[i];
                    var offsetTop = img.el.offsetTop;
                    if( !img.show && scrollTop < offsetTop+img.height && scrollTop+height > offsetTop ){
                        img.el.setAttribute('src', img.src);
                        img.show = true;
                    }
                    if (ISWP && (img.el.width*1 > sw)){//兼容WP
                        img.el.width = sw;
                    }
                }
            }

            var ping_apurl = false;
            function onScroll(){
                clearTimeout(timer);
                timer = setTimeout(detect, 100);

                //gdt
                var gdt_area = document.getElementById("gdt_area");
                if (!!gdt_area && !ping_apurl){
                    var scrollTop = (window.pageYOffset||document.documentElement.scrollTop);
                    var offsetTop = gdt_area.offsetTop;
                    if( scrollTop+innerHeight > offsetTop ){
                        //ping gdt apurl
                        var gdt_a = document.querySelectorAll("#gdt_area a");
                        if (gdt_a.length){
                            gdt_a = gdt_a[0];
                            if (gdt_a.dataset && gdt_a.dataset.apurl){
                                ping_apurl = true;
                                var gid = gdt_a.dataset.gid;
                                var tid = gdt_a.dataset.tid;
                                ajax({
                                    url : "/mp/advertisement_report?report_type=1&tid=" + tid + "&adver_group_id=" + gid +  "&apurl=" + encodeURIComponent(gdt_a.dataset.apurl) + "&uin=" + uin + "&key=" + key + "&__biz=" + biz + "&r=" + Math.random(),
                                    success : function(res){
                                        try{ 
                                            res = eval("(" + res + ")");
                                        }catch (e){res = {};}

                                        if (res && res.ret != 0){
                                            ping_apurl = false;
                                        }
                                    },
                                    async:true
                                });
                            }
                        }
                    }
                }

            }
            function onLoad(){
                var imageEls = document.getElementsByTagName('img');
                var pcd = document.getElementById("page-content");
                if (pcd.currentStyle){
                    sw = pcd.currentStyle.width;
                }else if (typeof getComputedStyle != "undefined"){
                    sw = getComputedStyle(pcd).width;
                }
                sw = 1*(sw.replace("px", ""));
                for( var i=0,l=imageEls.length; i<l; i++ ){
                    var img = imageEls.item(i);
                    if(!img.getAttribute('data-src') ) continue;
                    images.push({
                        el     : img,
                        src    : img.getAttribute('data-src'),
                        height : img.offsetHeight,
                        show   : false
                    });
                }
                detect();
				// @cunjinli
				initpicReport();
            }
            if( window.addEventListener ){
                window.addEventListener('scroll', onScroll, false);
                window.addEventListener('load', onLoad, false);
                document.addEventListener('touchmove', onScroll, false);
            }
            else {
                window.attachEvent('onscroll', onScroll);
                window.attachEvent('onload', onLoad);
            }
        })();
		// pic load report
		//@cunjinli
		function addEvent(elem, type, func) {
			if (window.addEventListener ) {
				elem.addEventListener(type, func, false);
			} else if (window.attachEvent) {
				elem.attachEvent("on" + type, (function(elem) {
					return function(e){ func.call(elem, e); };
				})(elem));
			} else {
				elem["on" + type] = func;
			}
		}
		function log(msg) {
			var log = document.getElementById("log");
			if (log) {
				var html = log.innerHTML;
				log.innerHTML = html + "<div>" + msg +"</div>";
			}
		}
		function initpicReport() {
			if (!networkType)
				return;

			var performance = window.performance || window.msPerformance || window.webkitPerformance,
				getEntries = null; 
			if (!performance || (typeof performance.getEntries === "undefined")) {
				return;
			}
			//add image performance report
			var r, sample = 100;
			var imageEls = document.getElementsByTagName('img');
			function obj2query(obj) {
				var arr = [];
				for(var key in obj) {
					arr.push(key + "=" + encodeURIComponent(obj[key]||""));
				}
				return arr.join("&");
			}
			var ua = navigator.userAgent, client_version;
			/micromessenger\/(\d+\.\d+)/i.test(ua);
			client_version = RegExp.$1;
			for(var i=0, l=imageEls.length; i <l; i++) {
				r = parseInt(Math.random() * 100);
				if (r > sample) {
					continue;
				}
				var src = imageEls[i].getAttribute("src");
				if (src.indexOf("mp.weixin.qq.com") >= 0) {
					continue;
				}
				var entities = performance.getEntries(), entity;
				// find the entity from performance
				for(var j = 0; j < entities.length; j++) {
					entity = entities[j];
					if (entity.name == src) {
						ajax({	
							type : "POST",
							url: "/mp/appmsgpicreport?__biz=MzA4MDQyNTQyNQ==" + "&uin=" + uin + "&key=" + key + "#wechat_redirect",
							data: obj2query({
								rnd: Math.random(),
								uin: uin,
								version: "",
								client_version: client_version,
								device: navigator.userAgent,
								time_stamp: parseInt((+new Date())/1000),
								url: src,
								img_size: imageEls[i].fileSize||0,
								user_agent: navigator.userAgent,
								net_type: networkType,
								sample: parseInt(100/sample),
								delay_time: parseInt(entity.duration)
							})
						});
						break;
					}
				}
			}
		}
        (function(){
            //a
            var ext = [];
            var fext = [];
            function checkA(){
                var as = document.getElementsByTagName('a');
                var res = false;
                if (!!as){
                    var l = as.length;
                    for (var i = 0; i < l; ++i){
                        var a = as[i];
                        var href = a.getAttribute('href');
                        var r = /^(http|https):\/\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)(\/)?/g;
                        var m = r.exec(href);
                        if (m && m[2] && m[2] != "mp.weixin.qq.com"){
                            res = res || [];
                            res.push(href);
                            ext.push(encodeURIComponent(href));
                        }
                    }
                }
                return res;
            }
            function checkForm(){
                var forms = document.getElementsByTagName('form');
                if (forms){
                    for (var i = 0; i < forms.length; ++i){
                        var a = forms[i];
                        if (a){
                            var h = a.outerHTML || "";
                            fext.push(encodeURIComponent(a.getAttribute("action")+h.substr(0,400)));
                        }
                    }
                }
                return forms ? forms.length : 0;
            }

            var param = [];
            (checkA()) && (param.push(1));
            (checkForm()) && (param.push(2));
            if (param.length > 0){
                ext = "&url=" + ext.join("||");
                fext = "&furl=" + fext.join("||");
                ajax({
                    url : "/mp/hijack?type=" + param.join(",") + "&r="+Math.random() + ext + fext,
                    type: 'POST',
                    timeout: 2000,
                    data:''
                });
            }
        })();
    </script>



</body></html>