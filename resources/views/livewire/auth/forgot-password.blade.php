@section('css')
    <style>
        body {
            background-position: center;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{asset('../assets/img/background/serrebg1.jpg')}}");
        "
        }
    </style>
@endsection
<div>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-white">
                            @if ($showDemoNotification)
                                <div wire:model="showDemoNotification"
                                     class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span
                                        class="alert-text text-white">{{ __(' You are in a demo version, you can\'t update the
                                        profile.') }}</span>
                                    <button wire:click="$set('showDemoNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                            <h4 class="mb-0 text-white">{{ __('Forgot your password? Enter your email here') }}</h4>
                        </div>
                        <div class="card-body bg-white rounded-2">
                            <form wire:submit.prevent="recoverPassword" action="#" method="POST" role="form text-left">
                                <div>
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border text-success text-gradient border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                               placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                            class="btn bg-gradient-success w-100 mt-4 mb-0">{{ __('Recover your
                                    password') }}</button>
                                </div>
                            </form>
                            @if ($showSuccesNotification)
                                <div wire:model="showSuccesNotification"
                                     class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span
                                        class="alert-text text-white">{{ __(' An email for resetting your password has been
                                        sent!') }}</span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif

                            @if ($showFailureNotification)
                                <div wire:model="showFailureNotification"
                                     class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-text text-white">
                                        {{ __('You are not registered as a user. Please sign
                                        up') }}
                                        <a class="text-info" href="{{ route('sign-up') }}">here</a></span>
                                    <button wire:click="$set('showFailureNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
