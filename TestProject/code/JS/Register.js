var adminDataArray = [];
var adminObj = {};

if(localStorage.getItem('adminData')!=null){
    adminDataArray = JSON.parse(localStorage.getItem('adminData'));
    document.getElementById("btnReg").disabled = true;
}

function register(){
    var adminName = document.getElementById('name').value;
    var adminEmail = document.getElementById('email').value;
    var adminPass = document.getElementById('password').value;
    var adminConfirm = document.getElementById('con-pass').value;
    var adminCity = document.getElementById('city').value;
    var adminState = document.getElementById('state').value;

    if(adminName != "" && adminEmail != "" && adminPass != "" && adminConfirm != ""  && adminCity != "" && adminState != ""){
        if(adminPass === adminConfirm){
            adminObj = {
                adminName:adminName,
                adminEmail:adminEmail,
                adminPass:adminPass,
                adminConfirm:adminConfirm,
                adminCity:adminCity,
                adminState:adminState,
                isLoggedin: 0
            }

            //console.log(adminObj);
            if(!localStorage.getItem('adminData')){
                adminDataArray.push(adminObj);
                localStorage.setItem('adminData',JSON.stringify(adminDataArray));
                location.reload();
            }
        }
        else{
            //console.log('eror');
            document.getElementById('errorDiv').style.display = "block";
            document.getElementById('errtext').innerHTML = "Password And Confirm Password Must Be Same..";  
        }
    }
    else{
            //console.log('eror');
            document.getElementById('errorDiv').style.display = "block";
            document.getElementById('errtext').innerHTML = "Please Fillout All Fields";  
    }
}