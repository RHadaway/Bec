
<html lang="en">

<head>
<meta charset="utf-8" />

<title>Posts</title>

<meta name="Executax"
	content="Executax - Professional Income Tax Preparation" />
<!--no more than 20 -->
<meta name="keywords" content="" />

<!--Favicon links
	<link rel="shortcut icon" href="favicon.ico"/>
	<link ref="apple-touch-icon" href="apple-touch-icon.png"/>
	-->

<!--JavaScript link
	<script src="./js/filename.js"</script>
   -->

<!-- CSS link-->
<link rel="stylesheet" type="text/css" href="./main.css" />


<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>

<body>
	<div id="page">
		<div id="container">

			<?php 	include 'views/header.php';?>


			<p>The following posts include information that the associates of Executax found that may interest you. If you have further questions please contact one of our advisors.</p>


			<?php $oitem = new rss();
   						foreach($oitem->find ('1 order by pubdate DESC limit 0,30') as $oitem) : ?>

			<h4 class="title"><?php echo  $oitem->title; ?></h4>
			<a href="<?php echo  $oitem->link; ?>" class="link"><?php echo  $oitem->link; ?></a> 
			<span class="pubdate"><?php echo  $oitem->pubdate; ?></span> 
			<span class="author"><?php echo  $oitem->author; ?></span>
			<p class="description"><?php echo  $oitem->description; ?></p>

			<?php endforeach; ?>

			<?php 	include 'views/footer.php';?>

		</div>
		<!--container -->

	</div>
</body>