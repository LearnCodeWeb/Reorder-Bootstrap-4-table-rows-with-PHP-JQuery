<?php include_once('config.php');
if(isset($_REQUEST['action']) and $_REQUEST['action']=="updateSortedRows"){
	$newOrder	=	explode(",",$_REQUEST['sortOrder']);
	$n	=	'0';
	foreach($newOrder as $id){
		$db->query('UPDATE reorderusers SET userorder="'.$n.'" WHERE id="'.$id.'" ');
		$n++;
	}
	echo '<div class="alert alert-success"><i class="fa fa-fw fa-thumbs-up"></i> Record updated successfully!</div>|***|update';
}