<?php
function validacion(){
	if($_SESSION['log_user_id']=='91' & $_SESSION['user_email'] == 'admin@ewforex.net' & $_SESSION['user_dni'] == '1000'){
		return true;
	}else{
		return false;
	}
}


?>