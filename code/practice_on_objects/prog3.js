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

var data = person.sort((a,b)=>{
    return a.age - b.age;
})
console.log(data);
//

function bubbleSort(arr) {
    for (let i = 0; i < arr.length; i++) {
        for (let j = 0; j < arr.length - i - 1; j++) {
            if (arr[j + 1] < arr[j]) {
                // ES6 way of swapping array elements
                [arr[j + 1], arr[j]] = [arr[j], arr[j + 1]];
            }
        }
    }
    return arr;
}
console.log(bubbleSort(person));