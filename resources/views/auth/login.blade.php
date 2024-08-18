<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                        <!-- Social login form-->
                        <div class="card my-5">
                            <div class="card-body p-5 text-center">
                                <div class="h3 fw-light mb-3">Sign In</div>
                                <!-- Social login links-->
                                <a class="btn btn-icon btn-facebook mx-1" href="#!"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                                <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                <a class="btn btn-icon btn-twitter mx-1" href="#!"><i class="fab fa-twitter fa-fw fa-sm text-white"></i></a>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body p-5">
                                <!-- Login form-->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="text-gray-600 small" for="email">{{ __("Email address") }}</label>
                                        <input id="email" class="form-control form-control-solid" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample"
                                               name="email" value="{{ old('email') }}"/>
                                        @if( (isset($errors) && $errors->get('email') ) )
                                            <ul class="text-sm text-danger mt-1">
                                                @foreach ((array) $errors->get('email') as $message)
                                                    <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="text-gray-600 small" for="password">{{ __("Password") }}</label>
                                        <input class="form-control form-control-solid" type="password" placeholder="" aria-label="Password" aria-describedby="passwordExample" name="password" />
                                        @if( (isset($errors) && $errors->get('password') ) )
                                            <ul class="text-sm text-danger mt-1">
                                                @foreach ((array) $errors->get('password') as $message)
                                                    <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <!-- Form Group (forgot password link)-->
                                    <div class="mb-3">
                                        @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <!-- Form Group (login box)-->
                                    <div class="d-flex align-items-center justify-content-between mb-0">
                                        <div class="form-check">
                                            <input class="form-check-input" id="checkRememberPassword" name="remember" type="checkbox" value="" />
                                            <label class="form-check-label" for="checkRememberPassword">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" >
                                            {{ __('Log in') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body px-5 py-4">
                                <div class="small text-center">
                                    New user?
                                    <a href="auth-register-social.html">Create an account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>
