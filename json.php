<?php
	$json = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/jackets?outlet=false&site=bcs&offset=0&limit=20&fields=id,title,brand,listRank,customerReviews"));
	$products = $json->products;
	$total = $json->total;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>PHP Workshop</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/screen.css" />
</head>
<body>
<article>
	<?php
		//include("header.php");
		//include("navigation.php");
	?>
	<main>
		<div class="container">
			<h4><?php echo $total; ?> RESULTS FOR "Jackets"</h4>
			<!--  http://api.backcountry.com/mobile/products/search/jackets?outlet=false&site=bcs&offset=0&limit=20&fields=id,title,brand,listRank,customerReviews -->
			<?php
			
				foreach($products as $p){
					echo '<a href="#" class="product">';
					echo '<div class="img">';
					echo '<img src="'.$p->thumbnail.'" alt="" />';
					echo '</div>';
					echo '<div class="brand">'.$p->brand->name.'</div>';
					echo '<div class="title">'.$p->title.'</div>';
					if($p->onSale == true){
						echo '<div class="sale-price">SALE $'.$p->lowestSalePrice.'</div>';
						echo '<div class="reg-price">$'.$p->lowestListPrice.'</div>';
					}else{
						echo '<div class="price">$'.$p->lowestListPrice.'</div>';	
					}
					if($p->customerReviews->count != 0){
						echo '<div class="reviews">'.$p->customerReviews->count.' Reviews</div>';
					}
					echo '</a>';
				}
			?>
			<div class="clear"></div>
		</div>
	</main>	
	<?php
		include("footer.php");
	?>
</article>
</body>
</html>