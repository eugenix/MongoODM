<?php
/**
 * Картинка для статьи
 *
 * PHP version 5
 *
 * @package
 * @author  Eugene Kurbatov <ekur@i-loto.ru>
 */

use Solo\Lib\Mongo\MongoEntity;

class Photo extends MongoEntity
{
	/**
	 * Url фотографии
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Описание фотограции
	 *
	 * @var string
	 */
	public $desc = null;
}
