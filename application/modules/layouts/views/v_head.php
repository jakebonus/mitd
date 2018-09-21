<!DOCTYPE html>
<html lang="en">
  <head>
   <?php define("VERSION", "1.0.3"); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (isset($title)) ? $title . ' | eMITDSys' : 'eMITDSys'; ?></title>
    <link rel="icon" href="<?php echo base_url('build/images/logo.png'); ?>">
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap-extend.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/nprogress/nprogress.min.css'); ?>" rel="stylesheet">


    <?php if($this->uri->segment(1) != "encode") { ?>
    <link rel="stylesheet" href="<?php echo base_url('vendors/pdatatables/jquery.dataTables.min.css'); ?>">
    <link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css'); ?>" rel="stylesheet">
    <?php } ?>
    <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css'); ?>" rel="stylesheet">
    <!-- <?php //if($this->uri->segment(1) == "report" || $this->uri->segment(2) == "profile" || $this->uri->segment(1) == "medicine" || $this->uri->segment(1) == "inventory") { ?> -->
    <!-- <link href="<?php // echo base_url('vendors/formvalidation/formValidation.min.css'); ?>" rel="stylesheet"> -->
    <!-- <?php// } ?> -->
    <?php if($this->uri->segment(1) == "report" || $this->uri->segment(1) == "maintenance") { ?>
    <link href="<?php echo base_url('vendors/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
    <?php } ?>

    <link href="<?php echo base_url('vendors/easyautocomplete/easy-autocomplete.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('vendors/jquery.tagsinput/dist/jquery.tagsinput-revisited.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('build/css/custom.css?v='.VERSION); ?>" rel="stylesheet">
    <link href="<?php echo base_url('build/css/print.min.css?v='.VERSION); ?>" rel="stylesheet" media="print,all">

    <link href="<?php echo base_url('build/css/style.css?v='.VERSION); ?>" rel="stylesheet" >
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
