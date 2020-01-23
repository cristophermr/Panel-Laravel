<div class="kt-login__signin">
    <div class="kt-login__head">
        <h3 class="kt-login__title">{{__('auth.login')}}</h3>
    </div>
    <div class="kt-login__form">
        <form class="kt-form" action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Cedula" name="dni" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control form-control-last" type="password" placeholder="{{__('auth.pass')}}" name="password">
            </div>
            <div class="kt-login__extra">
                <label class="kt-checkbox">
                    <input type="checkbox" name="remember"> {{__('auth.remember')}}
                    <span></span>
                </label>
                <a href="javascript:;" id="kt_login_forgot">{{__('auth.forget')}}</a>
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">{{__('auth.login')}}</button>
            </div>
        </form>
    </div>
</div>
