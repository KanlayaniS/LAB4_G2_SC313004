*** Settings ***
Library             SeleniumLibrary

*** Variables ***
${URL}              http://localhost/se_project/Project/th/module/applicationform/home
${BROWSER}          Chrome

*** Test Cases ***
Open Browser
    Open Browser    ${URL}    ${BROWSER}
Select Student Login
    Click Element       xpath://*[@name='studentlogin']
    Title Should Be     เข้าสู่ระบบ
Fail Login
    Input text      id:student_email          student5@gmail.com
    Click Element       xpath://*[@name='loginstudent']
    Title Should Be     เข้าสู่ระบบ
Pass Login
    Input text      id:student_email          student5@kkumail.com
    Click Element       xpath://*[@name='loginstudent']
    Title Should Be     หน้าหลักสำหรับนักศึกษา
Select Applicationform Menu
    Click Element       xpath://*[@name='applicationform']
    Title Should Be     แบบฟอร์มขอเงินสนับสนุน
Input text false pattern teacher_email
    Input text      id:name_title       นาย
    Input text      id:first_name       สมจิตร
    Input text      id:last_name       ชิดซ้าย
    Input text      id:student_id       641234569-7
    Input text      id:citizen_id       1234567890123
    Input text      id:GPA       3.70
    Input text      id:phone_number       0987654321
    Input text      id:date_of_birth       01/10/2545
    Input text      id:teacher_email       teacher@gmail.com
    Input text      id:reason_for_scholarship       ไม่มีตังค์กินข้าวแล้วววว
    Title Should Be     แบบฟอร์มขอเงินสนับสนุน
Input text false teacher_email
    Input text      id:teacher_email       teacher@kku.ac.th
    Title Should Be     แบบฟอร์มขอเงินสนับสนุน
Input text true teacher_email
    Input text      id:teacher_email       teacher1@kku.ac.th
    Click Element       xpath://*[@name='submitapplicationform']
    Title Should Be     หน้าหลักสำหรับนักศึกษา
Go to myapplication page
    Click Element       xpath://*[@name='myapplication']
    Title Should Be         ตรวจสอบสถานะคำร้อง
Go back to student home page
    Click Element       xpath://*[@name='goback']
    Title Should Be         หน้าหลักสำหรับนักศึกษา
Logout
    Click Element       xpath://*[@name='getlogout']
    Title Should Be         หน้าหลัก
Select Teacher Login
    Click Element       xpath://*[@name='teacherlogin']
    Title Should Be     เข้าสู่ระบบ
Fail Login
    Input text      id:teacher_email          teacher1@gmail.com
    Click Element       xpath://*[@name='loginteacher']
    Title Should Be     เข้าสู่ระบบ
Pass Login
    Input text      id:teacher_email          teacher1@kku.ac.th
    Click Element       xpath://*[@name='loginteacher']
    Title Should Be     หน้าหลักสำหรับอาจารย์
Click Acknowledge
    Click Element       xpath://*[@name='acknowledge']
    Title Should Be     หน้าหลักสำหรับอาจารย์
Logout
    Click Element       xpath://*[@name='getlogout']
    Title Should Be         หน้าหลัก