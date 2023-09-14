<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

namespace Orm;

/**
 * CreatedAt observer. Makes sure the created timestamp column in a Model record
 * gets a value when a new record is inserted in the database.
 */
class Observer_CreatedAt extends Observer
{
	/**
	 * @var  bool  default setting, true to use mySQL timestamp instead of UNIX timestamp
	 */
	public static $mysql_timestamp = false;

	/**
	 * @var  string  default property to set the timestamp on
	 */
	public static $property = 'created_at';

	/**
	 * @var  bool  true to use mySQL timestamp instead of UNIX timestamp
	 */
	protected $_mysql_timestamp;

	/**
	 * @var  string  property to set the timestamp on
	 */
	protected $_property;

	/**
	 * @var  string  whether to overwrite an already set timestamp
	 */
	protected $_overwrite;

	/**
	 * Set the properties for this observer instance, based on the parent model's
	 * configuration or the defined defaults.
	 *
	 * @param  string  Model class this observer is called on
	 */
	public function __construct($class)
	{
		$props = $class::observers(get_class($this));
		$this->_mysql_timestamp  = isset($props['mysql_timestamp']) ? $props['mysql_timestamp'] : static::$mysql_timestamp;
		$this->_property         = isset($props['property']) ? $props['property'] : static::$property;
		$this->_overwrite        = isset($props['overwrite']) ? $props['overwrite'] : true;
	}

	/**
	 * Set the CreatedAt property to the current time.
	 *
	 * @param  Model  Model object subject of this observer method
	 */
	public function before_insert(Model $obj)
	{
		if ($this->_overwrite or empty($obj->{$this->_property}))
		{
			$obj->{$this->_property} = $this->_mysql_timestamp ? \Date::time()->format('mysql') : \Date::time()->get_timestamp();
		}
	}
}
