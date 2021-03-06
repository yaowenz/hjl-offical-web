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
    	<h3 class="text-center">平台特色</h3>
		<div class="sub-title light-grey text-center">Our Service</div>
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
				<i class="icon icon-feature icon-feature-aim"></i>
				<div style="margin: 22px 0 10px 0">双方需求大数据匹配</div>
				<div>找到最适合自己的家政员</div>
			</li>
			<li>
				<i class="icon icon-feature icon-feature-change"></i>
				<div style="margin: 22px 0 10px 0">一键换人 定期评价</div>
				<div>后续服务无缝对接</div>
			</li>
		</ul>
	</div>
</div>

<!--身边门店-->
<div class="wrapper container" style="margin-bottom: 50px">
	<div class="content">
		<h3 class="text-center">身边门店</h3>
		<div class="sub-title light-grey text-center">Nearby Branches</div>
		<div class="divider"><div class="divider-green container"></div></div>
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
		<div class="swiper-container shop-select" style="height: 694px">
			<ul class="swiper-wrapper shop-list branch-list">
			</ul>
			<div class="swiper-button-prev"><i class="icon swiper-icon swiper-icon-prev"></i><span class="swiper-text">上一页</span></div>
		    <div class="swiper-button-next"><span class="swiper-text">下一页</span><i class="icon swiper-icon swiper-icon-next"></i></div>
		</div>
	</div>
</div>
<div class="fl shop-list-item" id="branch-template" style="display:none;">
	<div class="fl shop text-center">
		<div class="relative img-wrapper">
			<!-- <div class="shop-qr absolute"></div> -->
			<img class="shop-logo swiper-lazy"></div>
		</div>
	<div class="fl shop-info">
		<div class="font18 branch-name" style="margin-top: 10px"><i class="icon icon-shop"></i></div>
		<div class="icon star star4"></div>
		<div class="light-grey address"></div>
	</div>
	<div class="fr icon icon-gold text-center" style="padding-top: 12px"><span class="white font20 bold">999</span></div>
</div>

<!--广告-->
<div class="ad-bg orange-bg">
	
</div>

<script type="text/javascript">
var swiperShop = new Swiper(".swiper-container.shop-select",{
    prevButton:'.swiper-button-prev',
    nextButton:'.swiper-button-next',
    observer: true,
    preloadImages: false,
    lazyLoading: true
});
var createBranchNode = (function () {
	var $nodeTemplate = $('#branch-template').removeAttr('id')
	return function (branch) {
		var $node = $nodeTemplate.clone()
		$node.find('.branch-name').text(branch.branch_name)
		$node.find('.address').text(branch.address)
		if(branch.logo_url){
			$node.find('.shop-logo').attr('data-src', branch.logo_url);
		} else{
			$node.find('.shop-logo').css('display','none');
			var firstWord = branch.branch_name.charAt(0);
			var $div = $('<div class="shop-text white"></div>');
			$div.text(firstWord);
			$node.find('.shop-logo').parent('.img-wrapper').append($div);
		}
		$node.find('.shop-qr').data('branch_url', branch.branch_url)
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

	$('.shop-qr').each(function () {
		var $this = $(this)
		var url = $this.data('branch_url')
		if (url) {
			$this.qrcode({
				width: 78,
				height: 78,
				correctLevel: 0,
				text: url
			});
		}
	})
}
var getBranches = (function () {
	var cache = {}
	return function (divisionId) {
		if (cache[divisionId]) {
			return $.Deferred().resolve(cache[divisionId])
		} else {
			return $.get('{{ path_for('api.branches') }}', {
				division_id: divisionId
			}).then(function (data) {
				if (data.err == 0) {
					cache[data.data.division_id] = data
				}
				return data
			})
		}
	}
})()
function updateBranches(divisionId) {
	getBranches(divisionId).then(function (data) {
		if (data.err == 0 && data.data.division_id == $('#division').val()) {
			showBranches(data.data.rows)
			swiperShop.slideTo(0)
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