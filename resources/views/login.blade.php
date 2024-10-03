
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #98e36c;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color:  #98e36c;
        }
        .form-label {
            color:  #98e36c;
        }
        /* .btn-google {
            background-color: #7aa3e6;
            color: white;
            margin-bottom: 15px;
        } */
        .btn-login {
            background-color: #98e36c;
            color: white;
        }
        .btn-login:hover {
            background-color:  #98e36c;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color:  #98e36c;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @if (Session::has('StatsusLogin'))
    <b>{{Session::get('StatusLogin')}}</b>
    @endif
    <form action="/auth" method="post">
    @csrf
    <div class="login-container">
        <h3 class="login-title">Login</h3>
        @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email / No Handphone</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email or phone number" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-login w-100">
                <a href="/index" class="btn btn-login-choice"> LOGIN</button></a>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
