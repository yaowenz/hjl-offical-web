{% extends '_layout.twig.php' %}
{% block content %}

<!--banner-->
<div class="head index-bg">
	{{ include('head.twig.php') }}
	
</div>
<!--找阿姨-->
<div class="wrapper container">
	<div class="content">
		<h2 class="text-center" style="margin-bottom: 26px">找好阿姨不再是难事</h2>
		<div class="divider"><div class="divider-blue container"></div></div>
		<ul class="advantage font24">
			<li class="text-center mid-grey">
				<i class="icon icon-advantage icon-phone"></i>
				<div style="margin-bottom: 16px">真实阿姨在线海量选择</div>
				<div>手机端签约支付</div>
			</li>
			<li class="text-center mid-grey">
				<i class="icon icon-advantage icon-video"></i>
				<div style="margin-bottom: 16px">45秒阿姨在线视频</div>
				<div>手机端看人选人</div>
			</li>
			<li class="text-center mid-grey">
				<i class="icon icon-advantage icon-change"></i>
				<div style="margin-bottom: 16px">一键智能换人调单</div>
				<div>后续服务无缝对接</div>
			</li>
		</ul>
	</div>
</div>

<!--在线业务-->
<div class="wrapper container">
    <div class="content">
    	<h3 class="text-center" style="margin-bottom: 0">在线业务</h3>
		<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Online business</p>
		<div class="divider"><div class="divider-blue container"></div></div>
		<div class="swiper-container swiper-business" style="height: 458px">
			<ul class="swiper-wrapper business">
				{% for job in jobs %}
					{% if loop.index % 4 == 1 %}
					<li class="swiper-slide">
					{% endif %}
					<div class="business-item fl">
						<div class="business-item-detail clearfix">
						    <div class="fl" style="margin-left: 14px">
								<p class="mid-grey font18">{{ job.title }}</p>
								<span class="light-grey">{{ job.job_role_name }}丨{{ job.job_type_name }}</span>
							</div>
							<i class="fr icon icon-business icon-{{ job.job_role }}"></i>
						</div>
						<div class="business-item-check absolute">
							<p class="orange font28 text-center" style="margin: 18px 0 12px">{{ job.salary_name }}</p>
							<div class="relative">
								<div class="container" style="width: 116px"><button class="ayi-button">我有阿姨</button></div>
								<span class="light-grey absolute update-time">{{ job.time_ago }} 更新</span>
							</div>
						</div>
					</div>
					{% if loop.index % 4 == 0 %}
					</li>
					{% endif %}
				{% endfor %}
			</ul>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>

<!--在线阿姨-->
<div class="wrapper container" style="margin-bottom: 50px">
	<div style="padding-top: 25px">
		<h3 class="text-center" style="margin-bottom: 0">在线阿姨</h3>
		<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px"">Online business</p>
		<div class="divider"><div class="divider-blue container"></div></div>
		<div class="swiper-container swiper-worker" style="height: 292px">
			<ul class="swiper-wrapper worker">
				{% for worker in workers %}
					{% if loop.index % 4 == 1 %}
					<li class="swiper-slide">
					{% endif %}
					<div class="worker-item">
						<div class="worker-item-detail">
							<div class="photo inline-block"><img src="{{ worker.avatar_photo }}"></div>
							<div class="inline-block">
								<p style="margin-bottom: 10px"><span class="mid-grey font18">{{ worker.name }}&nbsp;&nbsp;</span><span class="light-grey font14">{{ worker.age }}岁</span></p>
								<div class="light-grey font14" style="margin-bottom: 12px">{{ worker.job_role_name }}</div>
								<div class="orange font14">{{ worker.salary_name }}</div>
							</div>
						</div>
						<div class="worker-item-check">
							<div class="inline-block light-grey font14" style="padding-left: 15px; padding-top: 40px">
								<div style="margin-bottom: 8px">微信扫描二维码</div>
								<div>查看阿姨详情</div>
							</div>
							<div class="qr fr" data-url="{{ worker.public_profile_url }}" style="margin: 20px">二维码</div>
						</div>
					</div>
					{% if loop.index % 4 == 0 %}
					</li>
					{% endif %}
				{% endfor %}
			</ul>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>

<!--我有阿姨弹窗-->
<div class="join-modal wrapper container">
    <div class="text-right">
    	<i class="icon icon-close" onclick="Custombox.close()"></i>
    </div>
	<div class="text-center">
		<i class="icon icon-join"></i>
		<div class="font20" style="margin: 28px 0">预约此业务需入驻好家联家政平台</div>
		<ul class="join clearfix">
			<li>
				<div style="height: 78px"><i class="icon icon-join-1"></i></div>
				<div class="font20" style="margin-bottom: 12px">线上渠道拓宽</div>
				<div class="light-grey" style="margin-bottom: 8px">入驻就送“微店”</div>
				<div class="light-grey">线上业务轻松接入</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-2"></i></div>
				<div class="font20" style="margin-bottom: 12px">线上渠道拓宽</div>
				<div class="light-grey" style="margin-bottom: 8px">入驻就送“微店”</div>
				<div class="light-grey">线上业务轻松接入</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-3"></i></div>
				<div class="font20" style="margin-bottom: 12px">线上渠道拓宽</div>
				<div class="light-grey" style="margin-bottom: 8px">入驻就送“微店”</div>
				<div class="light-grey">线上业务轻松接入</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-4"></i></div>
				<div class="font20" style="margin-bottom: 12px">线上渠道拓宽</div>
				<div class="light-grey" style="margin-bottom: 8px">入驻就送“微店”</div>
				<div class="light-grey">线上业务轻松接入</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-5"></i></div>
				<div class="font20" style="margin-bottom: 12px">线上渠道拓宽</div>
				<div class="light-grey" style="margin-bottom: 8px">入驻就送“微店”</div>
				<div class="light-grey">线上业务轻松接入</div>
			</li>
		</ul>
		<a href="{{ path_for('branches') }}"><button class="join-button" style="margin-top: 35px">我要入驻</button></a>
	</div>
</div>
<script type="text/javascript">
$(function () {
	$('.qr').each(function () {
		var $this = $(this)
		$this.qrcode({
			width: 88,
			height: 88,
			correctLevel:0,
			text: $this.data('url')
		});
	})
})
</script>
{% endblock %}
