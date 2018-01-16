<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 1/16/18
 * Time: 12:56 PM
 */

//Header
include_once "_includes/header.php";

$info = array(
    "name" => "Eric Turner",
    "color" => "Red",
    "movie" => "The Mask (1994)",
    "book" => "Percy Jackson: The Labyrinth",
    "website" => "www.reddit.com"
);

//Name in Header
echo '<h1>'.$info["name"].' </h1>';

//Function for Favorites List
function favoritesList($array){
    foreach($array as $key => $v){
        //Skip Name
        if ($key == "name")
            echo '';
        else
            echo '<li> '.$key.' - '.$v.'</li>';
    }
}

echo "<h2> Favorite:</h2>";
echo '<ul>';
    favoritesList($info);
echo '</ul>';

//Footer
include_once "_includes/footer.php";
