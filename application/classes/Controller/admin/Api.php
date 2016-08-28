<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 24.08.2016
 * Time: 23:58
 */
class Controller_Admin_Api extends Controller_Admin
{
    protected $_secreate_key = 'HJs7asdhjku&098342kjrewjsfdl*7asdh324kh234';
    protected $_sessionKey = null;
    protected $_url_origin = null;
    protected $_thisUrlHost = false;
    protected $_csrf = null;
    protected $ajax_answer_status_ok = false;
    protected $ajax_answer = null;
    protected $ajax_error = null;
    public $template = 'admin/v_base';
    protected $_render = false;

    public function before()
    {
        parent::before();
        $this->response->headers(
            [
                'Access-Control-Allow-Origin' => $this->_thisUrlHost,
                'Access-Control-Allow-Methods' => 'POST, GET',
                'Access-Control-Allow-Headers' => 'accept, content-type',
                'Access-Control-Allow-Credentials' => 'true',
                'Access-Control-Max-Age' => 1728000,
                'Content-Type' => 'application/json, application/json;charset=UTF-8',
            ]
        );
//        parent::before();
//        if($this->isAjax()) {
            $this->_render = true;
//        }

    }
    public function action_index() {

        $content = View::factory('admin/articles/v_articles_index');

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }
    public function action_test() {

        $this->ajax_answer_status_ok = true;
        $this->ajax_answer = [
            'name' => 'Victor'
        ];
    }

    /**
     * Получаем ГЕО город по IP
     */
    protected function findIpCity() {

    }



    protected function isAjax() {
        $trueKey = "$this->_thisUrlHost/api_open";
        $isTrueKey = false;
        $encodedTrue = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->_secreate_key), $trueKey, MCRYPT_MODE_CBC, md5(md5($this->_secreate_key))));
        if($encodedTrue === str_replace(', application/json, text/plain, */*', null, Arr::get($_SERVER, 'HTTP_ACCEPT', false))) {
            $isTrueKey = true;
        }
        $origin = Arr::get($_SERVER, 'HTTP_ORIGIN', null);
        if($isTrueKey && $trueKey == "{$origin}/api_open") {
            return true;
        } else {
            return false;
        }
    }

    public function after()
    {
        $this->response->body(json_encode([
            'status_ok' => $this->ajax_answer_status_ok,
            'answer' => $this->ajax_answer,
            'error' => $this->_render ? $this->ajax_error : "No KEY Valid"
        ]));
    }
}