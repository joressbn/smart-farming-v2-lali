@section('css')
<style>
    body{
        background-position: center; width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; background-image: url("{{asset('../assets/img/background/serrebg1.jpg')}}");"
    }
</style>
@endsection
<section >
    <div class="page-header section-height-75 h-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto bg-white rounded-2 mt-6">
                    <div class="card card-plain mt-4 mb-0">
                        <img src="{{asset('../assets/img/logos/logo-sf-nobg.png')}}"
                             class="mb-0 w-75 align-content-center mx-auto" alt="">
                    </div>
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-success text-center text-gradient">{{ __('messages.welcomeBack') }}</h3>
                            <p class="mb-0 mt-2 pb-0 text-center">{{ __('messages.enterCredsToLogin')}}<br></p>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                               placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                               placeholder="Password" aria-label="Password"
                                               aria-describedby="password-addon">
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                           id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                            class="btn bg-gradient-success w-100 mt-4 mb-0">{{ __('Sign in') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Forgot you password? Reset you password') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-success text-gradient font-weight-bold">{{ __('here') }}</a></small>
                            <p class="mb-4 text-sm mx-auto">
                                {{ __(' Don\'t have an account?') }}
                                <a href="{{ route('sign-up') }}"
                                   class="text-success text-gradient font-weight-bold">{{ __('Sign up') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
