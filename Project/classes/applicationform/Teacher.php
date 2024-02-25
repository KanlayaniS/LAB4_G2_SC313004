<?php
class Teacher extends ObjectModel
{
    public $teacher_email;
    public $name_title;
    public $first_name;
    public $last_name;

    public static $definition = array(
        'table' => 'teacher',
        'primary' => 'teacher_email',
        'fields' => array(
            'teacher_email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true),
            'name_title' => array('type' => self::TYPE_STRING),
            'first_name' => array('type' => self::TYPE_STRING, 'required' => true),
            'last_name' => array('type' => self::TYPE_STRING, 'required' => true),
        ),
    );

    public function __construct($teacher_email = null)
    {
        parent::__construct($teacher_email);
    }
}
