<?php
class ApplicationFormHomeModuleFrontController extends ModuleFrontController
{
    
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        $context = Context::getContext();
        $context->cookie->localhost = "http://localhost:".$_SERVER['SERVER_PORT']."/se_project/Project/modules/applicationform";
        $localhost = $context->cookie->localhost;
        $this->context->smarty->assign([
            'localhost' => $localhost,
        ]);
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/home.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('studentlogin'))
        {
            $this->goToStudentLogin();
        }
        if(Tools::isSubmit('teacherlogin'))
        {
            $this->goToTeacherLogin();
        }
    }
    protected function goToStudentLogin()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'studentlogin',
            array(), // You can pass any additional parameters here
            true     // Set to true to use SSL
        );
        Tools::redirect($loginControllerUrl);
    }
    protected function goToTeacherLogin()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'teacherlogin',
            array(), // You can pass any additional parameters here
            true     // Set to true to use SSL
        );
        Tools::redirect($loginControllerUrl);
    }
}