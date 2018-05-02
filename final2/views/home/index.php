<?php include('views/elements/header.php');?>
<div class="page-header banner">
    <h1 class="banner_text">Welcome to the Blog!</h1>
</div>
<div class="container">


    <hr>
	<div class="page-header">
    <h1> Latest News from <?php echo $channel_title; ?> </h1>
        <?php if(isset($_SESSION['message'])){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $_SESSION['message']?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php }?>
<div class="row">
    <div class="span8">
        <?php
        for($i = 0; $i <$numItems; $i++){
            echo $feed_data['title'][$i];
            echo $feed_data['pub'][$i];
            echo $feed_data['desc'][$i];
        }
        ?>
    </div>

    <div class="sidebar span4">
        <div id="wx">
            <form id="weatherget" onkeypress="return event.keyCode != 13;">
                <label for="zip">Enter your Zip Code:</label>
                <input id="zip" name="zip" placeholder="<?php echo $zip;?>">
                <div style="margin-top:15px;"><a id='btnlink' href="<?php echo BASE_URL?>ajax/get_weather/?zip=" class="btn weather-loader">Get Weather</a></div>

            </form>
        </div>


        <div  id="weatherbody">
            <div class="page-header">
                <h1> Weather for <?php echo $current->city['name']; ?> (<?php echo $zip; ?>)</h1>

            </div>
            <h4><?php echo ucwords($current->weather['value']);?> <img src="http://openweathermap.org/img/w/<?php echo $current->weather['icon'];?>.png"></h4>
            <h4>Temperature: <?php echo $current->temperature['value'];?>°F</h4>
            <h4>Wind: <?php echo $current->wind->speed['name'];?> (<?php echo $current->wind->speed['value'];?>MPS) from the <?php echo $current->wind->direction['name'];?></h4>
            <h4>Humidity: <?php echo $current->humidity['value'];?><?php echo $current->humidity['unit'];?></h4>

        </div>
    </div>

</div>


  </div>

</div>
<?php include('views/elements/footer.php');?>
