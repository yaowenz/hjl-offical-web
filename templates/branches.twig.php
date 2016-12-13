{% extends '_layout.twig.php' %}
{% block content %}

<!--banner-->
<div class="head join-bg">
	{{ include('head.twig.php') }}

	<!--标题-->
	<div class="wrapper container">
		<div>
			<div class="title">三大平台支撑 家政生意不再难做</div>
			<div class="subtitle font20">
				好家联是一个基于互联网技术的家政服务链一站式服务平台，致力于解决<br>家政业管理运营粗放、工作效率低下、信息共享不足、资源融合有限等一<br>
				系列的家政服务矛盾及问题。
			</div>
			<div class="join-content">
				<div style="padding-top: 54px">
					<h3 class="text-center" style="margin-bottom: 0">门店合作 / 平台担保</h3>
					<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Guarantee</p>
					<div class="divider"><div class="divider-blue container"></div></div>
					<div class="text-center" style="margin-top: 58px">
						<img src="{{baseUrl}}/image/match.png">
						<div class="mid-grey font20" style="margin-bottom: 8px">智能匹配</div>
						<div class="mid-grey font20">迅速将剩余价值转化为收益</div>
						<a href="{{ path_for('about') }}"><button class="apply-button">申请入驻</button></a>
						<ul class="apply clearfix" style="margin-top: 50px">
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
					</div>
				</div>
				<div class="content">
					<h3 class="text-center" style="margin-bottom: 0">功能模块</h3>
					<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Guarantee</p>
					<div class="divider"><div class="divider-blue container"></div></div>
					<ul class="module">
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-person"></i>
								</div>
								<span class="font24">家政员管理</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">基本信息管理</div>
								<ul class="light-grey">
									<li>基本信息</li>
									<li>保险信息管理</li>
									<li>多媒体信息</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">用工管理</div>
								<ul class="light-grey">
									<li>业务需求管理</li>
									<li>派工管理</li>
									<li>考勤、时间表管理</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">证书管理</div>
								<ul class="light-grey">
									<li>家政员健康证等证件管理</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-order"></i>
								</div>
								<span class="font24">订单管理</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">业务管理</div>
								<ul class="light-grey">
									<li>派工管理</li>
									<li>需求管理</li>
									<li>合同管理</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">顾客管理</div>
								<ul class="light-grey">
									<li>顾客信息管理</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">评价管理</div>
								<ul class="light-grey">
									<li>顾客评价管理</li>
									<li>家政员评价管理</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-finance"></i>
								</div>
								<span class="font24">财物管理</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">收 / 退费管理</div>
								<ul class="light-grey">
									<li>各项收 / 退费管理</li>
									<li>收据打印</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">财务报表</div>
								<ul class="light-grey">
									<li>门店收支汇总</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">流水账</div>
								<ul class="light-grey">
									<li>各项收支流水记录</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-data"></i>
								</div>
								<span class="font24">数据报表</span>
							</div>
							<div class="fl inline-block mid-grey font20" style="margin-left: 60px; line-height: 138px">待签约 / 健康证过期等数据实时监控</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-service"></i>
								</div>
								<span class="font24">服务跟踪</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">短信回访</div>
								<ul class="light-grey">
									<li>基本信息</li>
									<li>保险信息管理</li>
									<li>多媒体信息</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">定期互评</div>
								<ul class="light-grey">
									<li>评价服务</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-online-shop"></i>
								</div>
								<span class="font24">线上微店</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">家政员微信预约</div>
								<ul class="light-grey">
									<li>线上微信预约</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">家政员履历查看</div>
								<ul class="light-grey">
									<li>家政员视频查看</li>
									<li>家政员视频</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">顾客线上订单管理</div>
								<ul class="light-grey">
									<li>顾客评价家政员</li>
									<li>线上换人</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="fl module-title">
								<div class="inline-block text-center" style="width: 130px">
									<i class="icon icon-module icon-tv"></i>
								</div>
								<span class="font24">智能电视看板</span>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">岗前视频培训</div>
								<ul class="light-grey">
									<li>岗前注意事项</li>
								</ul>
							</div>
							<div class="fl module-subtitle">
								<div class="mid-grey font20" style="margin-bottom: 11px">紧急业务 / 家政员展示</div>
								<ul class="light-grey">
									<li>业务展示</li>
									<li>家政员展示</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--合作广告-->
	<div class="ad-bg green-bg text-center">
		<img src="{{baseUrl}}/image/computer.png">
		<img src="{{baseUrl}}/image/tel.png" style="margin-left: 132px">
	</div>
</div>

{% endblock %}