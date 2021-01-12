var naeemObj = {
    firstName: 'naeem',
    lastName: 'valiyani',
    job: 'programmer',
    salary: 22000,
    isMarried: false,
    hobby: ['cricket', 'programming', 'pubg']
};

console.log(naeemObj.lastName);
console.log(naeemObj['hobby'][1])

var myobj = new Object();

myobj.firstName = 'Dishant';
myobj.lastName = 'Navadiya';
myobj.isMarried = true

console.log(myobj);

//looping

var myArr = ['naeem', 'dishant', 'rajesh', 'piyush', 177, 188, 'jk'];

for (var i = 0; i <= myArr.length; i++) {
    if (typeof(myArr[i]) !== 'string') {
        continue;
    } else {
        console.log(myArr[i]);
    }
}