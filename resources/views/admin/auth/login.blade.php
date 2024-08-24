<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول للمدير</title>
    <link rel="stylesheet" href="{{ asset('public/admin/dist/css/admin.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>تسجيل الدخول للمدير</h2>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">تسجيل الدخول</button>
            @if ($errors->any())
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </form>
    </div>
</body>
</html>
