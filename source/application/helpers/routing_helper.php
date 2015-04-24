<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class ContentPageCodes
{
	const Home = 0;
	const Search = 1;
	const CategoryDetails = 2;
	const Login = 3;
	const Users = 4;
	const Register = 5;
	const CategoryAdmin = 6;
	const ProfileAdmin = 7;
	const ArticleAdmin = 8;
	const NewAlumni = 9;
	const Alumnus = 10;
	const Teachers = 11;
	const ViewProfile = 12;
	const UserProfile = 13;
		
	// this should be loaded from db
	public static $route_prefix = array('/',
								'/претрага/', 
								'/категорија/', 
								'/пријава', 
								'/корисници', 
								'/регистрација', 
								'/категорије', 
								'/профил',
								'/чланци', 
								'/пријава-на-алумни', 
								'/алумни', 
								'/наставници', 
								'/преглед-профила', 
								'/профил-корисника/');
}
	
if ( ! function_exists('ResolveRoute'))
{
	function ResolveRoute($code, $object = null)
	{
		$route = ContentPageCodes::$route_prefix[$code];
		switch ($code)
		{
			case ContentPageCodes::CategoryDetails:
			{
				return GenerateRouteForCategory($object);
			}
			case ContentPageCodes::UserProfile:
			{
				return $route . $object;
			}
			default: 
				return $route;
		}
	}
}
	

if ( ! function_exists('GenerateRouteForCategory'))
{
	function GenerateRouteForCategory($object)
	{
		if ($object->IsFixedRoute == 1){
			return $object->Route;
		}
			
		$slug = str_replace(' ', '-', $object->Title);
		$slug = mb_strtolower($slug);
		return ContentPageCodes::$route_prefix[ContentPageCodes::CategoryDetails] . $slug . '/' . $object->Id;
	}
}
	
?>