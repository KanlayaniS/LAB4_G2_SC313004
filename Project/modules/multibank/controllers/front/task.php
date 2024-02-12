<?php
class MultibankTaskModuleFronController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();

    }
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign(array());
        $this->setTemplate('module:multibank/views/templates/front/task.tpl');
    }
}