<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styleslogin.css">
</head>
<body class="img js-fullheight" style="background-image: url(assets/images/unasam.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-black">Te damos la bienvenida</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-container">
                        <h2 class="mb-4 text-center text-black">Tienes una cuenta?</h2>
                        <form action="#" class="signin-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username" required>
                            </div>
                            {{-- <div class="input-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div> --}}
                            <div class="input-group">
                                <div class="input-group" id="show_hide_password" placeholder="Password">
                                  <input class="form-control" type="password">
                                  <div class="input-group-addon">
                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                  </div>
                                </div>
                              </div>


                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Acceder</button>
                            </div>
                            <div class="form-group d-md-flex extras">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Recordar
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Olvidé contraseña</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Ingresar con &mdash;</p>
                        <div class="social-buttons social d-flex text-center">
                            <button class="px-2 py-2 mr-md-1 rounded"><span class="fa fa-facebook mr-2"></span> Facebook</button>
                            <button class="px-2 py-2 ml-md-1 rounded"><span class="fa fa-twitter mr-2"></span> Twitter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    {{-- <script>
        $(document).ready(function() {
            $(".toggle-password").click(function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>  --}}

    <script>
        $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
    </script>

</body>
</html>