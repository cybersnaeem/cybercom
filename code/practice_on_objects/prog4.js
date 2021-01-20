
       var personData = [];
       var data = {};
        
       if(localStorage.getItem('personData')){
               personData = JSON.parse(localStorage.getItem('personData'));
        }

        function add(){
            
            var username = document.getElementById('name').value;
            var useremail = document.getElementById('email').value;
            var userdateOfBirth = document.getElementById('dateofBirth').value;

            data = {
              name:username,
              email:useremail,
              dateOfBirth:userdateOfBirth
            };
            
            if(localStorage.getItem('personData'))  
            {
              personData.push(data); 
              localStorage.setItem('personData',JSON.stringify(personData));
              
            }else{
              personData.push(data); 
              localStorage.setItem('personData',JSON.stringify(personData));
            } 
        }