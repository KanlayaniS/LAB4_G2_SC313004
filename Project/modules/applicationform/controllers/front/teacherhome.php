<?php
class ApplicationFormTeacherHomeModuleFrontController extends ModuleFrontController
{
    
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        $context = Context::getContext();
        $teacher_email = $context->cookie->teacher_email;
        $localhost = $context->cookie->localhost;
        if($teacher_email==null)
        {
            $this->goToHome();
        }
        $applications = $this->getDataByTeacherEmail($teacher_email);
        $this->context->smarty->assign([
            'teacher_email' => $teacher_email,
            'applications' => $applications,
            'localhost' => $localhost,
        ]);
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/teacher/teacherhome.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('acknowledge'))
        {
            $id = Tools::getValue('id');
            $this->updateTeacherStatus($id, "รับทราบแล้ว");
            $this->goToTeacherHome();
        }
        if(Tools::isSubmit('getlogout'))
        {
            Context::getContext()->cookie->logout();
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
    protected function getDataByTeacherEmail($teacher_email, $teacher_status='ยังไม่รับทราบ')
    {
        $db = Db::getInstance();

        $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'applicationform` 
                WHERE `teacher_email` = "' . pSQL($teacher_email) . '" 
                AND `teacher_status` = "' . pSQL($teacher_status) . '"';

        $results = $db->executeS($sql);

        if ($results === false) {
            // Print or log the error message
            echo "Database query error: " . $db->getMsgError();
            return array(); // Return an empty array in case of error
        }

        return $results;
    }
    protected function updateTeacherStatus($id_application, $new_teacher_status)
    {
        $db = Db::getInstance();

        $sql = 'UPDATE `' . _DB_PREFIX_ . 'applicationform` 
                SET `teacher_status` = "' . pSQL($new_teacher_status) . '" 
                WHERE `id_application` = ' . (int)$id_application;

        if ($db->execute($sql)) {
            return true;
        } else {
            return false;
        }
    }
}