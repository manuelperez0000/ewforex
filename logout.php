<?php  
session_start();  
unset($_SESSION['log_user_id']);  
/**/ header('Location: index.php'); 
?>  