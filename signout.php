<?php ob_start(); ?>
<?php session_start(); ?>

<?php


			$_SESSION['id']        =    null;
			$_SESSION['username']  =    null ;
			$_SESSION['password']  =    null;

header("Location: index.php");

?>

