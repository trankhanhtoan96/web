<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="<?= base_url() ?>views/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>views/assets/custom.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>views/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="login">
<?= empty($alert) ? '' : $alert ?>
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <form action="" method="post">
                <h1>Login</h1>
                <div>
                    <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
                </div>
                <div class="form-inline">
                    <input class="btn btn-default submit" type="submit" name="login" value="Log in"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </section>
    </div>
</div>
</body>
</html>