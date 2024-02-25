<?php
class ApplicationFormStudentHomeModuleFrontController extends ModuleFrontController
{
    
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        $context = Context::getContext();
        $student_email = $context->cookie->student_email;
        if($student_email==null)
        {
            $this->goToHome();
        }
        $this->context->smarty->assign([
            'student_email' => $student_email,
        ]);
        $this->context->smarty->assign([
            'TEST' => 'Hi, There!',
        ]);
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/student/studenthome.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('applicationform'))
        {
            $this->goToApplicationForm();
        }
        if(Tools::isSubmit('myapplication'))
        {
            $this->goToMyApplication();
        }
        if(Tools::isSubmit('getlogout'))
        {
            Context::getContext()->cookie->logout();
            $this->goToHome();
        }
    }
    protected function goToApplicationForm()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'applicationform',
            array(), // You can pass any additional parameters here
            true     // Set to true to use SSL
        );
        Tools::redirect($loginControllerUrl);
    }
    protected function goToMyApplication()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'myapplication',
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