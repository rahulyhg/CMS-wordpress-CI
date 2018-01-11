<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CMS</title>
<?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
<?php
	echo '<pre>';
	print_r($headerdata); exit;
	
?>

<nav class="navbar navbar-inverse">
 <?= img(array('src' => $headerdata->logo_path, 'width' => '60', 'height'=> '60')); ?>
  <div class="container-fluid">
    <div class="navbar-header">
    
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?=  $headerdata->title ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?= anchor('admin','Login')  ?></li>
      </ul>
    </div>
  </div>
</nav>