<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT. Wijaya Persada Indonesia is a contractor services company in Surabaya">
    <meta name="author" content="Kaisha">
    <link rel="icon" href="<?php echo base_url();?>assets/img/other/icon.ico"/>
    <!-- Twitter Card data -->
    <!-- <meta name="twitter:card" value="summary"> -->
    <!-- Open Graph data -->
    <!-- <meta property="og:title" content="PT Wijaya Persada Indonesia" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.wiperindonesia.com/" />
    <meta property="og:image" content="<?php echo base_url();?>assets/img/other/wiper.png" />
    <meta property="og:description" content="PT. Wijaya Persada Indonesia is a contractor services company in Surabaya" />  -->
    <?php 
         foreach ($meta_add as $key)
         {
                 echo $key."\n";
         }
    ?>
    <title><?php echo $title ;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url() ?>assets/css/creative.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/extra.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>