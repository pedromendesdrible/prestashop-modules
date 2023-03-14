<?php

/**
* 2007-2021 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_ . 'blocoslidetexto/Bloco_slide_texto.php');

class Blocoslidetexto extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'blocoslidetexto';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Drible';
        $this->need_instance = 0;

        /**
        * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
        */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Bloco Slide Texto');
        $this->description = $this->l('Bloco Slide Texto permite adicionar no topo do site um slider com campos de texto editáveis por backoffice.');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
    * Don't forget to create update methods if needed:
    * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
    */
    public function install()
    {
        Configuration::updateValue('BLOCOSLIDETEXTO_LIVE_MODE', false);

        //include(dirname(__FILE__) . '/sql/install.php');

        /* Creates tables */

        return parent::install() &&
        $this->createTables() &&
        $this->registerHook('header') &&
        $this->registerHook('backOfficeHeader') &&
        $this->registerHook('displayBanner');
    }

    public function uninstall()
    {
        Configuration::deleteByName('BLOCOSLIDETEXTO_LIVE_MODE');

        return parent::uninstall() &&
        $this->deleteTables();
    }

    /**
    * Load the configuration form
    */
    public function getContent()
    {
        if (Tools::isSubmit('addBlock')) {
            $output = $this->renderAddForm();
        } elseif (Tools::isSubmit('editBlock')) {
            $id = Tools::getValue('id');
            $output = $this->editBlock($id);
        } elseif (Tools::isSubmit('deleteBlock')) {
            $id = Tools::getValue('id');
            $output = $this->deleteBlock($id);
        } elseif (Tools::isSubmit('submitBlocoslidetextoModule')) {
            $output = $this->postProcess(false);
        } elseif (Tools::isSubmit('submitEditModule')) {
            $output = $this->postProcess(true);
        } else {
            $this->context->smarty->assign('module_dir', $this->_path);
            $this->context->smarty->assign('link', $this->context->link);
            $this->context->smarty->assign('blocos', $this->getBlocos('admin'));
            $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');
        }

        return $output;
    }

    protected function createTables()
    {
        $res = true;

        /* Slides */
        $res &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'blocoslidetexto` (
            `id_blocoslidetexto` INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (`id_blocoslidetexto`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;
        ');

        /* Slides lang configuration */
        $res &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'blocoslidetexto_lang` (
            `id_blocoslidetexto` INT(10) UNSIGNED NOT NULL,
            `id_shop` INT(10) UNSIGNED NOT NULL,
            `id_lang` INT(10) UNSIGNED NOT NULL,
            `texto1` varchar(255) NOT NULL,
            `texto2` varchar(255) NOT NULL,
            `codigodesconto` varchar(255) NOT NULL,
            `link` varchar(255) NOT NULL,
            `active` INT(11) NOT NULL,
            PRIMARY KEY (`id_blocoslidetexto`,`id_lang`, `id_shop`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }

    public function deleteTables()
    {
        $res = true;

        $res &= Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'blocoslidetexto`');
        $res &= Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'blocoslidetexto_lang`');

        return $res;
    }

    /**
    * Create the form that will be displayed in the configuration of your module.
    */
    protected function renderAddForm()
    {
        $fields_add_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->getTranslator()->trans('Bloco Slide Texto', array(), 'Modules.Blocoslidetexto.Admin'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'name' => 'id',
                    ),
                    array(
                        'type' => 'hidden',
                        'name' => 'id_lang',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Texto 1', array(), 'Admin.Global'),
                        'name' => 'texto1',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Texto 2', array(), 'Admin.Global'),
                        'name' => 'texto2',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Código desconto', array(), 'Admin.Global'),
                        'name' => 'codigodesconto',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->getTranslator()->trans('Link', array(), 'Admin.Global'),
                        'name' => 'link',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Enabled', array(), 'Admin.Global'),
                        'name' => 'active_slide',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Global')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Global')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        if (Tools::getValue('id')) {
            $helper->submit_action = 'submitEditModule';
        } else {
            $helper->submit_action = 'submitBlocoslidetextoModule';
        }
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
        . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_add_form));
    }

    /**
    * Set values for the inputs.
    */
    protected function getConfigFormValues()
    {
        $languages = Language::getLanguages(false);
        $fields = array();

        if (Tools::getValue('id')) {
            $edit_bloco = new Bloco_slide_texto(Tools::getValue('id'));
        } else {
            $edit_bloco = new Bloco_slide_texto();
        }

        foreach ($languages as $lang) {
            $fields['id'] = Tools::getValue('id', $edit_bloco->id);
            $fields['id_lang'] = Tools::getValue('id_lang', $edit_bloco->id_lang);
            $fields['texto1'][$lang['id_lang']] = Tools::getValue('texto1_' . (int)$lang['id_lang'], $edit_bloco->texto1[$lang['id_lang']]);
            $fields['texto2'][$lang['id_lang']] = Tools::getValue('texto2_' . (int)$lang['id_lang'], $edit_bloco->texto2[$lang['id_lang']]);
            $fields['codigodesconto'][$lang['id_lang']] = Tools::getValue('codigodesconto_' . (int)$lang['id_lang'], $edit_bloco->codigodesconto[$lang['id_lang']]);
            $fields['link'][$lang['id_lang']] = Tools::getValue('link_' . (int)$lang['id_lang'], $edit_bloco->link[$lang['id_lang']]);
            $fields['active_slide'] = Tools::getValue('active_slide', $edit_bloco->active);
        }

        return $fields;
    }

    /**
    * Save form data.
    */
    protected function postProcess($edit)
    {
        $form_values = $this->getConfigFormValues();

        if ($edit == true) {
            $bloco = new Bloco_slide_texto($form_values['id']);
            $bloco->id_blocoslidetexto = $form_values['id'];
        } else {
            $bloco = new Bloco_slide_texto();
        }

        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $bloco->texto1[$lang['id_lang']] = $form_values['texto1'][$lang['id_lang']];
            $bloco->texto2[$lang['id_lang']] = $form_values['texto2'][$lang['id_lang']];
            $bloco->codigodesconto[$lang['id_lang']] = $form_values['codigodesconto'][$lang['id_lang']];
            $bloco->link[$lang['id_lang']] = $form_values['link'][$lang['id_lang']];
            $bloco->active = $form_values['active_slide'];
        }

        if ($edit == true) {
            $bloco->update();
        } else {
            $bloco->add();
        }

        Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
    }

    public function getBlocos($admin)
    {
        $this->context = Context::getContext();
        $id_idioma = $this->context->language->id;

        if ($admin == 'admin') {
            $blocos = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT * FROM ps_blocoslidetexto i
            LEFT JOIN `ps_blocoslidetexto_lang` l ON l.`id_blocoslidetexto` = i.`id_blocoslidetexto`
            WHERE l.`id_lang` =' . $id_idioma);
        } else {
            $blocos = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT * FROM ps_blocoslidetexto i
            LEFT JOIN `ps_blocoslidetexto_lang` l ON l.`id_blocoslidetexto` = i.`id_blocoslidetexto`
            WHERE l.`active` = 1 and l.`id_lang` =' . $id_idioma);

            $i = 0;
            foreach($blocos as $bloco){
                if($bloco['texto1'] == null){
                    unset($blocos[$i]);
                }
                $i = $i + 1;
            }

        }

        return $blocos;
    }

    public function deleteBlock($id)
    {
        if ($id) {
            Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'blocoslidetexto` WHERE `id_blocoslidetexto` = ' . $id);
            Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'blocoslidetexto_lang` WHERE `id_blocoslidetexto` = ' . $id);
        }
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=1&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
    }

    public function editBlock($id)
    {
        $edit_bloco = new Bloco_slide_texto($id);
        return $this->renderAddForm();
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    /**
    * Add the CSS & JavaScript files you want to be added on the FO.
    */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }

    public function hookDisplayBanner()
    {
        $blocos = $this->getBlocos('front');

        $this->context->smarty->assign('blocos', $blocos);
        return $this->display(__FILE__, '/views/templates/front/slide_texto.tpl');
    }
}
