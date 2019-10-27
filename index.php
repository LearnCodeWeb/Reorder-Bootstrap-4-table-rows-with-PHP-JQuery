<?php include_once('config.php'); ?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PHP pagination class with Bootstrap 4</title>
	
	<link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6724419004010752",
		enable_page_level_ads: true
	  });
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-131906273-1');
	</script>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	<div class="bg-light border-bottom shadow-sm sticky-top">
		<div class="container">
			<header class="blog-header py-1">
				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 m-0" href="https://learncodeweb.com"><img src='https://learncodeweb.com/wp-content/uploads/2019/01/logo.png' alt='LearnCodeWeb'></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-17" class="active nav-item"><a title="Home" href="https://learncodeweb.com/" class="nav-link">Home</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a title="Web Development" href="https://learncodeweb.com/learn/web-development/" class="nav-link">Web Development</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-558" class="nav-item"><a title="PHP" href="https://learncodeweb.com/learn/php/" class="nav-link">PHP</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14" class="nav-item"><a title="Bootstrap" href="https://learncodeweb.com/learn/bootstrap-framework/" class="nav-link">Bootstrap</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-559" class="nav-item"><a title="WordPress" href="https://learncodeweb.com/learn/wordpress/" class="nav-link">WordPress</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-15" class="nav-item"><a title="Snippets" href="https://learncodeweb.com/learn/snippets/" class="nav-link">Snippets</a></li>
						</ul>
						<form method="get" action="https://learncodeweb.com" class="form-inline my-2 my-lg-0">
							<div class="input-group input-group-md">
								<input type="text" class="form-control search-width" name="s" id="search" value="" placeholder="Search..." aria-label="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary" id="searchBtn"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</nav>
			</header>
		</div> <!--/.container-->
	</div>
	<div class="container my-2">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo top banner -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="6737619771"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<div class="container">
		<h1><a href="https://learncodeweb.com/jquery/add-more-&-reorder-table-rows-with-php-jquery/">Reorder Bootstrap 4 table rows with PHP, JQuery</a></h1>
    	<hr>
		<style>
			.table .ui-sortable-helper{background:#FFF; box-shadow:0px 0px 5px #000000; width:100%;}
		</style>
		<div class="clearfix"></div>
		<?php
		$result	=	$db->query("SELECT * FROM countries WHERE 1 ORDER BY countryName ASC ");
		while($val  =   $result->fetch_assoc()){
			$counrtyName[$val['id']]	=	$val['countryName'];
		}
		?>
		<script>
		$(document).ready(function(e) {
			$('#sortable tbody').sortable({
				handle: 'i.fa-arrows-alt',
				placeholder: "ui-state-highlight",
				//opacity: 0.9,
				update : function () { 
					var order		=	$('#sortable tbody').sortable('toArray', { attribute: 'data-sort-id'}); 
					console.log(order.join(','));
					sortOrder	=	order.join(',');
					$.post(
						'action-form.ajax.php',
						{'action':'updateSortedRows','sortOrder':sortOrder},
						function(data){
							var a	=	data.split('|***|');
							if(a[1]=="update"){
								$('#msg').html(a[0]);
							}
						}
					);
				} 
			});
			$( "#sortable" ).disableSelection();
			
			$('[data-toggle="tooltip"]').tooltip();
		});
		</script>
		<div id="msg"></div>
		<form id="form" method="post">
			<input type="hidden" name="action" value="saveAddMore">
			<table class="table table-bordered table-striped" id="sortable">
				<thead>
					<tr>
						<th width="20">Action</th>
						<th width="120" class="text-center">Inset DT</th>
						<th>User Name</th>
						<th>User Country</th>
						<th>User Email</th>
						<th>User Phone#</th>
					</tr>
				</thead>
				<tbody id="tb">
					<?php 
					$result	=	$db->query("SELECT * FROM reorderusers WHERE 1 ORDER BY userorder ASC ");
					if($result->num_rows>0){
						while($val  =   $result->fetch_assoc()){  ?>
						<tr data-sort-id="<?php echo $val['id'];?>">
							<td align="center"><i class="fa fa-fw fa-arrows-alt" data-toggle="tooltip" title="Grag up or down"></i></td>
							<td align="center"><?php echo $val['dt']; ?></td>
							<td><?php echo mb_strtoupper($val['username'],'UTF-8'); ?></td>
							<td><?php echo mb_strtoupper($counrtyName[$val['usercountry']],'UTF-8'); ?></td>
							<td><?php echo $val['useremail']; ?></td>
							<td><?php echo $val['userphone']; ?></td>
						</tr>
						<?php
						}
					}else{ ?>
					<tr>
						<td colspan="6" class="bg-light text-center"><strong>No Record(s) Found!</strong></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</form>
		<div class="clearfix"></div>
		
    </div> <!--/.container-->
	
	<div class="container">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo left sidebar -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="7706376079"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>