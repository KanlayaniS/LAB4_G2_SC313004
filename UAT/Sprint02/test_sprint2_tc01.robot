*** Settings ***
Library             SeleniumLibrary

*** Variables ***
${URL}              http://localhost/se_project/Project/th/
${BROWSER}          Chrome

*** Test Cases ***
Open Browser
    Open Browser    ${URL}    ${BROWSER}
Select Product
    Click Element       //a[contains(text(),'100')]
Add quantity
    Input text      id=quantity_wanted    99999
Add to Cart 
    Click Element       class:add
    Sleep       1

