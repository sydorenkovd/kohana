<?php defined('SYSPATH') or die('No direct script access.');

class Model_Author extends ORM
{
    protected $_tableAuthors = 'authors';

    protected $_has_many = array(
        'articles'    => array(
            'model'       => 'article',
            'foreign_key' => 'author_id',
        )
    );
};