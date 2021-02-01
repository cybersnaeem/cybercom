var checkLoginData = JSON.parse(localStorage.getItem('adminData'));

if(checkLoginData[0].isLoggedin === 0){
    window.location.href = "./Error.html";
}


var userDataArray = [];

if(localStorage.getItem('userData')!=null){
    userDataArray = JSON.parse(localStorage.getItem('userData'));
}
countAge();

var adminData = JSON.parse(localStorage.getItem('adminData'));
document.getElementById('username').innerHTML = `hello! `+adminData[0].adminName;

function countAge(){
    var count18 = 0 ;
    var count50 = 0;
    var countMax = 0;


    document.getElementById('below18years').innerHTML = "0 Users";
    document.getElementById('above18years').innerHTML = "0 Users";
    document.getElementById('above50years').innerHTML = "0 Users";
    
    
    var userData = JSON.parse(localStorage.getItem('userData'));
    
    for(var i=0; i < userData.length;i++){
        //console.log(userData[i].userAge);
        if(userData[i].userAge < 18){
            var count18 = count18 + 1;
            document.getElementById('below18years').innerHTML =  count18+" Users";  
        }
        else if(userData[i].userAge >= 18 && userData[i].userAge <= 50){
            var count50 = count50 + 1;
            document.getElementById('above18years').innerHTML =  count50+" Users";
        }
        else if(userData[i].userAge >= 50){
            var countMax = countMax + 1;
            document.getElementById('above50years').innerHTML =  countMax+" Users";
        }
    }
}
    

showGreet();

function showGreet(){

    var userData = JSON.parse(localStorage.getItem('userData'));

    for(var i=0; i< userData.length;i++){
        let dt = new Date(userData[i].userDOB);
        let dobDay = dt.getDate();
        let dobMon = dt.getMonth();
        let d = new Date();
        let currentDay = d.getDate();
        let currentMon = d.getMonth();
        if(currentDay === dobDay && currentMon === dobMon){
            document.getElementById('greet').innerHTML = userData[i].userName +" Has Birthday Today!";
        }
    }
}
    
function logout(){
    var adminData = JSON.parse(localStorage.getItem('adminData'));
    adminData[0].isLoggedin = 0;
    localStorage.setItem('adminData',JSON.stringify(adminData));
    window.location.href = "./login.html";
}