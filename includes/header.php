<?php
/*
File name:
Author:
Date created:
Date modified:
Version:
Copyright
Description:


*/

$pagetitle = (isset($_GET['pagetitle']))
	? $_GET['pagetitle']
	: "Home Page";
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">

 </head>

<body>
	<header><h1><?= $pagetitle ?></h1></header>
	<nav>
		<?php
		$members = (isset($_GET['members']))
		? (bool)$_GET['members']
		: false;
		
	if ($members === true)
		require 'includes/navigation/php';
	else
		require 'includes/nav2.php';
		?>
	</nav>
	<main>
	
	
	
	/*
	
	
/*
<!DOCTYPE html>
 <html lang="en">
 <head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="css/style.css">

 </head>

<!--
File name: 
Author:
Date created:
Date modified:
Version: 1.0
Description:
         
-->
<body>
	<header><h1>Title Here</h1></header>
	<nav>
		<?php
            $members = (isset($_GET['members'])) 
                ? (bool)$_GET['members'] 
                : false;
            if ($members === true)
                require 'includes/navigation.php';  //members' navigation 
            else
                require 'includes/nav2.php';  //non-members' navigation
		?>
	</nav>
	<main>
	
	<?php
	*/
	*/
	