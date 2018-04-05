<?php include('./views/elements/header.php');?>

<div class="container" id="wx">
    <form id="weatherget" method="post" action="<?php echo BASE_URL?>weather/getresults">
        <label for="zip">Enter your Zip Code:</label>
        <input id="zip" name="zip" placeholder="<?php echo $zip;?>">
        <input class="weather-loader" type="submit" value="Get Weather">
    </form>
</div>


<div class="container">
	<div class="page-header">
    <h1> Weather for <?php echo $current->city['name']; ?> (<?php echo $zip; ?>)</h1>

  </div>
    <h4><?php echo ucwords($current->weather['value']);?> <img src="http://openweathermap.org/img/w/<?php echo $current->weather['icon'];?>.png"></h4>
    <h4>Temperature: <?php echo $current->temperature['value'];?>°F</h4>
    <h4>Wind: <?php echo $current->wind->speed['name'];?> (<?php echo $current->wind->speed['value'];?>MPS) from the <?php echo $current->wind->direction['name'];?></h4>
    <h4>Humidity: <?php echo $current->humidity['value'];?><?php echo $current->humidity['unit'];?></h4>

</div>
<?php include('./views/elements/footer.php');?>
