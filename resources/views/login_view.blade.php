<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus | Admin</title>

    <link rel="shortcut icon" href="assets/login/img/rpl.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/patinio-basica" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/helios-antique" rel="stylesheet">
    <link rel="stylesheet" href="assets/login/css/style.css">

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">

        <div class="card align-middle needs-validation">
            <div class="card-body">

                <p class="logo">LOGIN</p>

                @if(Session::has('message'))
                    <div class="message">
                        <div class="bi bi-check-circle"></div>
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif 
                @if(Session::has('message-error'))
                    <div class="message-error">
                        <div class="bi bi-exclamation-triangle"></div>
                        <p>{{ Session::get('message-error') }}</p>
                    </div>
                @endif

                <form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Masukan email anda" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Masukan password anda" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <a href="{{ url('registrasi') }}">Registrasi</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

    </script>
    
</body>

</html>
