<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Pagination
 * @property $items_per_page
 * @property $offset
 */
class Pagination extends Kohana_Pagination {

    /**
     * @var array
     */
    public $meta_robots = ['index', 'follow'];
    /**
     * @var null|string
     */
    public $prev = null;
    /**
     * @var null|string
     */
    public $next = null;

    public $allPage = 0;

    public function __construct(array $config = array(), Request $request = NULL)
    {
        parent::__construct($config, $request);

        $this->allPage = $this->total_pages;

    }

    /**
    * @param null $siteUrl|string
    * @return Pagination
    */
    public function getNeighborsPages($siteUrl = null) {
      $this->meta_robots = ['index', 'follow'];
      $this->prev = ($this->previous_page)?$siteUrl.$this->url($this->previous_page):null;
      $this->next = ($this->next_page)?$siteUrl.$this->url($this->next_page):null;
      return $this;
    }

    public static function factory(array $config = array(), Request $request = NULL)
    {
        return parent::factory($config, $request);
    }
}