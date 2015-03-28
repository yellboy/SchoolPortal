<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('GenerateRouteForObject'))
	{
		function GenerateRouteForObject($object)
		{
			if ($object->IsFixedRoute == 1){
				return $object->Route;
			}
			
			$slug = str_replace(' ', '-', $object->Title);
			$slug = mb_strtolower($slug);
			return '/category/' . $slug . '/' . $object->Id;
		}
	}
	
?>