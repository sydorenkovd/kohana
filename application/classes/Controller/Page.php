<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {
    public function action_index()
    {
        $articles = array();

        $content = View::factory('/pages/show')
            ->bind('articles', $articles);

        $articles = ORM::factory('Article');

//        $this->template->content = $content;
    }
}