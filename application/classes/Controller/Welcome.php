<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $this->response->body(View::factory('welcome'));
    }

    public function action_my(){
        $description_main = Kohana::$config->load('mysite.description.main');
        $description_alt = Kohana::$config->load('mysite.description.alt');
        echo $description_main . '<br>' . $description_alt;
    }
}
