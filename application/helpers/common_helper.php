<?php

function get_user_id()
{
	$ci=& get_instance();	

	$user_id=$ci->session->userdata('user_id');

	return($user_id);
}
function get_username()
{
	$ci=& get_instance();	

	$username=$ci->session->userdata('username');

	return($username);
}
function is_login()
{
	$ci=& get_instance();	

	if($ci->session->userdata('username'))
		return(true);
	else
		return(false);
}

?>