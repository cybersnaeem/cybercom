var userSessionArray = [];
var userSessionObj = {};

if(localStorage.getItem('userSession')!=null){
    userSessionArray = JSON.parse(localStorage.getItem('userSession'));
}


if(localStorage.getItem('adminData')!=null){
    document.getElementById("btnReg").disabled = true;
}

function login(){

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if(email != "" && password != "") {
        var adminData =  JSON.parse(localStorage.getItem('adminData'));
        var userData =  JSON.parse(localStorage.getItem('userData'));
        //console.log(,);
        if(email === adminData[0].adminEmail && password === adminData[0].adminPass){
            adminData[0].isLoggedin = 1;
            localStorage.setItem('adminData',JSON.stringify(adminData));
            window.location.href = "./user.html";   
        }
        else if(email != adminData[0].adminEmail && password != adminData[0].adminPass){
            for(var i=0; i<userData.length;i++){
                if(userData[i].userEmail === email && userData[i].userPass === password){
                    var currentdate = new Date();
                    var datetime = currentdate.getDate() + "/" + (currentdate.getMonth()+1) 
                    + "/" + currentdate.getFullYear() + " " 
                    + currentdate.getHours() + ":" 
                    + currentdate.getMinutes() + ":" + currentdate.getSeconds();
                    userSessionObj = {
                        userName : userData[i].userName,
                        loginTime :  datetime,
                        logoutTime : null
                    }
                    if(localStorage.getItem('userSession')){
                        userSessionArray.push(userSessionObj);
                        localStorage.setItem('userSession',JSON.stringify(userSessionArray));
                    }
                    else{
                        userSessionArray.push(userSessionObj);  
                        localStorage.setItem('userSession',JSON.stringify(userSessionArray));
                    }
                    location.replace("./Sub-user.html?name="+userData[i].userName);
                }
            }
        }
        else{
            console.log('eror');
            document.getElementById('errorDiv').style.display = "block";
            document.getElementById('errtext').innerHTML = "Please Enter Correct Email Id and Password..";  
        }
    }else{
        console.log('er');
        document.getElementById('errorDiv').style.display = "block";
        document.getElementById('errtext').innerHTML = "Please Fillout Fields..";   
    }
}
    


