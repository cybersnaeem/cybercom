var checkLoginData = JSON.parse(localStorage.getItem('adminData'));

if(checkLoginData[0].isLoggedin === 0){
    window.location.href = "./Error.html";
}


var adminData = JSON.parse(localStorage.getItem('adminData'));
document.getElementById('username').innerHTML = `hello! `+adminData[0].adminName;


var userSessionArray = [];
if(localStorage.getItem('userSession')!=null){
    userSessionArray = JSON.parse(localStorage.getItem('userSession'));
}
 
showSessions();

function showSessions(){
       if(JSON.parse(localStorage.getItem('userSession')!=null)){
        var sessionData = JSON.parse(localStorage.getItem('userSession'));
        var html =  `<table class="table table-responsive">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Login Time</th>
                        <th>Logout Time</th>
                    </tr>
                </thead>
                <tbody>`
            for(let [index,val] of sessionData.entries()){       
            html+=  `<tr>
                        <td scope="row">${val.userName}</td>
                        <td>${val.loginTime}</td>
                        <td>${val.logoutTime}</td>
                    </tr>`
            }
        html+=  `</tbody>
            </table>`
            document.getElementById('sessionUser').innerHTML = html;
       }
       else{
            document.getElementById('sessionUser').innerHTML = "<h4>There Is No User Login Data Till The User Login</h4>";
       }

}

function logout(){
    
        var adminData = JSON.parse(localStorage.getItem('adminData'));
        adminData[0].isLoggedin = 0;
        localStorage.setItem('adminData',JSON.stringify(adminData));
        window.location.href = "./login.html";
}