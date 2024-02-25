<?php
class ApplicationForm extends ObjectModel
{
    public $id_application;
    public $student_email;
    public $first_name;
    public $last_name;
    public $student_id;
    public $citizen_id;
    public $year;
    public $major;
    public $GPA;
    public $phone_number;
    public $date_of_birth;
    public $advisor_email;
    public $address;
    public $reason_for_scholarship;
    public $filename;
    public $application_date;
    public $teacher_status;
    public $status;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'applicationform',
        'primary' => 'id_application',
        'fields' => array(
            'id_application' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'student_email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true),
            'first_name' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'last_name' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'student_id' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'citizen_id' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'year' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'major' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'GPA' => array('type' => self::TYPE_FLOAT),
            'phone_number' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'date_of_birth' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'teacher_email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail'),
            'address' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'reason_for_scholarship' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'filename' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'application_date' => array('type' => self::TYPE_DATE),
            'teacher_status' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'status' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
        ),
    );

    public function __construct($id_application = null)
    {
        parent::__construct($id_application);
    }

}
