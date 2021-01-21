var adminArrayData = [];
var adminFormData = {};
 
    if(localStorage.getItem('adminData')){
        adminArrayData = JSON.parse(localStorage.getItem('adminData'));
    }

 function register(){
     
     var name = document.getElementById('name').value;
     var email = document.getElementById('email').value;
     var password = document.getElementById('password').value;
     var confirmPass = document.getElementById('con-pass').value;   
     var city = document.getElementById('city').value;   
     var state = document.getElementById('state').value;   
     
    adminData = {
       name:name,
       email:email,
       password:password,
       confirm:confirmPass,
       city:city,
       state:state
     };
     console.log(adminData);
     
     if(localStorage.getItem('adminData')){
        adminArrayData.push(adminData); 
       localStorage.setItem('adminData',JSON.stringify(adminArrayData));
       
     }else{
        adminArrayData.push(adminData); 
        localStorage.setItem('adminData',JSON.stringify(adminArrayData));
     } 
 }
 