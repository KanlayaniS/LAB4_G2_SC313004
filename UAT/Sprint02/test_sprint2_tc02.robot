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
Increase item in cart
    Click Element       xpath://*[@class='material-icons touchspin-up']
Decrease item in cart
    Click Element       xpath://*[@class='material-icons touchspin-down']
    Click Element       xpath://*[@class='material-icons touchspin-down']
    Click Element       xpath://*[@class='material-icons touchspin-down']
Delete item in cart
    Click Element       xpath://*[@class='material-icons float-xs-left']
    Sleep       2

