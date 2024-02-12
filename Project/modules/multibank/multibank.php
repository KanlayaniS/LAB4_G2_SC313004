<?php
class Multibank extends Module
{
    public function __construct()
    {
        $this->name = 'multibank';
        $this->author = 'Aphisit';
        $this->version = '1.0.0';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Multibank');
        $this->description = $this->l('This is part of the Prestashop module development');
        $this->table_name = 'multibank'; // Database table name for banks
    }

    public function install()
    {
        // Create necessary database tables or perform any other installation tasks here
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.$this->table_name.'` (
            `id_multibank` INT(11) NOT NULL AUTO_INCREMENT,
            `bank_name` VARCHAR(255) NOT NULL,
            `bank_number` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id_multibank`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
        if (!Db::getInstance()->execute($sql)) {
            return false;
        }
        return parent::install() && $this->registerHook('paymentOptions'); 
    }

    public function uninstall()
    {
        // Perform any cleanup tasks during uninstallation
        $sql = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.$this->table_name.'`';
        if (!Db::getInstance()->execute($sql)) {
            return false;
        }
        return parent::uninstall();
    }

    public function hookPaymentOptions()
    {
        // Fetch the list of banks
        $banks = $this->getBanks();
        
        // Pass banks data to the template
        $this->context->smarty->assign(array(
            'banks' => $banks
        ));
        
        // Return template file for payment options
        return $this->display(__FILE__, 'views/templates/hook/payment_options.tpl');
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitMultibank')) {
            $bank_name = Tools::getValue('bank_name');
            $bank_number = Tools::getValue('bank_number');
            $this->addBank($bank_name, $bank_number);
        }

        // Fetch and pass multibank settings to the template
        $this->context->smarty->assign(array(
            'banks' => $this->getBanks()
        ));

        // Return template file for module configuration
        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }

    // Function to fetch list of banks
    private function getBanks() {
        $sql = 'SELECT * FROM `'._DB_PREFIX_.$this->table_name.'`';
        return Db::getInstance()->executeS($sql);
    }

    // Function to add a bank
    private function addBank($bank_name, $bank_number) {
        $sql = 'INSERT INTO `'._DB_PREFIX_.$this->table_name.'` (`bank_name`, `bank_number`) VALUES ("'.pSQL($bank_name).'", "'.pSQL($bank_number).'")';
        return Db::getInstance()->execute($sql);
    }
}
