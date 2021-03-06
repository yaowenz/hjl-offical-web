<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{% if pageTitle %}{{ pageTitle }} | {% endif %}好家联 | 好阿姨，好服务</title>
        <meta name="description" content="好家联,找阿姨,家政服务">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/swiper-3.4.0.min.css">
        <link rel="stylesheet" href="css/custombox.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/page.css">
        <link rel="shortcut icon" href="favicon.png" />        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/vendor/jquery-3.1.0.min.js"></script>
        <script src="js/vendor/swiper-3.4.0.jquery.min.js"></script>
        <script src="js/vendor/legacy.min.js"></script>
        <script src="js/vendor/custombox.min.js"></script>
        <script src="js/vendor/jquery.qrcode.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        {% if _APP_ENV == 'production' %}
        <script>	       
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "//hm.baidu.com/hm.js?d225feebd311ed9b6e6358bde0b5cf09";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(hm, s);
			})();        	
        </script>
        {% endif %}
    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	{% block content %}
	{% endblock %}	
    <!--返回顶部-->
    <div class="to-top fixed text-center">
        <i class="icon icon-rocket"></i>
        <div class="green" style="margin-top: 5px">返回顶部</div>
    </div>
    {{ include('foot.twig.php') }}    
	</body>
</html>
