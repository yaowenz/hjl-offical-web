{% set pageTitle = '找阿姨' %}

{% extends '_layout.twig.php' %}
{% block content %}

<!--banner-->
<div class="head ayi-bg">
	{{ include('head.twig.php') }}
</div>

<!--平台特色-->
<div class="wrapper container">
    <div class="content">
    	<h3 class="text-center" style="margin-bottom: 0">在线业务</h3>
		<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Guarantee</p>
		<div class="divider"><div class="divider-blue container"></div></div>
		<ul class="feature">
			<li class="text-center mid-grey font18">
				<i class="icon icon-feature icon-feature-phone"></i>
				<div style="margin: 22px 0 10px 0">真实阿姨在线海量选择</div>
				<div>手机端签约支付</div>
			</li>
			<li class="text-center mid-grey font18">
				<i class="icon icon-feature icon-feature-video"></i>
				<div style="margin: 22px 0 10px 0">45秒阿姨在线视频</div>
				<div>手机端看人选人</div>
			</li>
			<li class="text-center mid-grey font18">
				<i class="icon icon-feature icon-feature-aim"></i>
				<div style="margin: 22px 0 10px 0">一键智能换人调单</div>
				<div>后续服务无缝对接</div>
			</li>
			<li class="text-center mid-grey font18">
				<i class="icon icon-feature icon-feature-change"></i>
				<div style="margin: 22px 0 10px 0">一键智能换人调单</div>
				<div>后续服务无缝对接</div>
			</li>
		</ul>
	</div>
</div>

<!--在线选阿姨-->
<div class="wrapper container" style="margin-bottom: 50px">
	<div class="content">
		<h3 class="text-center" style="margin-bottom: 0">在线选阿姨</h3>
		<p class="light-grey text-center" style="margin: 0 0 14px 0; font-size: 13px">Guarantee</p>
		<div class="divider"><div class="divider-blue container"></div></div>
		<div class="mid-grey" style="margin: 50px 0">
			<select class="type-select" style="margin-right: 30px">
				<option>上海市</option>
			</select>
			<select class="type-select" style="margin-right: 30px" id="division">
				{% for division in divisions %}
				<option value="{{ division['value'] }}">{{ division['name'] }}</option>
				{% endfor %}
			</select>
		</div>
		<div class="swiper-container ayi-select" style="height: 694px">
			<ul class="swiper-wrapper shop-list branch-list">
			</ul>
			<div class="icon swiper-button swiper-button-prev"></div>
		    <div class="icon swiper-button swiper-button-next"></div>
		</div>
	</div>
</div>
<div class="fl shop-list-item" id="branch-template" style="display:none;">
	<div class="fl shop text-center"><img class="shop-logo" style="margin-top: 12px"></div>
	<div class="fl shop-info">
		<div class="font18 branch-name" style="margin-top: 10px"><i class="icon icon-shop"></i></div>
		<div class="icon star star4"></div>
		<div class="light-grey address"></div>
	</div>
	<div class="fr icon icon-gold text-center" style="padding-top: 12px"><span class="white font20 bold">999</span></div>
</div>
<!--广告-->
<div class="ad-bg orange-bg text-center">
	<span class="white" style="font-size: 44px">扫描二维码 体验线上微店</span>
</div>

<script type="text/javascript">
var createBranchNode = (function () {
	var $nodeTemplate = $('#branch-template').removeAttr('id')
	return function (branch) {
		var $node = $nodeTemplate.clone()
		$node.find('.branch-name').text(branch.branch_name)
		$node.find('.address').text(branch.address)
		$node.find('.shop-logo').attr('src', branch.logo_url)
		$node.css('display', 'block')
		return $node
	}
})()
function showBranches(branches) {
	var $container = $('.branch-list').html('')
	var offset, len
	var i, lenGroup
	var $li
	for (offset = 0, len = branches.length; offset < len; offset +=10) {
		$li = $('<li class="swiper-slide"></li>')
		for (i = 0, lenGroup = Math.min(10, len - offset); i < lenGroup; ++i) {
			$li.append(createBranchNode(branches[offset + i]))
		}
		$container.append($li)
	}
}
function updateBranches(divisionId) {
	$.get('{{ path_for('api.branches') }}', {
		division_id: divisionId
	}).then(function (data) {
		if (data.err == 0) {
			showBranches(data.data.rows)
		}
	})
}
$(function () {
	$('#division').on('change', function () {
		updateBranches($(this).val())
	}).trigger('change')
})
</script>
{% endblock %}