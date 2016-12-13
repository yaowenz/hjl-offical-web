{% extends '_layout.twig.php' %}
{% block content %}

<!--banner-->
<div class="head about-bg">
	{{ include('head.twig.php') }}
</div>
<!--商务合作-->
<div class="wrapper container" style="margin-bottom: 112px">
    <div class="content">
    	<h3 class="text-center" style="margin-bottom: 0">商务合作 / 门店入驻</h3>
		<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Guarantee</p>
		<div class="divider"><div class="divider-blue container"></div></div>
		<div class="cooperate mid-grey font24">
			<div class="inline-block" style="width: 378px">
				<div class="fl icon-cooperate text-center"><i class="icon icon-tel-green" style="margin-top: 22px"></i></div>
				<span class="fl" style="margin: 32px 0 0 22px">400-823-6199</span>
			</div>
			<div class="inline-block" style="width: 652px; margin-left: 68px">
			    <div class="fl icon-cooperate text-center"><i class="icon icon-address" style="margin-top: 24px"></i></div>
				<span class="fl" style="margin: 32px 0 0 22px">上海市杨浦区隆昌路590号复旦软件园5层A-C</span>
			</div>
		</div>
		<div class="map text-center" style="padding: 10px">
			<img src="{{baseUrl}}/image/map.jpg">
		</div>
	</div>
</div>

<!--合作广告-->
<div class="ad-bg green-bg text-center">
	<img src="{{baseUrl}}/image/computer.png">
	<img src="{{baseUrl}}/image/tel.png" style="margin-left: 132px">
</div>

{% endblock %}