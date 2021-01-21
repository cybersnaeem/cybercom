var userArrayData = [];
var userFormData = {};
 
    var AdminName = JSON.parse(localStorage.getItem('adminData'));
    document.getElementById('username').innerHTML = `hello! `+AdminName[0].name;

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

function displayTable(){
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
              
               for(let [index, val] of userData.entries()){
                 userTableData+= `<tr>
                                <th scope="row">${val.name}</th>
                                <td>${val.email}</td>
                                <td>${val.password}</td>
                                <td>${val.dateOfBirth}</td>
                                <td>
                                   ${getAge(val.dateOfBirth)}
                                </td>
                                <td>
                                    <button type="button" onclick="updateUser('${index}','${val.name}','${val.email}','${val.password}','${val.dateOfBirth}')" class="btn btn-link"> Update </button>
                                </td>
                                <td>
                                <button type="button" onclick="deleteUser('${index}')" class="btn btn-link"> Delete </button>
                                </td>
                            </tr>`   
               }
              
userTableData += `</tbody></table>`;

document.getElementById('resultUser').innerHTML = userTableData ;
}
displayTable()
 
//////////////////////////////////////////table data display finish-/////////////////////////


function deleteUser(id)
{   
    var data = JSON.parse(localStorage.getItem('userData'));
    data.splice(id, 1);
    localStorage.setItem("userData", JSON.stringify(data));
    //console.log(JSON.parse(localStorage.getItem('userData')));
    displayTable()

}

function updateUser(id,name,email,pass,dob){
    var data = JSON.parse(localStorage.getItem('userData'));
    document.getElementById('name').value= name;
    document.getElementById('email').value= email;
    document.getElementById('password').value= pass;
    document.getElementById('dob').value= dob;
    document.getElementById('addUser').innerHTML = 'Update User';
    document.getElementById('addUser').setAttribute('id','updateUser');
    console.log(document.getElementById('updateUser').id);
    if(document.getElementById('addUser').innerHTML === 'Update User'){
        document.getElementById('updateUser').addEventListener('click',function(){

        })
    }

}



    
    //console.log(name,email,pass,dob);
 


