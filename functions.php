<?
	session_start();
	function loggedin(){

		if (isset($_session['user_id'])&&!empty($_session['user_id']) ){
			return true;
		}
		else{
			return false;
		}


	}

?>