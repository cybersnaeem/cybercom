var b1, b2, b3; //declare three variables which stores the value of textbox mention below..
var array_discount = []; // this array will store all the discount amount..
var array_total = []; // this array will store total amount after adding discount price in it..

document.querySelector('#content').style.display = 'none'; // i have design the bootstrap in first page load 
//it will be hidden from user 

//on button click event user can find the bill price and discounts
function countTip() {

    b1 = Number(document.getElementById('bill_1').value); //bill of 1st restaurant
    b2 = Number(document.getElementById('bill_2').value); //bill of 2nd restaurant
    b3 = Number(document.getElementById('bill_3').value); //bill of 3rd restaurant


    // check if bill amount is greater in 3 restaurent
    if (b1 >= 50 || b2 >= 50 || b3 >= 50) {
        var discount = 20 / 100; //store discount value
        var totalDiscount1 = Math.floor(b1 * discount); // store total discount amount
        var bill1 = Math.floor(b1 + (b1 * discount)); // add discount amount in actual amount
        var totalDiscount2 = Math.floor(b2 * discount);
        var bill2 = Math.floor(b2 + (b2 * discount));
        var totalDiscount3 = Math.floor(b3 * discount);
        var bill3 = Math.floor(b3 + (b3 * discount));
        array_discount.push(totalDiscount1, totalDiscount2, totalDiscount3); // push the total  discount amounts in array
        array_total.push(bill1, bill2, bill3); // push the total amount in total bill array

        //display the discount amount on webpage
        document.getElementById('dis_am1').innerHTML = array_discount[0];
        document.getElementById('dis_am2').innerHTML = array_discount[1];
        document.getElementById('dis_am3').innerHTML = array_discount[2];

        //display the total amount on webpage
        document.getElementById('total_am1').innerHTML = array_total[0];
        document.getElementById('total_am2').innerHTML = array_total[1];
        document.getElementById('total_am3').innerHTML = array_total[2];


        //display your result in a card design
        document.querySelector('#content').style.display = 'block';


    }
    // check if bill amount is greater  then 50 and less than 200 in 3 restaurent
    if (b1 <= 50 && b1 >= 200 || b2 <= 50 && b2 >= 200 || b3 <= 50 && b3 >= 200) {
        var discount = 15 / 100; //store discount value
        var totalDiscount1 = Math.floor(b1 * discount); // store total discount amount
        var bill1 = Math.floor(b1 + (b1 * discount)); // add discount amount in actual amount
        var totalDiscount2 = Math.floor(b2 * discount);
        var bill2 = Math.floor(b2 + (b2 * discount));
        var totalDiscount3 = Math.floor(b3 * discount);
        var bill3 = Math.floor(b3 + (b3 * discount));
        array_discount.push(totalDiscount1, totalDiscount2, totalDiscount3); // push the total  discount amounts in array
        array_total.push(bill1, bill2, bill3); // push the total amount in total bill array

        //display the discount amount on webpage
        document.getElementById('dis_am1').innerHTML = array_discount[0];
        document.getElementById('dis_am2').innerHTML = array_discount[1];
        document.getElementById('dis_am3').innerHTML = array_discount[2];

        //display the total amount on webpage
        document.getElementById('total_am1').innerHTML = array_total[0];
        document.getElementById('total_am2').innerHTML = array_total[1];
        document.getElementById('total_am3').innerHTML = array_total[2];

        //display your result in a card design
        document.querySelector('#content').style.display = 'block';
    }
    // check if bill amount is greater  200 in 3 restaurent
    if (b1 >= 50 || b2 >= 200 || b3 >= 200) {
        var discount = 10 / 100; //store discount value
        var totalDiscount1 = Math.floor(b1 * discount); // store total discount amount
        var bill1 = Math.floor(b1 + (b1 * discount)); // add discount amount in actual amount
        var totalDiscount2 = Math.floor(b2 * discount);
        var bill2 = Math.floor(b2 + (b2 * discount));
        var totalDiscount3 = Math.floor(b3 * discount);
        var bill3 = Math.floor(b3 + (b3 * discount));
        array_discount.push(totalDiscount1, totalDiscount2, totalDiscount3); // push the total  discount amounts in array
        array_total.push(bill1, bill2, bill3); // push the total amount in total bill array

        //display the discount amount on webpage
        document.getElementById('dis_am1').innerHTML = array_discount[0];
        document.getElementById('dis_am2').innerHTML = array_discount[1];
        document.getElementById('dis_am3').innerHTML = array_discount[2];

        //display the total amount on webpage
        document.getElementById('total_am1').innerHTML = array_total[0];
        document.getElementById('total_am2').innerHTML = array_total[1];
        document.getElementById('total_am3').innerHTML = array_total[2];

        //display your result in a card design
        document.querySelector('#content').style.display = 'block';
    }
}
/*
:john and his family:
    
3 restaurants

bills : 124  48    268  

    if bill <= 50  20% tip
    if bill <= 50 and bill>=200   15% tip 
    if bill <= 200   10% tip

    2 arrays at the end :

    array 1 = tip amount 

    array 2 = final paid amount  (bill + tip) 

    eg. 20 % is given then 20/100 = 0.2

*/