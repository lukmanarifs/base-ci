<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Fajar Isnandio">
        <link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico">
        
        <title>Clinic Admin Panel</title>
        
        <!-- Bootstrap core CSS -->
        <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <!-- <link href="signin.css" rel="stylesheet"> -->
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #eee;
            }
            
            .form-signin {
              max-width: 330px;
              padding: 15px;
              margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
              margin-bottom: 10px;
            }
            .form-signin .checkbox {
              font-weight: normal;
            }
            .form-signin .form-control {
              position: relative;
              font-size: 16px;
              height: auto;
              padding: 10px;
              -webkit-box-sizing: border-box;
                 -moz-box-sizing: border-box;
                      box-sizing: border-box;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="text"] {
              margin-bottom: -1px;
              border-bottom-left-radius: 0;
              border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
            .panel {
                max-width: 400px;
                margin: 0 auto;
                border-radius: 10px;
            }
            #logo{
                max-width: 150px;
            }
        </style>
    </head>

    <body>
        <div class="container">
          <div class="panel">
            <div class="panel-header">
                <center><h2 class="form-signin-heading"><img style="max-width: 50%;" src="<?=base_url()?>images/klinik.png" /><br />Admin Panel</h2></center>
            </div>
            <div class="panel-body">
              <form class="form-signin <?=$control?>" method="post" action="<?=base_url()?>login/login_check">
                <?=$error_massage?>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" autofocus="">
                <input type="password" class="form-control" placeholder="Password" name="password" required="">
                <!-- <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label> -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
            </div>
            <div class="panel-footer">
                <div class="text-right">Powered by <img style="max-height: 15px;" src="<?=base_url()?>images/keraton.png" /></div>
            </div>
          </div>
        </div> <!-- /container -->
    </body>
</html>