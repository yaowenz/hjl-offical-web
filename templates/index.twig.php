{% extends '_layout.twig.php' %}
{% block content %}

<!--banner-->
<div class="head index-bg">
	{{ include('head.twig.php') }}
	
</div>
<!--找阿姨-->
<div class="wrapper container">
	<div class="content text-center">
		<h2 class="text-center">找好阿姨？不再是难事！</h2>
		<div class="sub-title light-grey">Good Ayi? Easy!</div>
		<div class="divider"><div class="divider-green container"></div></div>
		<ul class="feature mid-grey font18 text-center">
			<li>
				<i class="icon icon-feature icon-feature-phone"></i>
				<div style="margin: 22px 0 10px 0">海量真实阿姨在线</div>
				<div>身份验证 真实可靠</div>
			</li>
			<li>
				<i class="icon icon-feature icon-feature-video"></i>
				<div style="margin: 22px 0 10px 0">预录“小视频”简历</div>
				<div>足不出户 手机面试</div>
			</li>
			<li>
				<i class="icon icon-feature icon-feature-change"></i>
				<div style="margin: 22px 0 10px 0">一键换人 定期评价</div>
				<div>后续服务无缝对接</div>
			</li>
		</ul>
	</div>
</div>

<!--最新业务-->
<div class="wrapper container">
    <div class="content">
    	<h3 class="text-center">最新业务</h3>
		<div class="sub-title light-grey text-center">New Jobs</div>
		<div class="divider"><div class="divider-green container"></div></div>
		<div class="swiper-container swiper-business" style="height: 624px">
			<ul class="swiper-wrapper business" style="padding-left: 20px">
				{% for job in jobs %}
					{% if loop.index % 6 == 1 %}
					<li class="swiper-slide">
					{% endif %}
					<div class="business-item fl">
						<div class="business-item-detail clearfix">
						    <div class="fl" style="width: 420px; margin-left: 14px">
								<p class="mid-grey font18">{{ job.title_auto }}</p>
								<span class="light-grey">{{ job.display_address }}丨{{ job.job_type_name }}</span>
							</div>
							<i class="fr icon-job icon-{{ job.job_role }}"></i>
						</div>
						<div class="business-item-check absolute">
							<p class="orange font28 text-center" style="margin: 18px 0 12px">{{ job.salary_name }}</p>
							<div class="relative">
								<div class="container" style="width: 116px"><button class="ayi-button">我有阿姨</button></div>
								<span class="light-grey absolute update-time">{{ job.time_ago }} 更新</span>
							</div>
						</div>
					</div>
					{% if loop.index % 6 == 0 %}
					</li>
					{% endif %}
				{% endfor %}
			</ul>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>

<!--推荐阿姨-->
<div class="wrapper container" style="margin-bottom: 8px">
	<div style="padding-top: 20px">
		<h3 class="text-center">推荐阿姨</h3>
		<div class="sub-title light-grey text-center">Good Ayi</div>
		<div class="divider"><div class="divider-green container"></div></div>
		<div class="swiper-container swiper-worker" style="height: 600px">
			<ul class="swiper-wrapper worker" style="padding-left: 10px">
				{% for worker in workers %}
					{% if loop.index % 12 == 1 %}
					<li class="swiper-slide">
					{% endif %}
					<div class="worker-item fl">
						<div class="worker-item-detail clearfix">
							<div class="fl photo text-center"><img src="{{ worker.avatar_photo }}"></div>
							<div class="inline-block">
								<p style="margin-bottom: 10px"><span class="mid-grey font18">{{ worker.name }}&nbsp;&nbsp;</span><span class="light-grey font14">{{ worker.age }}岁</span></p>
								<div class="light-grey font14" style="margin-bottom: 12px">{{ worker.job_role_name }}</div>
								<div class="orange font14">{{ worker.salary_name }}</div>
							</div>
						</div>
						<div class="worker-item-check absolute">
							<div class="inline-block light-grey font14" style="padding-left: 15px; padding-top: 40px">
								<div style="margin-bottom: 8px">微信扫一扫</div>
								<div>查看更多资料</div>
							</div>
							<div class="qr fr" data-url="{{ worker.public_profile_url }}" style="margin: 20px"></div>
						</div>
					</div>
					{% if loop.index % 12 == 0 %}
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
				<div class="font20" style="margin-bottom: 12px">提升成交业务量</div>
				<div class="light-grey" style="margin-bottom: 8px">精准匹配</div>
				<div class="light-grey">成交签约率显著提升</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-3"></i></div>
				<div class="font20" style="margin-bottom: 12px">提高管理能力</div>
				<div class="light-grey" style="margin-bottom: 8px">服务动态实时掌握</div>
				<div class="light-grey">规避飞单，丢单的现象</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-4"></i></div>
				<div class="font20" style="margin-bottom: 12px">信息安全保障</div>
				<div class="light-grey" style="margin-bottom: 8px">交易全智能无人工干预</div>
				<div class="light-grey">隐私数据绝对保密</div>
			</li>
			<li>
				<div style="height: 78px"><i class="icon icon-join-5"></i></div>
				<div class="font20" style="margin-bottom: 12px">赢得顾客口碑</div>
				<div class="light-grey" style="margin-bottom: 8px">规范管理、服务跟踪</div>
				<div class="light-grey">顾客体验大幅提升</div>
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
