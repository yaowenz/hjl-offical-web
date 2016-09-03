{% extends '_layout.twig.php' %}
{% block content %}
<!--侧边栏start-->
<div class="side-bar fixed">
	<i class="wechat inline-block"></i>
</div>
<div class="wx-qrcode fixed text-center">
	<div class="container">
		<p class="white" style="padding: 20px 0">微信扫一扫，了解更多</p>
		<img src="{{baseUrl}}/image/Z.jpg">
	</div>
</div>
<!--侧边栏end-->

<!--导航start-->
<div class="header container clearfix">
	<div class="logo-area fl">
		<span class="hjl-logo"></span>
		<h1 class="fr">好家联</h1>
	</div>
	<ul class="nav fr">
		<li>
			<a class="active" href="#">首页</a>    
		</li>
		<li>
			<a href="#">家政故事</a>    
		</li>
		<li>
			<a href="#">商家服务</a>    
		</li>
		<li>
			<a href="#">资源合作</a>    
		</li>
		<li>
			<a href="#">关于我们</a>    
		</li>
		<!-- 
		<li>
			<span class="selected-city light-grey">［上海］</span>
			<button class="change-city font14">切换城市</button>
		</li>
		 -->
	</ul>           
</div>
<!--导航end-->

<!--轮播图start-->
<div class="swiper-container">
	<div class="swiper-wrapper white">
		<div class="swiper-slide slide-img banner1">
		</div>
		<div class="swiper-slide slide-img banner2">
			<!-- 
			<p style="line-height: 34px; margin: 300px 190px">
				3万份大数据表明，每个家政员与雇主间分别有约60个心理诉求<br>
				通过“双维度”诉求全智能精准匹配，提高4倍雇佣满意度。
			</p>
			 -->
		</div>
		<div class="swiper-slide slide-img banner3">
			<!-- 
			<p style="line-height: 34px; margin: 300px 190px">
				3万份大数据表明，每个家政员与雇主间分别有约60个心理诉求<br>
				通过“双维度”诉求全智能精准匹配，提高4倍雇佣满意度。
			</p>
			 -->
		</div>
	</div>
	<div class="swiper-pagination"></div>
</div>
<!--轮播图end-->

<!--需求分类start-->
<div class="content container">
	<div class="text-center">
		<h2>无人干预快速成交</h2>
		<p class="light-blue font18">家政生意不再难做 无人干预快速成交</p>
	</div>
	<br>
	<table class="reserves">
		<tr class="text-right">
			<td>
				<h4>保洁</h4>
				<i class="icon-arrow icon-arrow-l"></i>
				<p>厨房清洁、卫生间清洁</p>
				<p>客厅清洁、卧室清洁</p>
			</td>
			<td>
				<h4>月嫂</h4>
				<i class="icon-arrow icon-arrow-l"></i>
				<p>产妇护理、月子餐</p>
				<p>新生儿护理</p>
			</td>
			<td>
				<h4>育儿嫂</h4>
				<i class="icon-arrow icon-arrow-l"></i>
				<p>生活护理、协助保健</p>
				<p>教育行为、智力开发</p>
			</td>
		</tr>
		<tr>
			<td>
				<h4>烧饭</h4>
				<i class="icon-arrow icon-arrow-r"></i>
				<p>原辅料采购、餐前准备</p>
				<p>菜品制作、餐后整理</p>
			</td>
			<td>
				<h4>护理</h4>
				<i class="icon-arrow icon-arrow-r"></i>
				<p>喂食喂药、烧饭保洁</p>
				<p>按摩推拿、汚物处理</p>
			</td>
			<td>
				<h4>钟点工</h4>
				<i class="icon-arrow icon-arrow-r"></i>
				<p>家庭餐的制作、居室清洁</p>
				<p>洗涤衣物、家庭照料</p>
			</td>
		</tr>
	</table>
	<div class="relative" style="padding: 60px 60px 0">
		<i class="icon-vs absolute"></i>
		<table class="compare text-center">
			<thead>
				<tr>
					<td>传统家政平台</td>
					<td>好家联平台</td>
				</tr>
			</thead>
			<tbody class="mid-grey">
				<tr>
					<td>仅满足顾客‘单方’提出选人需求</td>
					<td>顾客及家政员双方需求配对</td>
				</tr>
				<tr>
					<td>优质阿姨在线，线下发配闲置阿姨</td>
					<td>真实阿姨在线，所选即所得<br>
					<span class="font12">（阿姨确认能上单，方能在线搜索）</span></td>
				</tr>
				<tr>
					<td>网上下单、人工对接</td>
					<td>全智能化精准匹配  无人工干预</td>
				</tr>
				<tr>
					<td>传统在线简历照片</td>
					<td>颠覆上门面试，45″在线视屏选人</td>
				</tr>
				<tr>
					<td>阿姨想来就来，说走就走</td>
					<td>智能换人调单，杜绝服务空窗期</td>
				</tr>
			<tbody>
		</table>
	</div>
</div>
<!--需求分类end-->

<!--三大平台start-->
<div class="bg plat-bg">
	<div class="content container clearfix">
		<div class="fl" style="padding: 60px 0">
			<h2>三大平台支撑 家政生意不再难做</h2> 
			<h3>Service details</h3>
			<p style="line-height: 36px; margin-top: 45px">
			好家联是一个基于互联网技术的家政服务链一站式服务平台，致力于解决家政业<br>
			管理运营粗放、工作效率低下、信息共享不足、资源融合有限等一系列的家政服<br>
			务矛盾及问题。
			</p>
			<a class="know-more" href="#">了解更多</a>
		</div>
		<div class="fr">
			<img src="{{baseUrl}}/image/plat-icon.png">
		</div>
	</div>
</div>
<!--三大平台end-->

<!--6个特点start-->
<div class="content container">
	<ul class="features text-center clearfix">
		<li>
			<div>
				<i class="number num1"></i>
				<h3>提升业务成交量</h3>
				<span class="mid-grey">有单子没阿姨？</span>
				<br>
				<span class="mid-grey">有阿姨没单子？</span>
			</div>
		</li>
		<li>
			<div>
				<i class="number num2"></i>
				<h3>全方位业务升级</h3>
				<span class="mid-grey">帮助实现单店智能管理平台搭建，运营</span>
			</div>
		</li>
		<li>
			<div>
				<i class="number num3"></i>
				<h3>提高管理能力</h3>
				<span class="mid-grey">客户、阿姨动态随时掌握</span>
			</div>
		</li>
		<li style="margin-bottom: 0">
			<div>
				<i class="number num4"></i>
				<h3>提升客户口碑</h3>
				<span class="mid-grey">精准配对 双方满意</span>
			</div>
		</li>
		<li style="margin-bottom: 0">
			<div>
				<i class="number num5"></i>
				<h3>降低运营成本</h3>
				<span class="mid-grey">免费线上找业务， 再无淡旺季之分</span>
			</div>
		</li>
		<li style="margin-bottom: 0">
			<div>
				<i class="number num6"></i>
				<h3>公开透明、无人工干预</h3>
				<span class="mid-grey">智能匹配交易公平</span>
				<br>
				<span class="mid-grey">签约保障商家数据安全</span>
			</div>
		</li>
	</ul>
</div>
<!--6个特点end-->

<!--安全保障start-->
<div class="bg safe-bg">
	<div class="content container white text-center">
		<h2>资源共享安全有保障 Goodbye to“偷单”“偷人” </h2> 
		<br>
		<p class="font18" style="letter-spacing: 2px">
		B端看得为什么选择我们？需要先有个我们的工作环，B端工作环，或者该交易模式<br>首先知道我们做什么。然后这段必须有主题：家政生意不再难做，无人工干预快速<br>成交
		</p>
		<br>
		<img src="{{baseUrl}}/image/safe-icon.png">
	</div>
</div>
<!--安全保障end-->

<!--家政平台start-->
<div class="city-bg">
	<div class="content container clearfix">
		<div class="fl" style="padding: 232px 0 292px">
			<h2 style="letter-spacing: -2px;font-size:38px"><i class="title-l"></i>根据不同家庭需求，找到最合适的家政员<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在公开透明的家政平台进行交易<i class="title-r"></i></h2>
		</div>
		<div class="fr" style="padding-top: 70px">
			<h3 class="font20 white report text-center">媒体报道</h3>
			<div class="mid-grey font16" style="margin-bottom: 60px">
				<p>2016.09.16 / 最全面智能管理平台体系</p>
				<p>2016.09.16 / 通过系统定期互评，促进和谐雇佣关系</p>
				<p>2016.09.16 / 3万份大数据表明，每个家政员与雇主</p>
			</div>
			<!-- 
			<p style="margin-bottom: 40px">
				<i class="ayb-logo inline-block ver-middle"></i>
				<i class="yjz-logo inline-block ver-middle"></i>
			</p>
			<p>
				<i class="gjb-logo inline-block ver-middle"></i>
				<i class="whpx-logo inline-block ver-middle"></i>
			</p>
			 -->
		</div>
	</div>
</div>
<!--家政平台end-->

<!--页脚start-->
<div class="footer white">
	<div class="content container clearfix">
		<div class="fl light-grey">
			 <h4 class="hjl-logo-white" style="margin-bottom: 30px"></h4>
			 <p>好家联电子科技（上海）有限公司</p>
			 <p>沪ICP备09066589号-1</p>
		 </div>
		 <ul class="hjl-info fr">
			 <li>
				 <h5>公司</h5>
				 <p><a href="#">首页</a></p>
				 <p><a href="#">关于</a></p>
				 <p><a href="#">加入我们</a></p>
			 </li>
			 <li>
				 <h5>产品</h5>
				 <p><a href="#">产品定位</a></p>
				 <p><a href="#">功能详情</a></p>
			 </li>
			 <li>
				 <h5>商家合作</h5>
				 <p><a href="#">合作方式</a></p>
			 </li>
			 <li>
				 <h5>联系</h5>
				 <p><a href="#">xxx@haojialian.com</a></p>
				 <p><a href="#">微信公众号</a></p>
			 </li>
		 </ul>
	</div>
</div>
<!--页脚end-->
{% endblock %}
