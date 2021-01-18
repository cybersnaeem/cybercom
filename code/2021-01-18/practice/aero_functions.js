let years = [1998 , 1956 ,1990 , 1993];

//working with single argument
var birthData = years.map(el => 2021-el);

console.log(birthData);

//working with multiple argument 
years = years.map((el,index) => `${index+1} : ${2021-el}`);
console.log(years);

/*
let box1  = {
    color: 'green',
    position: 1,
    clickMe : function (){
        var mine = this;
        document.querySelector('.down').addEventListener('click',function(){
            alert(`clicked on postion ${mine.position} which is ${mine.color}`);
        })
    }
}

box1.clickMe();
 box1  = {
    color: 'green',
    position: 1,
    clickMe :  function() {
        
        document.querySelector('.down').addEventListener('click',() => {
            alert(`clicked on postion ${this.position} which is ${this.color}`);
        })
    }
}

box1.clickMe();

*/
/*
function Person (name){
    this.name = name;
}

Person.prototype.myFriends = function(friends){
    var newArr = friends.map(el => 
        `${this.name} is friend of ${el}.`
        ); 
        console.log(newArr);
}

var names = ['dishant','pritesh','mahesh']

new Person('Naeem').myFriends(names);
*/
