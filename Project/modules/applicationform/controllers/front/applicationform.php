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
        $old_data = unserialize($context->cookie->old_data);
        if($student_email==null)
        {
            $this->goToHome();
        }
        $this->context->smarty->assign([
            'student_email' => $student_email,
            "old_data" => $old_data,
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
            $name_title = Tools::getValue('name_title');
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

            if($this->isTeacherEmailExists($teacher_email))
            {
                // Handle file upload
                $fileInputName = 'file_input_name'; // Change to the name of your file input field
                $destinationDirectory = _PS_MODULE_DIR_ . 'applicationform/evidence';// Change to your desired upload directory
                $uploadedFilePath = $this->uploadFile($fileInputName, $destinationDirectory);

                $context = Context::getContext();
                $student_email = $context->cookie->student_email;
                $data = array(
                    'student_email' => $student_email,
                    'application_date' => date('Y-m-d'),
                    'teacher_email' => $teacher_email,
                    'teacher_status' => 'ยังไม่รับทราบ',
                    'status' => 'รอการตรวจสอบ',
                    'name_title' => $name_title,
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
                    'reason_for_scholarship' => $reason_for_scholarship,
                    'filename' => $uploadedFilePath // Save the uploaded file path
                );
                // Add data to the database table
                if (!Db::getInstance()->insert('applicationform', $data)) {
                    return false;
                }
                $context->cookie->old_data = null;
                $this->goToStudentHome();
            }
            $old_data = array(
                'name_title' => $name_title,
                'teacher_email' => $teacher_email,
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
                'reason_for_scholarship' => $reason_for_scholarship,
                'error' => "อีเมลที่ปรึกษาไม่ถูกต้อง!"
            );
            $context = Context::getContext();
            $context->cookie->old_data = serialize($old_data);
            $this->goToApplicationForm();
        }
        if(Tools::isSubmit('goback'))
        {
            $this->goToStudentHome();
        }
    }

    protected function uploadFile($fileInputName, $destinationDirectory)
{
    // Check if file is uploaded
    if (!isset($_FILES[$fileInputName]) || $_FILES[$fileInputName]['error'] == UPLOAD_ERR_NO_FILE) {
        return false; // No file uploaded
    }

    // Check for upload errors
    if ($_FILES[$fileInputName]['error'] != UPLOAD_ERR_OK) {
        return false; // Error during upload
    }

    // Check if uploaded file is valid
    $fileTmpPath = $_FILES[$fileInputName]['tmp_name'];
    $fileName = basename($_FILES[$fileInputName]['name']);
    $fileSize = $_FILES[$fileInputName]['size'];

    // Define allowed file types
    $allowedExtensions = array('pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'gif'); // Add more if needed

    // Check file extension
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        return false; // Invalid file type
    }

    // Define max file size in bytes (10MB)
    $maxFileSize = 10 * 1024 * 1024; // Adjust as needed

    // Check file size
    if ($fileSize > $maxFileSize) {
        return false; // File too large
    }

    // Generate a new file name
    $newFileName = uniqid() . '_' . $fileName; // You can use any method to generate a unique file name

    // Move uploaded file to destination directory with the new file name
    $destinationPath = rtrim($destinationDirectory, '/') . '/' . $newFileName;
    if (!move_uploaded_file($fileTmpPath, $destinationPath)) {
        return false; // Failed to move file
    }

    // Return the uploaded file path
    return $newFileName;
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
