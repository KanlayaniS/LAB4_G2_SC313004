*** Settings ***
Library             SeleniumLibrary

*** Variables ***
${URL}              http://localhost/se_project/Project/th/
${BROWSER}          Chrome

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
    Input text      id=field-email      test
    Click Element       xpath://*[@class='continue btn btn-primary float-xs-right']
    Sleep       1


