<!doctype html>
<html lang="en">

<x-auth.header-files title='Login'/>
<body>
    <div class="login-page" style="background-image: url({{asset('admin/assets/images/bg.jpg')}}">
        <div class="login-from-wrap">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form class="login-from" method="POST" action="{{ route('login') }}">
                    @csrf
            
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
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="validate"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-primary-button class="button-primary" type="submit"> 
                        {{ __('Log in') }}
                        
                    </x-primary-button>
                   
                </div>
                @if (Route::has('password.request'))
                <a class="for-pass" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </form>
        </div>
    </div>

    <x-auth.footer-files/>


</body>

</html>