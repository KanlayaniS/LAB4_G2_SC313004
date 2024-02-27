<?php
class ApplicationFormMyApplicationModuleFrontController extends ModuleFrontController
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
        $applications = $this->getDataByStudentEmail($student_email);
        $localhost = $context->cookie->localhost;
        $this->context->smarty->assign([
            'student_email' => $student_email,
            'applications' => $applications,
            'localhost' => $localhost,
        ]);
        parent::initContent();
        $this->setTemplate('module:applicationform/views/templates/front/student/myapplication.tpl');
    }
    public function postProcess()
    {
        parent::postProcess();
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
    protected function getDataByStudentEmail($student_email)
    {
        $db = Db::getInstance();

        $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'applicationform` 
                WHERE `student_email` = "' . pSQL($student_email) . '"';

        $results = $db->executeS($sql);

        if ($results === false) {
            // Print or log the error message
            echo "Database query error: " . $db->getMsgError();
            return array(); // Return an empty array in case of error
        }

        return $results;
    }
}