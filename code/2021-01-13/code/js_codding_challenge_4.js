// creating an object which store the info. like fullname, mass and height(FOR JOHN)
var johnObj = {
    fullName: 'john smith',
    mass: 65,
    height: 1.67,
    findBMI: function() { //method which returns the name and BMI of that person 
        console.log('BMI of ' + this.fullName + ' : ' + this.mass / (this.height * this.height));
        // here this keyword represent the current referred object
    }
}


// method call which display the BMI information of John Smith
johnObj.findBMI();

// creating an object which store the info. like fullname, mass and height(FOR JOHN)
var markObj = {
    fullName: 'mark smith',
    mass: 70,
    height: 1.98
        //instead of defining method we initialize mark's method with john's method
}

//initialize the method
markObj.findBMI = johnObj.findBMI;

// method call which display the BMI information of Mark Smith
markObj.findBMI();


// compare whose BMi is greater based on this condition
if (johnObj.findBMI > markObj.findBMI) {
    //true
    console.log(johnObj.fullName + '\'s BMI is Higher Than ' + markObj.fullName);
} else {
    //false
    console.log(markObj.fullName + ' \'s BMI is Higher Than ' + johnObj.fullName);
}