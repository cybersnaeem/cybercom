var person = [
    {
        name:'naeem',
        age:25,
        email:'naeem@gmail.com',
        mobile:9727225801
    },
    {
        name:'prince',
        age:22,
        email:'prince@gmail.com',
        mobile:9585478388
    },
    {
        name:'dishant',
        age:34,
        email:'dishant@gmail.com',
        mobile:7895789573
    }
]


function add(){
    localStorage.setItem('personData', JSON.stringify(person));
}

var html ="<table border='1'>"
    for(let i=0;i<person.length;i++){
        html += "<tr><td>"+person[i].name+"</td><td>"+person[i].age+"</td><td>"+person[i].email+"</td><td>"+person[i].mobile+"</td></tr>";
    }
html += "</table>"
document.write(html);