<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM
{
    protected $_tableArticles = 'articles';

    protected $_has_many = array(
        'authors'    => array(
            'model'       => 'author',
            'through' => 'article_author',
        )
    );
};