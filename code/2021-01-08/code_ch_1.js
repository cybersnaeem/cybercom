

var markMass = 67;
var markHeight = 70/100; //convert height in meter
var johnMass = 70;
var johnHeight = 68/100; //convert height in meter

//find the BMI using formula 
var markBmi = markMass / (markHeight * markHeight);
console.log("BMI of Mark : "+markBmi)
var johnBmi = johnMass / (johnHeight * johnHeight);
console.log("BMI of John : "+johnBmi)

//check whether the bmi of john or bmi of mark is greater
var isHigherBMI = markBmi > johnBmi ? true : false ;

//display wheter which person has greater BMI
console.log("Is Mark's BMI higher than John's ? "+isHigherBMI );

