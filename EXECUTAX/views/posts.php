
<html lang="en">

   <head>
   <meta charset="utf-8" />
   
	<title>Posts</title> 
	
	<meta name="Executax" content="Executax - Professional Income Tax Preparation"/>
	<!--no more than 20 -->
	<meta name="keywords" content=""/>
	 
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
				
			     <table>
				<caption>Important Information</caption>
				<thead>
					<tr>
						<th id="title" scope="col">Title</th>
						<th id="description" scope="col">Description</th>
						<th id="link" scope="col">Link</th>
						<th id="pubdate" scope="col">Published Date</th>
						<th id="author" scope="col">Author</th>
					</tr>
				</thead>
				<tbody>
				 <?php $oitem = new rss();
   						foreach($oitem->find ('1 order by pubdate DESC limit 0,30') as $oitem) : ?>
					<tr>
						<td headers="title"><?php echo  $oitem->title; ?></td>
						<td headers="description"><?php echo  $oitem->description; ?></td>
						<td headers="link"><?php echo  $oitem->link; ?></td>
						<td headers="pubdate"><?php echo  $oitem->pubdate; ?></td>
						<td headers="author"><?php echo  $oitem->author; ?></td>
									
					</tr>
				<?php endforeach; ?>						
				</tbody>
								
            </table> 
				
				<?php 	include 'views/footer.php';?>
				
				</div><!--container -->
			
	</div>	
		   </body>
	
</html>   

