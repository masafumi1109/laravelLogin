<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>
<main class="form-signin w-100 m-auto">
    <form method="post" action="{{route('login')}}">
        @csrf
        @if($errors->any())
            <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
            @foreach($errors->all() as $error)
                <ul class="alert alert-danger">
                    <li>{{$error}}</li>
                </ul>
            @endforeach
        @endif

        <x-alert type="danger" :session="session('danger')"/>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">ログイン</button>
    </form>
</main>

</body>
</html>
