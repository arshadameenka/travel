<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 06:01:50 GMT -->

<x-admin.header-files/>
<body>
    <div class="login-page" style="background-image: url({{asset('admin/assets/images/bg.jpg')}}">
        <div class="login-from-wrap">
            <form class="login-from">
                <h1 class="site-title">
                    <a href="#">
                        <img src="{{asset('admin/assets/images/logo.png')}}" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="validate" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label for="last_name">Password</label>
                    <input id="last_name" type="password" class="validate">
                </div>
                <div class="form-group">
                    <a class="button-primary" href="dashboard.html">Login</a>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <x-admin.footer-files/>
<script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'87f6be3c4afc8319',t:'MTcxNDk3NTE1NC42ODAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/d0ff3ebede6b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"87f6be3c4afc8319","version":"2024.4.1","r":1,"token":"2aaac9563824454ba89abdea91540009","b":1}' crossorigin="anonymous"></script>
</body>

</html>