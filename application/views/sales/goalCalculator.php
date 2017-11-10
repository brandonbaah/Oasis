

Goal Calculator
<div align="center"><p>Latest Properties to Sell</p></div>

<br>

<?php 

foreach($sales as $sale) {
?>

	<div class="gallery">
	  <a target="_blank" href="">
	  	<? echo $sale->address ?>
	    <!-- <img src="fjords.jpg" alt="Fjords" width="300" height="200"> -->
	  </a>
	  <div class="desc"><? echo $sale->description ?></div>
	</div>

<?php 
}

?>

