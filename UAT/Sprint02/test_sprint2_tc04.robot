*** Settings ***
Library             SeleniumLibrary

*** Variables ***
${URL}              http://localhost/se_project/Project/th/
${BROWSER}          Chrome
${FILE_PATH}        C:\Users\iSuphachok\Downloads\slip01.jpg

*** Test Cases ***
Open Browser
    Open Browser    ${URL}    ${BROWSER}
Select Product
    Click Element       //a[contains(text(),'500')]
Add to Cart 
    Click Element       class:add
    Sleep       1
Go to Cart
    Go To       http://localhost/se_project/Project/th/ตะกร้า?action=show
    Sleep       1
Make order
    Go To       http://localhost/se_project/Project/th/รายการสั่งซื้อ
    Sleep       1
Input customer information
    Input text      id=field-firstname    ศุภโชค
    Input text      id=field-lastname      ครับ
    Input text      id=field-email      test@gmail.com
    Click Element       xpath://*[@class='continue btn btn-primary float-xs-right']
    Sleep       1
Input address information
    Input text      id:field-address1       10 ม.10 ต.ศิลา อ.เมื่อง
    Input text      id:field-postcode       40000
    Input text      id:field-city           ขอนแก่น
    Sleep       1
    Click Element       xpath://*[@name='confirm-addresses']
    Sleep       1
Go to Payment
    Click Element       xpath://*[@class='btn btn-primary center-block']
Upload Slip
    Choose File         id=slip_upload      ${FILE_PATH} 
    Submit Form
Last Summit
    Click Element       xpath://*[@class='btn btn-primary']

