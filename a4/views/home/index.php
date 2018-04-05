<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Latest News from <?php echo $channel_title; ?> </h1>
        <?php if(isset($_SESSION['message'])){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $_SESSION['message']?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php }?>

  </div>
    <?php
        for($i = 0; $i <$numItems; $i++){
            echo $feed_data['title'][$i];
            echo $feed_data['pub'][$i];
            echo $feed_data['desc'][$i];
        }
    ?>
</div>
<?php include('views/elements/footer.php');?>
