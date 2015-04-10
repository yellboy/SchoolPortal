<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	abstract class AuthorizationRoleCodes
	{
		const ADMOD = 1;
		const TEACHER = 2;
	}

	if ( ! function_exists('RequireAuthentication'))
	{
		function RequireAuthentication()
		{
			$CI = & get_instance(); 
			if($CI->session->userdata('logged_in'))
			{
				return true;
			}
			redirect('login', 'refresh');
			return false;
		}
	}
	
	if ( ! function_exists('IsUserAuthenticated'))
	{
		function IsUserAuthenticated()
		{
			$CI = & get_instance();
			if($CI->session->userdata('logged_in'))
			{
				return true;
			}
			return false;
		}
	}
	
	if ( ! function_exists('IsAuthorizedForRole'))
	{
		function IsAuthorizedForRole($role)
		{
			$CI = & get_instance();
			if($CI->session->userdata('logged_in'))
			{
				$session_data = $CI->session->userdata('logged_in');
				$authid = $session_data['authorizationid'];
				
				if ($authid == $role) return true;
				return false;
			}
			return false;
		}
	}
	
	if ( ! function_exists('IsAdministrator'))
	{
		function IsAdministrator()
		{
			return IsAuthorizedForRole(AuthorizationRoleCodes::ADMOD);
		}
	}
?>