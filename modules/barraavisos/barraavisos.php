<?php
/**
* 2007-2023 PrestaShop
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
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Barraavisos extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'barraavisos';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Beatriz Machado';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Barra de Informações');
        $this->description = $this->l('Primeira Barra , barra vermelha');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    #1- fazer query para apagar a tabela
    #2- criar uma função para criar as tabelas 
    #3- chamar função createTables() no install e deletetables no unnistal
    #4- ver como funciona guardar o form do backifice na tabela (vais precisar de outra função)

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('BARRAAVISOS_LIVE_MODE', false);
        
        $this->_path.'createTables';   //ver em casa se está correto
        

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('displayBanner');            
    }   

    public function uninstall()
    {
        Configuration::deleteByName('BARRAAVISOS_LIVE_MODE');

        return parent::uninstall();
    }
    
     public function createTables()
    {
        return Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'barra_avisos` (
                 `id_barraavisos` int(100) NOT NULL AUTO_INCREMENT,
                 `texto` varchar(100) NOT NULL,
                 PRIMARY KEY (`barra_avisos`)
                 )ENGINE=InnoDB' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8'
         );

    }


    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitBarraavisosModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBarraavisosModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }


    

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'col' => '4',
                        'type' => 'text',
                        'label' => $this->l('Texto Avisos', array()),
                        'name' => 'txt_avisos',
                        'desc' => $this->l('Enter a valid text to header'),
                     ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        $fields['txt_avisos'] = Configuration::get('txt_avisos');

        return $fields;
    }

    /**
     * Save form data.
     */
    public function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        {
            Configuration::updateValue("txt_avisos", Tools::getValue("txt_avisos"));
        } 
        if (Tools::isSubmit('submitStoreConf')) {
            $languages = Language::getLanguages(false);
            $values = [];
            $update_images_values = false;
        }   
    }

    public function hookDisplayBanner()
    {
        $this->context->smarty->assign('txt_avisos', Configuration::get('txt_avisos'));
        return $this->display(__FILE__, '/views/templates/front/index.tpl');

    }

    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

   
   
   
   



   
}