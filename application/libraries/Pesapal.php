<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Get  OAuth
require_once(APPPATH.'libraries/OAuth.php');
 
class Pesapal
{
	protected $config;

	public function __construct()
	{
        $this->config =& get_instance();
	}

}