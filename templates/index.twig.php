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
			<a href="#">门店服务</a>    
		</li>
		<li>
			<a href="#">家政故事</a>    
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
		<h2>找好阿姨不再是难事</h2>
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
		<table class="compare">
			<thead>
				<tr>
					<td width="540" class="text-right">传统家政&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td width="0"></td>
					<td width="540">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“好家联”在线平台</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-right orange">线下实体店耗时耗力，可选择阿姨有限</td>
					<td class="text-center" width="220"><i class="compare-number cnum1"></i></td>
					<td class="light-blue">在线海量选阿姨，手机端签约支付</td>
				</tr>
				<tr>
					<td class="text-right orange">看中的阿姨总约不到？</td>
					<td class="text-center"><i class="compare-number cnum2"></i></td>
					<td class="light-blue">真实阿姨在线，实时反馈</td>
				</tr>
				<tr>
					<td class="text-right orange">仅从顾客单方需求找家政员，雇佣更换频繁</td>
					<td class="text-center"><i class="compare-number cnum3"></i></td>
					<td class="light-blue">雇佣双方需求大数据配对，找到最合适自己的家政员</td>
				</tr>
				<tr>
					<td class="text-right orange">直接上岗</td>
					<td class="text-center"><i class="compare-number cnum4"></i></td>
					<td class="light-blue">匹配技能自动生成纸质承诺书上岗，服务如有落差有据可依保障顾客利益</td>
				</tr>
				<tr>
					<td class="text-right orange">照片在线选人，另排时间不断上门面试</td>
					<td class="text-center"><i class="compare-number cnum5"></i></td>
					<td class="light-blue">45″在线视频选人，手机端看人选人</td>
				</tr>
				<tr>
					<td class="text-right orange">阿姨突然“走人”，服务遭遇“真空期”</td>
					<td class="text-center"><i class="compare-number cnum6"></i></td>
					<td class="light-blue">一键智能换人调单，后续服务无缝对接</td>
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
			<p class="font18 light-blue">Easy housekeeping business thourgh our 3 Sub-systems</p>
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
				<h3>线上渠道拓宽</h3>
				<span class="mid-grey">入驻就送”微店“</span>
				<br>
				<span class="mid-grey">线上业务轻松接入</span>
			</div>
		</li>
		<li>
			<div>
				<i class="number num2"></i>
				<h3>提升成交业务量</h3>
				<span class="mid-grey">精准匹配</span>
				<br>
				<span class="mid-grey">成交签约率显著提升</span>
			</div>
		</li>
		<li>
			<div>
				<i class="number num3"></i>
				<h3>提高管理能力</h3>
				<span class="mid-grey">顾客、家政员服务动态实时掌握</span>
				<br>
				<span class="mid-grey">规避飞单，丢单的现象</span>
			</div>
		</li>
		<li style="margin-bottom: 0">
			<div>
				<i class="number num4"></i>
				<h3>赢得顾客口碑</h3>
				<span class="mid-grey">智能选人、规范管理、售后监管，雇佣</span>
				<br>
				<span class="mid-grey">双方体验得到双重提升，客户接近0投诉</span>
			</div>
		</li>
		<li style="margin-bottom: 0">
			<div>
				<i class="number num5"></i>
				<h3>信息安全保障</h3>
				<span class="mid-grey">交易过程全智能无人工干预，隐私数据</span>
				<br>
				<span class="mid-grey">保密；保证业务量在安全、公平的环境</span>
				<br>
				<span class="mid-grey">下的持续增长</span>
			</div>
		</li>
		<!-- <li style="margin-bottom: 0">
			<div>
				<i class="number num6"></i>
				<h3>公开透明、无人工干预</h3>
				<span class="mid-grey">智能匹配交易公平</span>
				<br>
				<span class="mid-grey">签约保障商家数据安全</span>
			</div>
		</li> -->
	</ul>
</div>
<!--6个特点end-->

<!--安全保障start-->
<div class="bg safe-bg">
	<div class="content container white text-center" style="padding-top: 10px">
		<p class="steal" style="margin-bottom: 0"></p>
		<h2>资源共享安全有保障</h2> 
		<p class="font22" style="letter-spacing: 2px; font-weight: 100">
		我们打破传统家政的“信任壁垒”，全系统实现全智能自动化<br>交易让各家政公司在保障安全、公平的条件下快速提高成交量
		</p>
		<img src="{{baseUrl}}/image/safe-icon.png" style="width: 46%">
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

<!--回到顶部start-->
<div class="up fixed">
	<div class="rocket"></div>
	<p class="light-grey">返回顶部</p>
</div>
<!--回到顶部end-->

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
