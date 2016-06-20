<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller {

    public function action_index()
    {
        /*if(Request::initial() === Request::current())
            Request::initial()->redirect(URL::site());*/

        $id = $this->request->param('id');

        $content = View::factory('/comments/show')
            ->bind('comments', $comments);

        // Вместо switch-case будет вызов Модели
        switch($id)
        {
            case 'article1':
                $comments = array(
                    array('name' => 'Вася', 'comment' => 'Привет, Петя'),
                    array('name' => 'Петя', 'comment' => 'Привет, Вася'),
                );
                break;

            case 'article2':
                $comments = array(
                    array('name' => 'Гена', 'comment' => 'Привет, Мир'),
                );
                break;

            default:
                $comments = array();
        }

        $this->response->body($content);
    }
public function action_create(){
    if($_POST)
    {
        $_POST = Arr::map('trim', $_POST);

        $post = Validation::factory($_POST);
        $post -> rule('user', 'not_empty')
            -> rule('user', 'min_length', array(':value', 2))
            -> rule('user', 'max_length', array(':value', 20))
            -> rule('email', 'email')
            -> rule('message', 'not_empty')
            -> rule('message', 'max_length', array(':value', 100));

        if($post -> check())
        {
            Model::factory('Comment')
                ->create_comment($article_id, $_POST['user'], $_POST['message']);

            $uri = Request::detect_uri();
            Request::initial()->redirect($uri);

        }
        else
            $errors = $post -> errors('validation');
    }
}
}