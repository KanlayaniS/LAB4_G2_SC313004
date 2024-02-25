<?php
class applicationform extends Module
{
    public function __construct()
    {
        $this->name = 'applicationform';
        $this->version = '1.0.0';
        $this->author = 'Suphachok';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Application Form');
        $this->description = $this->trans('This is application form module and try to hook');
        $this->table_name = "applicationform";
    }

    public function install()
    {
        $sql = array();

        // Create teacher table
        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'teacher` (
            `teacher_email` VARCHAR(255) NOT NULL,
            `name_title` VARCHAR(100),
            `first_name` VARCHAR(100) NOT NULL,
            `last_name` VARCHAR(100) NOT NULL,
            PRIMARY KEY (`teacher_email`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        // Create application table with foreign key constraint
        $sql[] = "CREATE TABLE IF NOT EXISTS `" . _DB_PREFIX_ . "applicationform` (
            `id_application` INT(11) AUTO_INCREMENT PRIMARY KEY,
            `student_email` VARCHAR(255),
            `first_name` VARCHAR(255),
            `last_name` VARCHAR(255),
            `student_id` VARCHAR(255),
            `citizen_id` VARCHAR(255),
            `year` VARCHAR(255),
            `major` VARCHAR(255),
            `GPA` DECIMAL(10, 2),
            `phone_number` VARCHAR(255),
            `date_of_birth` VARCHAR(255),
            `teacher_email` VARCHAR(255),
            `address` TEXT,
            `reason_for_scholarship` TEXT,
            `filename` VARCHAR(255),
            `application_date` DATE,
            `teacher_status` VARCHAR(255),
            `status` VARCHAR(255),
            FOREIGN KEY (`teacher_email`) REFERENCES `" . _DB_PREFIX_ . "teacher`(`teacher_email`)
        ) ENGINE=" . _MYSQL_ENGINE_ . " DEFAULT CHARSET=utf8;";

        foreach ($sql as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        }
        //Add defualt values
        $teachers = array(
            array(
                'teacher_email' => 'teacher1@kku.ac.th',
                'name_title' => 'Mr.',
                'first_name' => 'John',
                'last_name' => 'Doe'
            ),
            array(
                'teacher_email' => 'teacher2@kku.ac.th',
                'name_title' => 'Ms.',
                'first_name' => 'Jane',
                'last_name' => 'Smith'
            ),
            array(
                'teacher_email' => 'teacher3@kku.ac.th',
                'name_title' => 'Mr.',
                'first_name' => 'Joe',
                'last_name' => 'Smith'
            ),
        );
    
        foreach ($teachers as $teacher) {
            if (!Db::getInstance()->insert('teacher', $teacher)) {
                return false;
            }
        }
        return parent::install();
    }

    public function uninstall()
    {
        $sql = array();
        $sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'applicationform`;';
        $sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'teacher`;';

        foreach ($sql as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        }
        return parent::uninstall();
    }
}