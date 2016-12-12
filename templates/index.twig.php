{% extends '_layout.twig.php' %}
{% block content %}

<!--返回顶部-->
<div class="to-top fixed text-center">
	<i class="icon icon-rocket"></i>
	<div class="green" style="margin-top: 5px">返回顶部</div>
</div>

<!--banner-->
<div class="head group-bg">
	{{ include('head.twig.php') }}
	{{ include('about-us.twig.php') }}
</div>



{{ include('foot.twig.php') }}

{% endblock %}
