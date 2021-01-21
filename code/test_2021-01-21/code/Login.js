//check if admin data available or not if availabe then register button will disabled....
if(localStorage.getItem('adminData')){
    document.getElementById('register').disabled = true;
}

function login(){
    
    var AdminEmail = document.getElementById('email').value;
    var AdminPass = document.getElementById('password').value;

    var data = JSON.parse(localStorage.getItem('adminData'));

    if(AdminEmail === data[0].email && AdminPass === data[0].password){
        window.location.href = "http://127.0.0.1:5500/user.html";
    }else{
        document.getElementById('errorDiv').style.display = 'block';
    }

}
