<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:25:57+07:00
# @Email:  ido.alit@gmail.com
# @Filename: header.php
# @Last modified by:   user
# @Last modified time: 2018-01-23T11:25:57+07:00

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0"/>
    <meta http-equiv="Expires" content="Sat, 26 Jul 1997 05:00:00 GMT"/>

  <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
      <meta name="description" content="<?php echo substr($notes, 0, 152) . '...'; ?>">
      <meta name="keywords" content="<?php echo $subject; ?>">
  <?php else: ?>
      <meta name="description" content="<?php echo $page_title; ?>">
      <meta name="keywords" content="<?php echo $sysconf['library_subname']; ?>">
  <?php endif; ?>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="generator" content="<?php echo SENAYAN_VERSION ?>">
    <meta name="theme-color" content="#000">

    <meta property="og:locale" content="<?php echo str_replace('-', '_', $sysconf['default_lang']); ?>"/>
    <meta property="og:type" content="book"/>
    <meta property="og:title" content="<?php echo $page_title; ?>"/>
  <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
      <meta property="og:description" content="<?php echo substr($notes, 0, 152) . '...'; ?>"/>
  <?php else: ?>
      <meta property="og:description" content="<?php echo $sysconf['library_subname']; ?>"/>
  <?php endif; ?>
    <meta property="og:url" content="//<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>"/>
    <meta property="og:site_name" content="<?php echo $sysconf['library_name']; ?>"/>
  <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
      <meta property="og:image" content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $image_src ?>"/>
  <?php else: ?>
      <meta property="og:image"
            content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $sysconf['template']['dir']; ?>/default/img/logo.png"/>
  <?php endif; ?>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="//<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>"/>
    <meta name="twitter:title" content="<?php echo $page_title; ?>"/>
  <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
      <meta property="twitter:image" content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $image_src ?>"/>
  <?php else: ?>
      <meta property="twitter:image"
            content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $sysconf['template']['dir']; ?>/default/img/logo.png"/>
  <?php endif; ?>
    <!-- // load bootstrap style -->
    <link rel="stylesheet" href="<?php echo assets('css/bootstrap.min.css'); ?>">
    <!-- // my custom style -->
    <link rel="stylesheet" href="<?php echo assets('css/style.css?v=' . date('Ymd-his')); ?>">
    <!-- // font awesome -->
    <link rel="stylesheet" href="<?php echo assets('plugin/font-awesome/css/fontawesome-all.min.css'); ?>">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?php echo assets('css/tailwind.min.css'); ?>">
    <link rel="shortcut icon" href="webicon.ico" type="image/x-icon"/>

    <!-- // load vue js -->
    <script src="<?php echo assets('js/vue.js'); ?>"></script>
    <!-- // load jquery library -->
    <script src="<?php echo assets('js/jquery.min.js'); ?>"></script>
    <!-- // load bootstrap javascript -->
    <script src="<?php echo assets('js/bootstrap.min.js'); ?>"></script>

</head>
<body class="bg-grey-lightest">
