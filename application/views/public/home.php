<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CMS</title>
<?= link_tag('assets/css/bootstrap.min.css') ?>
<?= link_tag('assets/css/slider.css') ?>
</head>
<body>
<nav class="navbar navbar-inverse">
<?=  isset($headerdata)? img(array('src' => $headerdata->logo_path, 'width' => '60', 'height'=> '60')) : false ?>

  <div class="container-fluid">
    <div class="navbar-header">
    
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?=  isset($headerdata->title)? $headerdata->title : false ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
<?php //***Publish Menus Display
if(	isset($menus)	){
	//***Current Page Menu id for making active menu on current page
	$current_menu_id = isset($page_data) ? $page_data->menu_id : false ;
	foreach($menus as $menu)
	{ 
		?>
		<li  <?= ($current_menu_id == $menu->id ) ? "class='active'" : false ?>>
		<?= anchor("publiccontroller/index/{$menu->id}",$menu->menu_title) ?>
		</li>
		<?php	
	}
}
?>
        <li><?= anchor('publiccontroller/blog_list','Blog')  ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?= anchor('admin','Login')  ?></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">


<!--Slider start-->
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
</div>
<!--Slider End-->









<!--Showing Page Data Here-->
	<?php if(isset($page_data)): ?>
		<?php  $current_menu_id = $page_data->menu_id; ?>
		<h2><?= $page_data->title ?></h2>
		<hr>
		<p><?= $page_data->content ?></p>
	<?php else: ?>
		<div class="alert alert-dismissible alert-warning">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Warning!</h4>
		<p>Page not added or maybe not published yet.</p>
		</div>
	<?php endif; ?>
<!--Page Data Here End-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body> 
</html>