var checkLoginData = JSON.parse(localStorage.getItem('adminData'));

if(checkLoginData[0].isLoggedin === 0){
    window.location.href = "./Error.html";
}


var userDataArray = [];
var userObj = {};
displayUser();

if(localStorage.getItem('userData')!=null){
    userDataArray = JSON.parse(localStorage.getItem('userData'));
}

var adminData = JSON.parse(localStorage.getItem('adminData'));
    document.getElementById('username').innerHTML = `hello! `+adminData[0].adminName;

function setEmptyFields(){
    document.getElementById('name').value = ""; 
    document.getElementById('email').value = "";
    document.getElementById('password').value = "";
    document.getElementById('dob').value = "";
}

function displayUser(){
    
    if(JSON.parse(localStorage.getItem('userData')!=null)){
            
        var userData = JSON.parse(localStorage.getItem('userData'));    
        var html =  `<table class="table table-responsive">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>Date Of Birth</th>
                        <th>Age</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>`
            for(let [index,val] of userData.entries()){       
            html+=  `<tr>
                        <td scope="row">${val.userName}</td>
                        <td>${val.userEmail}</td>
                        <td>${val.userPass}</td>
                        <td>${val.userDOB}</td>
                        <td>${val.userAge}</td>
                        <td><button type="button" onclick="updateUser('${index}')" class="btn btn-link"> Update </button></td>
                        <td><button type="button" onclick="deleteUser('${index}')" class="btn btn-link"> Delete </button></td>
                    </tr>`
            }
        html+=  `</tbody>
            </table>`

            document.getElementById('resultUser').innerHTML = html;
}
else{
    document.getElementById('resultUser').innerHTML = "<h2>There is No User Found!</h2><br><h4>You Have To Add Manually..</h4>";
}
}

function deleteUser(key){
    var userData = JSON.parse(localStorage.getItem('userData'));
    userData.splice(key,1);
    localStorage.setItem('userData',JSON.stringify(userData));
    displayUser();
}

function updateUser(key){
    var userData = JSON.parse(localStorage.getItem('userData'));
    document.getElementById('access_id').value = key;
    document.getElementById('name').value = userData[key].userName;
    document.getElementById('email').value = userData[key].userEmail;
    document.getElementById('password').value = userData[key].userPass;
    document.getElementById('dob').value = userData[key].userDOB;

    document.getElementById('addUserBtn').style.display = "none";
    document.getElementById('updateUserBtn').style.display = "block";
}

function updateUserData(){
    var userData = JSON.parse(localStorage.getItem('userData'));
    var key = document.getElementById('access_id').value
    userData[key].userName = document.getElementById('name').value ;
    userData[key].userEmail = document.getElementById('email').value  ;
    userData[key].userPass = document.getElementById('password').value  ;
    userData[key].userDOB = document.getElementById('dob').value ;
    let currentYear = new Date();
    let dateOfBirthGiven = new Date(userData[key].userDOB);
    userData[key].userAge = currentYear.getFullYear() - dateOfBirthGiven.getFullYear();
    localStorage.setItem('userData',JSON.stringify(userData));
    displayUser();
}

function addUser(){
    var userName = document.getElementById('name').value;
    var userEmail = document.getElementById('email').value;
    var userPass = document.getElementById('password').value;
    var userDOB = document.getElementById('dob').value;
    var currentDate = new Date();
    var dobDateYear = new Date(userDOB);

    if(userName != "" && userEmail != "" && userPass !="" && userDOB != ""){
        userObj = {
            userName: userName,
            userEmail :userEmail,
            userPass :userPass,
            userDOB :userDOB,
            userAge :  currentDate.getFullYear() - dobDateYear.getFullYear()
        }
        //console.log(userObj);   
        
        if(localStorage.getItem('userData')){
            userDataArray.push(userObj);
            localStorage.setItem('userData',JSON.stringify(userDataArray));
            setEmptyFields();
            displayUser();
        }
        else{
            userDataArray.push(userObj);
            localStorage.setItem('userData',JSON.stringify(userDataArray));
            setEmptyFields();
            displayUser();
        }
        document.getElementById('errorDiv').style.display = "none";
    }
    else{
            console.log('eror');
            document.getElementById('errorDiv').style.display = "block";
            document.getElementById('errtext').innerHTML = "All Fields Must Required.."; 
    }
}

function logout(){
    var adminData = JSON.parse(localStorage.getItem('adminData'));
    adminData[0].isLoggedin = 0;
    localStorage.setItem('adminData',JSON.stringify(adminData));
    window.location.href = "./login.html";
}