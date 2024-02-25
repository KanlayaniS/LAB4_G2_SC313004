<?php
class ApplicationFormStudentLoginModuleFrontController extends ModuleFrontController
{
    
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        $this->context->smarty->assign([
            'TEST' => 'Hi, There!',
        ]);
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/student/studentlogin.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('loginstudent'))
        {
            $student_email = Tools::getValue('student_email');
            $context = Context::getContext();
            $context->cookie->student_email = $student_email;
            $this->goToStudentHome();
        }
        if(Tools::isSubmit('goback'))
        {
            $this->goToHome();
        }
    }
    protected function goToStudentHome()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'studenthome',
            array(), // You can pass any additional parameters here
            true     // Set to true to use SSL
        );
        Tools::redirect($loginControllerUrl);
    }
    protected function goToHome()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'home',
            array(), // You can pass any additional parameters here
            true     // Set to true to use SSL
        );
        Tools::redirect($loginControllerUrl);
    }
}