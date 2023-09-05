<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-purple.min.css') }}">
</head>

<body class="text-left">
    <div class="auth-layout-wrap" style="background-image: url({{ asset('././assets/images/photo-wide-4.jpg') }})">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="assets/images/logo.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Sign In</h1>
                            @include('dashboard.layouts.message')
                            <form action="{{ url('admin/login/post') }}" method="POST" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control form-control-rounded" type="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control form-control-rounded" type="password">
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">Sign
                                    In</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="forgot.html" class="text-muted"><u>Forgot Password?</u></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/script.min.js') }}"></script>
</body>

</html>
