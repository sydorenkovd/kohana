<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common {
public $template = 'main';
    // Страница о сайте

    public function action_about()
    {
       $arr['name'] = $this->request->param('name');
       $arr['point'] = $this->request->param('point');
$arrs = Arr::extract($arr, ['name', 'point']);
        $content = $arrs;
        $this->template->name = '';
        $this->template->age = 22;
        $this->template->content = $content;
    }

    // Страница контактов    
    public function action_contacts()
    {
        $arr = Model::factory('static')->get_arr();
        $username = 'Гость';
        I18n::lang('ru');
        $controller = $this->request->controller();
        $word = __('Hello, world! :username', [':username' => $username]);
        $content = View::factory('/pages/contacts',
            ['arr' => $arr, 'word' => $word, 'controller' => $controller]);
        $this->template->content = Request::factory('/about')->execute();
    }

}