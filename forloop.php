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
		include("header.php");
		include("navigation.php");
	?>
	<main>
		<div class="container">
			<h4>4,218 RESULTS FOR "Jackets"</h4>
			<?php
				for($x = 0;$x < 20;$x++){
					echo '<a href="#" class="product">';
					echo '<div class="img">';
					echo '<img src="http://www.backcountry.com/images/items/medium/TNF/TNF5261/RECHGRHEBK.jpg" alt="" />';
					echo '</div>';
					echo '<div class="brand">The North Face</div>';
					echo '<div class="title">Denali Fleece Jacket - Men\'s</div>';
					echo '<div class="price">$649.95</div>';
					echo '<div class="reviews">4 Reviews</div>';
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