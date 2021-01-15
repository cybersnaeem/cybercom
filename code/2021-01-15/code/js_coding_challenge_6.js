function getFibo() {
    //convert the text value in number
    const number = parseInt(document.getElementById('num').value);
    var n1 = 0, //initialize value with (0,1);
        n2 = 1,
        nextVal;

    console.log('Fibonacci Series:');

    for (var i = 1; i <= number; i++) {
        console.log(n1);
        nextVal = n1 + n2; //add each value like 0 , 1 , 0+1 , 1+1 , 1+2
        n1 = n2;
        n2 = nextVal;
    }
}