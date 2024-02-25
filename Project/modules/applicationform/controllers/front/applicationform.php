<?php
class ApplicationFormApplicationFormModuleFrontController extends ModuleFrontController
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
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/student/applicationform.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('submitapplicationform'))
        {
            $teacher_email = Tools::getValue('teacher_email');//รับข้อมูลจากเว็บไซต์
            if($this->isTeacherEmailExists($teacher_email))
            {
                $context = Context::getContext();
                $student_email = $context->cookie->student_email;
                $data = array(
                    'student_email' => $student_email,
                    'application_date' => date('Y-m-d'),
                    'teacher_email' => $teacher_email,
                    'teacher_status' => 'ยังไม่รับทราบ',
                    'status' => 'รอการตรวจสอบ'
                );
                // Add data to the database table
                if (!Db::getInstance()->insert('applicationform', $data)) {
                    return false;
                }
                $this->goToStudentHome();
            }
            $this->goToApplicationForm();
        }
        if(Tools::isSubmit('goback'))
        {
            $this->goToStudentHome();
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