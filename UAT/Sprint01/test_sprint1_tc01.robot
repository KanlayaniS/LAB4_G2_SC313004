*** Settings ***
Library             SeleniumLibrary

*** Variables ***
${URL}              http://localhost/se_project/Project/th/
${BROWSER}          Chrome

*** Test Cases ***
Open Browser
    Open Browser    ${URL}    ${BROWSER}
Select Product
    Click Element       //a[contains(text(),'KKU T-shirt')]
Add to Cart 
    Click Element       class:add
    Sleep       3
Go to Cart
    Go To       http://localhost/se_project/Project/th/cart?action=show
    Sleep       3
Make order
    Go To       http://localhost/se_project/Project/th/order
    Sleep       3
Input customer information
    Input text      id=field-firstname    ศุภโชค
    Input text      id=field-lastname      ครับ
    Input text      id=field-email      suphachok.nakub@gmail.com
    Select Checkbox     psgdpr
    Select Checkbox     customer_privacy
    Click Element       xpath://*[@class='continue btn btn-primary float-xs-right']
Input address information
    Input text      id:field-address1       10 ม.10 ต.ศิลา อ.เมื่อง
    Input text      id:field-postcode       40000
    Input text      id:field-city           ขอนแก่น
    Select From List By Index       field-id_country     3
    Sleep       1
    Click Element       xpath://*[@name='confirm-addresses']
    Sleep       3
    