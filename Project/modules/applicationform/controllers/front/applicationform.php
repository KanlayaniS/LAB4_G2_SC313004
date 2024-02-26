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
                $teacher_email = Tools::getValue('teacher_email');
                $first_name = Tools::getValue('first_name');
                $last_name = Tools::getValue('last_name');
                $student_id = Tools::getValue('student_id');
                $citizen_id = Tools::getValue('citizen_id');
                $year = Tools::getValue('year');
                $major = Tools::getValue('major');
                $GPA = Tools::getValue('GPA');
                $phone_number = Tools::getValue('phone_number');
                $date_of_birth = Tools::getValue('date_of_birth');
                $address = Tools::getValue('address');
                $reason_for_scholarship = Tools::getValue('reason_for_scholarship');

                $context = Context::getContext();
                $student_email = $context->cookie->student_email;
                $data = array(
                    'student_email' => $student_email,
                    'application_date' => date('Y-m-d'),
                    'teacher_email' => $teacher_email,
                    'teacher_status' => 'ยังไม่รับทราบ',
                    'status' => 'รอการตรวจสอบ',
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'student_id' => $student_id,
                    'citizen_id' => $citizen_id,
                    'year' => $year,
                    'major' => $major,
                    'GPA' => $GPA,
                    'phone_number' => $phone_number,
                    'date_of_birth' => $date_of_birth,
                    'address' => $address,
                    'reason_for_scholarship' => $reason_for_scholarship


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