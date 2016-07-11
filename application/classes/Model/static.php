<?php defined('SYSPATH') or die('No direct script access.');

class Model_Static extends Model
{
//    protected $_tableArticles = 'articles';

//    protected $_has_many = array(
//        'authors'    => array(
//            'model'       => 'author',
//            'through' => 'article_author',
//        )
//    );
    public function get_arr(){
        return ['name' => 'Viktor', 'surname' => 'Sydorenko', 'age' => 22];
    }
};