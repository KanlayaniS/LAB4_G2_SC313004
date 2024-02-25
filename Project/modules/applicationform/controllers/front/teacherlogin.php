<?php
class ApplicationFormTeacherLoginModuleFrontController extends ModuleFrontController
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
        $this->setTemplate('module:applicationform/views/templates/front/teacher/teacherlogin.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('loginteacher'))
        {
            $teacher_email = Tools::getValue('teacher_email');
            $context = Context::getContext();
            $context->cookie->teacher_email = $teacher_email;
            if($this->isTeacherEmailExists($teacher_email))
            {
                $this->goToTeacherHome();
            }
            $this->goToTeacherLogin();
        }
        if(Tools::isSubmit('goback'))
        {
            $this->goToHome();
        }
    }
    protected function goToTeacherHome()
    {
        $loginControllerUrl = $this->context->link->getModuleLink(
            'applicationform',
            'teacherhome',
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

    protected function isTeacherEmailExists($teacher_email)
    {
        $db = Db::getInstance();

        $sql = 'SELECT COUNT(*) 
                FROM `' . _DB_PREFIX_ . 'teacher` 
                WHERE `teacher_email` = "' . pSQL($teacher_email) . '"';

        $result = $db->getValue($sql);

        return $result > 0 ? true : false;
    }
}