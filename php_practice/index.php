<?php
include ('includes/header.php');
//all content pages will be included here
// the value of $page is coming form the url in navigation.php


if(isset($_GET['page'])) {
    $includepage=$_GET['page'];
    include_once ($includepage);
} else {
    //home page content
    require_once ('content/welcome.php');
}


include_once ('includes/footer.php');
?>