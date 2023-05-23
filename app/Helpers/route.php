<?php
namespace App\Helpers;
if(! function_exists('prefixActive')){
	function prefixActive($prefixName)
	{ 
		if (strpos(request()->route()->uri(), $prefixName) !== false) {
			return	'active';
		}else{
			return	'';
		}
		// return	request()->route()->getPrefix() == $prefixName ? 'active' : '';
	}
}

if(! function_exists('prefixBlock')){
	function prefixBlock($prefixName)
	{ 	
		if (strpos(request()->route()->uri(), $prefixName) !== false) {
			return	'block';
		}else{
			return	'none';
		}
		// return	request()->route()->getPrefix() == $prefixName ? 'block' : 'none';
	}
}

if(! function_exists('routeActive')){
	function routeActive($routeName)
	{ 
		return	request()->routeIs($routeName) ? 'active' : '';
	}
}