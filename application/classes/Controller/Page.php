<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Template {

    // Определяем шаблон по умолчанию
    public $template = 'main';

    public function action_about()
    {
        $content = View::factory('/pages/about');
        $this->template->title = 'О сайте';
        $this->template->description = 'Страница о сайте';
        $this->template->content = $content;
    }
    public function action_contacts()
    {
        $content = View::factory('/pages/contacts');
        $this->template->title = 'Мои контакты';
        $this->template->description = 'Страница для связи со мной';
        $this->template->content = $content;
    }
}