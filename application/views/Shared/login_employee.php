<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONE SMART APP</title>

    <!-- JAVASCRIPT -->
    <!-- jQuery Version 2.2.4 -->
    <script src="<?=base_url()?>assets/js/jquery-2.2.4.min.js"></script>

    
    <!-- BootStrap Version 3.3.7 -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/iziToast/css/iziToast.min.css">
    <script src="<?=base_url()?>assets/iziToast/js/iziToast.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body style="background-color:#dedfe0; padding-top:50px;">

    <!-- Page Content -->
    <div class="container-fluid">
        <?php echo $render_body; ?>
    </div><!-- /.container -->


</body>

</html>