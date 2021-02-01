var userData = JSON.parse(localStorage.getItem('userData'));

var userSessionArray = [];
var userSessionObj = {};
if(localStorage.getItem('userSession')!=null){
    userSessionArray = JSON.parse(localStorage.getItem('userSession'));
}

const params = new URLSearchParams(window.location.search)

const urlUserName = params.get('name');

document.getElementById('username').innerHTML = 'Hello! ' + urlUserName; 

for(var i=0;i<userData.length;i++){
    if(userData[i].userName === urlUserName){
        let dt = new Date(userData[i].userDOB);
        let dobDay = dt.getDate();
        let dobMon = dt.getMonth();
        let d = new Date();
        let currentDay = d.getDate();
        let currentMon = d.getMonth();
        if(currentDay === dobDay && currentMon === dobMon){
            document.getElementById('bdayImage').style.display = "block";
        }
    }
}

var sessionObj = {};

function logout(){
        var sessionData = JSON.parse(localStorage.getItem('userSession'));
        //console.log(sessionData);
        for(var i=0;i< sessionData.length;i++){
            if(sessionData[i].userName === urlUserName)
            {
                var currentdate = new Date();
                var datetime = currentdate.getDate() + "/" + (currentdate.getMonth()+1) 
                + "/" + currentdate.getFullYear() + " " 
                + currentdate.getHours() + ":" 
                + currentdate.getMinutes() + ":" + currentdate.getSeconds();
                sessionData[i].logoutTime = currentdate;
                var loginTime = sessionData[i].loginTime;

                if(localStorage.getItem('userSession')){
                    userSessionArray[i].logoutTime = datetime;
                    localStorage.setItem('userSession',JSON.stringify(userSessionArray));
                }
                
            }
            
        } 
        location.href = "./login.html";  
}
