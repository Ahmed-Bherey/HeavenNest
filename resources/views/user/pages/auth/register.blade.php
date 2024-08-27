<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حساب</title>
    <link rel="stylesheet" href="{{ asset('public/user/css/login.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <h2>اشاء حساب</h2>
            @include('admin.layouts.alerts.success')
            @include('admin.layouts.alerts.error')
            <form action="{{ route('user.register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-login">اشاء حساب</button>
            </form>
        </div>
    </div>
</body>

</html>
