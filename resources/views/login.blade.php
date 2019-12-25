<!doctype html>
<html>
    <head>
        <title>JMMAO | Login</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="bower_components/images/favicon.png">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="bower_components/css/style.css">
        <!-- responsive CSS  ============================================ -->
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
        <!-- <link rel="stylesheet" href="bower_components/css/sticky-footer-navbar.css"> -->
    </head>
    <body>
        <!-- Add your site or application content here -->
        <div class="wrapper">
            <section class="reg-account login-account">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 login-form">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <!-- <h3 class="text-center">Login</h3> -->
                                    <div class="text-center">
                                        <img src="bower_components/images/logo.png" alt="Logo Image">
                                        <h3 class="login-heading">JMMAO</h3>
                                    </div>
                                    <p class="login-subheading">Please enter your credentials to Login.</p>
                                    <div class="panel-body">
                                        <form id="login-form" role="form" autocomplete="off" class="form">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input id="user-email" name="email" placeholder="Email" class="form-control"  type="email" required>
                                                </div>
                                                <div class="input-group">
                                                    <a href="#" class="a_img"> <img class="img_eye" src="bower_components/images/eye.png" onclick="loginEye()"></a>
                                                    <input id="user-password" name="password" placeholder="Password" class="form-control"  type="password" pattern=".{8,}" title="Password should be eight or more characters" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input id="login-btn" name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
                                            </div>
                                        </form>
                                        <div class="col-md-12 col-xs-12" style="text-align:center;">
                                            <a href="forgotpassword.php">Forgot Password!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="bower_components/js/form-main.js"></script>
    </body>
</html>