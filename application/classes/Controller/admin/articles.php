<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Articles extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('menupages');
        $this->template->page_title = 'Статьи';
    }

    public function action_index() {

        $content = View::factory('admin/articles/v_articles_index');

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }
    public function action_test() {
        $this->ajax_answer_status_ok = true;
        $this->ajax_answer = [
            'test'
        ];
    }

}