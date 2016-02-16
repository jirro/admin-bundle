<?php
    $applicationTitle = $applicationName;
    $pageTitle        = $applicationTitle;
    $pageHeader       = $applicationTitle;

    if (isset($title)) {
        $pageTitle  = $applicationName . ' - ' . $title;
        $pageHeader = $title;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php print $this->e($pageTitle); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php print $this->assetUrl('/sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php print $this->assetUrl('/sb-admin/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom SB Admin 2 CSS -->
    <link href="<?php print $this->assetUrl('/sb-admin/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php print $this->assetUrl('/sb-admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Custom Jirro CSS -->
    <link href="<?php print $this->assetUrl('/blar/css/styles.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS on declared each page -->
    <?php echo $this->section('head_style'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php print $this->section('content'); ?>

    <!-- jQuery -->
    <script src="<?php print $this->assetUrl('/sb-admin/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php print $this->assetUrl('/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php print $this->assetUrl('/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php print $this->assetUrl('/sb-admin/dist/js/sb-admin-2.js'); ?>"></script>

    <!-- Custom JavaScript declared on each page -->
    <?php print $this->section('footer_script'); ?>

    <!-- Debug Bar Plugin -->
    <?php
        if (defined('ENVIRONMENT') && ENVIRONMENT === 'development') {
            print $this->debugBar()->renderHead();
            print $this->debugBar()->render();
        }
    ?>

</body>

</html>
