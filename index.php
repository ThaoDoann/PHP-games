<?php  
include ('includes/header.php');  
//all content pages will be include here
//the value of $page is coming from the url in navigation.php
if(isset($_GET['page'])) {  
    $includepage=$_GET['page'];
    include_once ( $includepage );
    // will be replaced by include_once ( 'content/whateverfileyouspecify.php' );
} else {
    //home page content
    require_once ( 'content/welcome.php' );
}
include_once ('includes/footer.php');
?>