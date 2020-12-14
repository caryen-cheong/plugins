<?php
	/**
	*	@package CaryenPluggin
	*/
	
	/*
	Plugin Name: Caryen Pluggin
	Plugin URI: https://github.com/caryen-cheong/plugins
	Description: This is <strong>POC</strong> of my WP Login Plugin
	Version: 1.0.0
	Author: Caryen *Cheong*
	Author URI: https://github.com/caryen-cheong
	License: GPLv3 or later
	Text Domain: caryen-plugin
	*/
	
	defined('ABSPATH') or die('You do not have access to this file.');
	
	class CaryenPlugin
	{
		//methods here
		function activate()
		{
			
		}
		
		function deactivate()
		{
			
		}
		
		function uninstall()
		{
			
		}
	}
	
	
	$className = "CaryenPlugin";
	if(class_exists($className))
	{
		$caryenPlugin = new CaryenPlugin();
	}

	//activates
	register_activation_hook(__FILE__, array($caryenPlugin, 'activate'));
	//deactivates
	register_deactivation_hook(__FILE__, array($caryenPlugin, 'deactivate'));
	//uninstall
