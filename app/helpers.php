<?php

/*
 * Global helpers file with misc functions
 */

if (! function_exists('app_name')) {
	/**
	 * Helper to grab the application name
	 *
	 * @return mixed
	 */
	function app_name() {
		return config('app.name');
	}
}

if ( ! function_exists('access'))
{
	/**
	 * Access (lol) the Access:: facade as a simple function
	 */
	function access()
	{
		return app('access');
	}
}


if ( ! function_exists('set_active'))
{
	/**
	 * Set active page
	 *
	 * @param string $uri
	 * @return string
	 */
	function set_active($uri)
	{
		return Request::is($uri) ? 'active' : '';
	}
}