function form1Validate(){

    var fname = document.forms["form1"]["urName"].value;
    var pswrd= document.getElementById('pd').value;
    var cpswd = document.getElementById('cpd').value;
    var email1 = document.forms["form1"]["email"].value;



    if(isAlphebatic(fname))
        if(emailValidation(email1))
                if(ispassword(pswrd))
                    if(iscpassword(cpswd,pswrd))

                                            {
                                                return true;
                                            }
                        else return false;
                    else return false;
                else return false;
     else return false;
}


function form2Validate(){

    var fname = document.forms["form2"]["urName"].value;
    var contact =document.forms["form2"]["number"].value;
    var email1 = document.forms["form2"]["email"].value;

    if(isAlphebatic(fname))
        if(emailValidation(email1))
                if(isNumeric(contact))
                {
                    return true;
                }
            else return false;
        else return false;
    else return false;
}

function isEmpty(elemValue,field) {

    if(elemValue == ""|| elemValue == "NULL"){

        alert("You can't have "+field+" field empty");
        return true;
    }
    else
        return false;
}


function isAlphebatic(elemValue) {

    if (!isEmpty(elemValue,"Name"))
    {   var exp=/^[a-zA-Z]+$/;

        if (elemValue.match(exp)){

            return true;
        }

        else{
            alert("Enter only Alphabetic Characters for your First Name");
            return false;
        }
    }

    else
        return  false;

}

function isNumeric(elemValue){



    if(!isEmpty(elemValue,"Contact Number")) {

        var num=/^[0-9]+$/;

        if (elemValue.match(num)) {

            return true;
        }
        else{
            alert("Enter only numeric characters for contact number");
            return false;
        }}

    else
        return false;
}


function ispassword(elemValue) {

    var pd = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*\}\{\(\)\+\-])/


    if (!isEmpty(elemValue,"Password")) {

        if (elemValue.length >= 8) {
            if (elemValue.match(pd)) {

                return true;
            }
            else {
                alert("Enter only uppercase,lowercase,numeric characters and a special character");
                return false;
            }
        }
        else
            alert("Length should be atleast 8 in password field");
    }
    else
        return false;



}


function iscpassword(elemValue,yoo) {


    if (!isEmpty(elemValue,"Retype Password")) {

        if(elemValue==yoo){

            return true;
        }

        else{
            alert("Password and Retype  Password fields should be same");
            return false;
        }}
    else
        return false;

}



function emailValidation(elemValue){

    if(!isEmpty(elemValue, "Email Address")){

        var atops = elemValue.indexOf("@");
        var dotops = elemValue.indexOf(".");

        if(atops < 1 || dotops+2 >= elemValue.length || atops +2 >dotops){
            alert("Enter a valid Email Address");
            return false;
        }

        else return true;
    }
    else{

        return false;
    }
}

