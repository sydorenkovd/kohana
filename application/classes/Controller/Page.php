<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {
    public function action_index()
    {
  $this->response->body('we are here');
//        $articles = array();
//
//        $content = View::factory('/pages/show')
//            ->bind('article', $article);

//        $article = ORM::factory('article')->where('id', '=', 2)->find();
//$article = ORM::factory('article');
// $article->title = 'Viktor';
//        $article->author = 'Sydorenko';
//        $article->date = '2012-04-01 17:20:33';
//        $article->content_short = 'Some content for testing';
//        $article->save();
//        $this->template->content = $content;

        /*$author = ORM::factory('author', 2);
        $books = $author->articles->find_all();
        foreach($books as $book)
        {
            echo $book->id .' - '. $book->title .'<br />';
        }*/
//        $author = ORM::factory('author', 2);
//
//        $articles = $author->article->find_all();
//
//        foreach($articles as $article)
//        {
//            echo $author->name .' - '. $article->title .'<br />';
//        }

    }
    public function action_test(){
        $this->response->body('test');
    }
}