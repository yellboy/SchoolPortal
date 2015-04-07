<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('SetProfiler'))
	{
		function SetProfiler($obj)
		{
			$sections = array(
				'queries' => TRUE
			);

			$obj->output->set_profiler_sections($sections);
			$obj->output->enable_profiler(TRUE);
		}
	}
?>