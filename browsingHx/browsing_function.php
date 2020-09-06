<?php 
function browsing_history($browsed_image,$product_name,$product_catalogue){
	
	$element='
 <div class="col-xs-2">
 <a href="../search_files/file/search.php?cat='.$product_catalogue.'">
 <img class="img-responsive" src="'.$browsed_image.'" alt="image">
 </a>
 </div>
 
';
	
	
	
	echo $element;
}



?>



