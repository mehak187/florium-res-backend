<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.csslinks')
    <title>Reset Password</title>
</head>

<body>
    <section>
        <div class="mycontainer d-flex align-items-center justify-content-center vh-100">
            <div class="col-lg-10 d-flex bg-pink custom-model-inner position-relative">
                <div class="row box justify-content-center ">
                    <div class="d-none d-md-block col-md-6 me-0 pe-0 ps-0 login-img">
                        <div class="bg-prpl h-100">
                            <img src="{{ asset('img/signup.jpeg') }}" alt="login"
                                class="object-cover  px-4 py-4 h-100 w-100">
                        </div>
                    </div>
        
                    <div class="col-11 col-sm-9 col-md-6 login-right d-flex align-items-center">
                        <div class="row justify-content-center">
                            <div class="col-md-10 px-4 col-lg-10 pe-md-4 px-md-0 py-4">
                                <p class="fs-5 mb-0 mt-4 fw-md text-center">
                                    Welcome to the Florium Restaurant
                                </p>
                                <p class="mb-0 text-center">
                                    In order to reset your password please create a new password and confirm it.
                                </p>
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="px-2 py-3 rounded-4 d-flex align-items-center mt-3 px-4 bg-white shadow">
                                        <i class="far fa-envelope me-2"></i>
                                        <input class="border-0 w-100 focus-none @error('email') is-invalid @enderror"  name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" type="email" placeholder="Email"  autofocus>
                                    </div>
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <div class="px-2 py-3 rounded-4 d-flex align-items-center mt-3 px-4 bg-white shadow">
                                        <i class="fas fa-lock me-2"></i>
                                        <input class="border-0 w-100 focus-none  @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" type="password" placeholder="Confirm Password">
                                    </div>
                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="px-2 py-3 rounded-4 d-flex align-items-center mt-3 px-4 bg-white shadow">
                                    <i class="fas fa-lock me-2"></i>
                                    <input class="border-0 w-100 focus-none  @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" type="password" placeholder="Password">
                                </div>
                                
                                    <div class="mt-4 d-flex justify-content-center justify-content-between">
                                       
                                        <button type="submit" class="text-white border-0 rounded-pill bg-black px-4 px-md-4 px-lg-5 py-2">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.template.jslinks')
</body>

</html>
