var userArrayData = [];
var userFormData = {};
 
    if(localStorage.getItem('userData')){
        userArrayData = JSON.parse(localStorage.getItem('userData'));
    }
//////////////////////////////////////////add user start-/////////////////////////
 function addUser(){
     
     var name = document.getElementById('name').value;
     var email = document.getElementById('email').value;
     var password = document.getElementById('password').value;
     var dateOfBirth =  document.getElementById('dob').value;
     
    userFormData = {
       name:name,
       email:email,
       password:password,
       dateOfBirth:dateOfBirth
     };
     console.log(userFormData);
        
     if(localStorage.getItem('userData')){
        userArrayData.push(userFormData); 
        localStorage.setItem('userData',JSON.stringify(userArrayData));
       
     }else{
        userArrayData.push(userFormData); 
        localStorage.setItem('userData',JSON.stringify(userArrayData));
     } 
 }
 //////////////////////////////////////////end user data -/////////////////////////


 //////////////////////////////////////////table data display start-/////////////////////////

function getAge(date){
    var d = new Date(date)
    var dt = new Date();    
    return dt.getFullYear() - d.getFullYear();
}
 
 var userData = JSON.parse(localStorage.getItem('userData'));
 
var userTableData = `<table class="table table-bordered table-light" id="tableData">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Birthdate</th>
                  <th scope="col">Age</th>
                  <th scope="col" colspan="2">Actions</th>
                </tr>
              </thead>
              <tbody>`
               for(var i=0; i<userData.length ; i++){
                 userTableData+= `<tr>
                                <th scope="row">${userData[i].name}</th>
                                <td>${userData[i].email}</td>
                                <td>${userData[i].password}</td>
                                <td>${userData[i].dateOfBirth}</td>
                                <td>
                                   ${getAge(userData[i].dateOfBirth)}
                                </td>
                                <td>
                                    <button type="button" onclick="updateUser('${userData[i].name}','${userData[i].email}','${userData[i].password}','${userData[i].dateOfBirth}')" class="btn btn-link"> Update </button>
                                </td>
                                <td>
                                <button type="button" onclick="deleteUser('${userData[i].name}')" class="btn btn-link"> Delete </button>
                                </td>
                            </tr>`   
               }
              
userTableData += `</tbody></table>`;

document.getElementById('resultUser').innerHTML = userTableData ;
//////////////////////////////////////////table data display finish-/////////////////////////


function deleteUser(uname)
{   
    console.log(uname);
    for(var i=0;i<userData.length;i++){
        console.log(userData[i].uname)
    }
    //console.log(JSON.parse(localStorage.getItem('userData')));
   
    
   

}

function updateUser(name,email,pass,dob){
    
    document.getElementById('name').value= name;
    document.getElementById('email').value= email;
    document.getElementById('password').value= pass;
    document.getElementById('dob').value= dob;
    document.getElementById('addUser').innerHTML = 'Update User';
    document.getElementById('addUser').setAttribute('id','updateUser'); 
    
    if(document.getElementById('updateUser').innerHTML === 'updateUser')  
    {
        document.getElementById('updateUser').addEventListener('click',
        function updateData(){
             for(var i=0;i<userData.length;i++){
                 if(userData[i].name === name){
                     userData[i].email = email;
                     userData[i].password = pass;
                     userData[i].dateOfBirth = dob;
                     console.log('success'); 
                 }
             }
          }
        )
    }
   
   }

    
    //console.log(name,email,pass,dob);
 


