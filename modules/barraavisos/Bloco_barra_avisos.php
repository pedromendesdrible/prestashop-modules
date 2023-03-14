<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class Bloco_barra_avisos extends ObjectModel
{
    public $id_shop;

    public $id_lang;
    public $texto;
    public $link;
    public $active;

    /**
    * @see ObjectModel::$definition
    */
    public static $definition = array(
        'table' => 'barra_avisos',
        'primary' => 'id_barra_avisos',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            'id_barra_avisos' =>    array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),

            // Lang fields
            'texto' =>         array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 100),
            'link' =>           array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 100),
            'active' =>           array('type' => self::TYPE_INT, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 100),
        )
    );

}