<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>门店入驻 | 好家联 | 好阿姨，好服务</title>
        <meta name="description" content="好家联,找阿姨,家政服务">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="shortcut icon" href="/favicon.png" />
        <script src="/js/vendor/jquery-3.1.0.min.js"></script>
        <script>
            var _hmt = _hmt || [];
            (function() {
              var hm = document.createElement("script");
              hm.src = "//hm.baidu.com/hm.js?d225feebd311ed9b6e6358bde0b5cf09";
              var s = document.getElementsByTagName("script")[0]; 
              s.parentNode.insertBefore(hm, s);
            })();
        </script>
    </head>
    <body>
        <form method="POST" action="{{ path_for('api.branches') }}" id="form-new-branch" autocomplete="off">
            <label>门店名称<input type="text" name="branch_name" id="branch_name"></label>
            <label>您的名称<input type="text" name="owner_name" id="owner_name"></label>
            <label>联系电话<input type="text" name="owner_mobile" id="owner_mobile"></label>
            <label>验证码<input type="text" name="captcha" id="captcha"></label><img data-url="{{ path_for('captcha') }}" id="img-captcha" title="点击后刷新">
            <input type="submit" value="提交">
        </form>
        <script type="text/javascript">
$('#form-new-branch').submit(function ($event) {
    var $this = $(this)
    var branch_name = $.trim($('#branch_name').val())
    var owner_name = $.trim($('#owner_name').val())
    var owner_mobile = $.trim($('#owner_mobile').val())
    var captcha = $.trim($('#captcha').val())
    $event.preventDefault()
    if (!branch_name || !owner_name || !owner_mobile || !captcha) {
        alert('请先填写信息和验证码')
        return
    }
    $.post($(this).attr('action'), {
        branch_name: branch_name,
        owner_name: owner_name,
        owner_mobile: owner_mobile,
        captcha: captcha
    }).then(function (data) {
        if (data.err == 0) {
            $this.find('input').prop('disabled', true)
            alert('提交成功')
        } else if (data.err == 'captcha') {
            $('#captcha').val('')
            $('#img-captcha').click()
            alert(data.msg)
        } else {
            alert(data.msg)
        }
    })
})
$('#img-captcha').click(function () {
    var $this = $(this)
    $this.attr('src', $this.data('url') + '?r=' + Math.random())
}).click()
        </script>
    </body>
</html>