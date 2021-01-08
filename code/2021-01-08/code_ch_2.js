//define variables which contains the scores 
var johnTeamScore = 88+120+103;
var mikeTeamScore = 89+120+103;
var maryTeamScore = 88+120+103;
//97+134+105
//average score of john
var avgJohn = johnTeamScore/3;
console.log('Average Score Of John : '+avgJohn);

//average score of mike
var avgMike = mikeTeamScore/3;
console.log('Average Score Of Mike : '+avgMike);


//average score of Mary
var avgMary = maryTeamScore/3;
console.log('Average Score Of John : '+avgMary);

//check that the score of both player is same or not
if(avgJohn != avgMike){
    //if the score of player is not same then compare avegare score..

    if(avgJohn != avgMary){

        if(avgMike != avgMary){
            if(avgJohn > avgMike && avgJohn > avgMary){
                //john wins
                console.log('John\'s team win with '+ avgJohn +' score');
            }
            else if(avgMike > avgJohn && avgMike > avgMary){
                //mike wins
                console.log('Mark\'s team win with '+ avgMike +' score');
            }
            else{
                //mary wins
                console.log('Mary\'s team win with '+ avgMary +' score');
            }
        }
        else{
            //when the average score of mike and mary are same
            console.log('!!!!....Match Draw Between Mike And Mary....!!!!');
        }
    }
    else{
        //when the average score of john and mary are same
        console.log('!!!!....Match Draw Between John And Mary....!!!!');
    }

    
}
//when the average score of john and mike are same
else{
    
    console.log('!!!!....Match Draw Between John And Mike....!!!!');
}