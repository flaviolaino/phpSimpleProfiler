<?php

function profile($info = array()){
	$bytes_units = array('b','kb','mb','gb','tb','pb');
	
	if(!empty($info)){
		$execution_time = (!empty($info['execution_time'])) ? ($info['execution_time'] < 0) ? ($info['execution_time'] + microtime(true)) : $info['execution_time'] : -microtime(true);

		$memory_usage = (!empty($info['memory_usage'])) ? $info['memory_usage'] : memory_get_peak_usage();
	}else{
		$execution_time = -microtime(true);

		$memory_usage = memory_get_peak_usage();
	}

	return array('execution_time' => $execution_time, 'memory_peak_usage' => round($memory_usage/pow(1024, ($i = floor(log($memory_usage, 1024)))), 2) . ' ' . $bytes_units[$i]);
}
