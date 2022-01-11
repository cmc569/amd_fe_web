<!doctype html>
<html lang="zh-TW">

<head>
    <title>AMD管理後台</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- data table css -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin/css/project-back.css">
</head>

<body>
    <div class="login" id="loginPage">
        <div style="margin-bottom:20px;">
        @if (Session::has('error'))
        <p class="alert alert-info">{{ Session::get('error') }}</p>
        @endif
        </div>

        <div class="img-box mb-3">
            <img src="/admin/img/logo.png">
        </div>
        <h5 class="text-white mb-5">AMD EPYC 活動網頁後台登入</h5>
        <div class="form-wrap">
            <form method="POST" action="{{ route('verify') }}">
                {{ csrf_field() }}
                <input type="text" name="account" placeholder="請輸入帳號" required>
                <div class="position-relative">
                    <input type="password" name="password" placeholder="請輸入密碼" required>
                    <span class="show_pw"></span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary w-100">登入</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function () {
        // 密碼可視開關(span)
        $('.show_pw').click(function () {
            $(this).toggleClass("active");
            var input = $(this).prev('input');
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>

</html>