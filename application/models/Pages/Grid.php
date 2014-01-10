<?php
/**
 * @copyright Bluz PHP Team
 * @link https://github.com/bluzphp/skeleton
 */

/**
 * @namespace
 */
namespace Application\Pages;

/**
 * @category Application
 * @package  Pages
 */
class Grid extends \Bluz\Grid\Grid
{
    protected $uid = 'pages';

    /**
     * init
     * 
     * @return self
     */
    public function init()
    {
         // Array
         $adapter = new \Bluz\Grid\Source\SqlSource();
         $adapter->setSource('SELECT * FROM pages');

         $this->setAdapter($adapter);
         $this->setDefaultLimit(25);
         $this->setAllowOrders(['title', 'id', 'created', 'updated']);
         $this->setAllowFilters(['title', 'alias', 'description', 'content', 'id']);
         return $this;
    }
}
