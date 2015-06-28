<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keyword" content="Codeigniter, bootstrap, Grocerycrud">
    <meta name="description" content="Custom Framework Codeigniter and bootstrap">
    <meta name="author" content="Asrul Hanafi">
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img//favicon-96x96.png') ?>">

    <script src="<?php echo base_url('assets/js/pace.min.js') ?>"></script>
    <script type="text/javascript">paceOptions={elements:true};</script> 
    <!--Bootstrap-->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--FontAwesome-->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!--AdminLTE-->
    <link href="<?php echo base_url('assets/css/AdminLTE.min.css') ?>" rel="stylesheet">
    <!--CSS Plugins-->
    <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css') ?>" rel="stylesheet">
    <!--Custom CSS-->
    <link href="<?php echo base_url('assets/css/a-design.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--jQuery-->
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script> 
    <!--JS Plugins-->
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js') ?>"></script>
</head>
<body class="login-page">

    <!-- Page Content -->
    <?php echo $page ?>
    <!-- /#page-wrapper -->

<!--Bootstrap JS-->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script>
    site         = '<?php echo site_url(); ?>';
    ur_class     = '<?php echo $this->uri->segment(1); ?>';
    url_function = '<?php echo $this->uri->segment(2); ?>';
</script>
<!--Custom JS-->
<script src="<?php echo base_url('assets/js/a-design.js') ?>"></script>
</body>
</html>