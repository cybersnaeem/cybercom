
var johnTeamScore = 88+120+103;
var mikeTeamScore = 77+120+103;
var maryTeamScore = 97+134+105;
//
//average score of john
var avgJohn = johnTeamScore/3;
console.log('Average Score Of John : '+avgJohn);

//average score of mike
var avgMike = mikeTeamScore/3;
console.log('Average Score Of Mike : '+avgMike);


//average score of mary
var avgMary = maryTeamScore/3;
console.log('Average Score Of John : '+avgMary);

if(avgJohn != avgMike){
    if(avgJohn > avgMike ){
        console.log('John\'s team win with '+ avgJohn +' score in front of Mike');
    } 
    else{
        console.log('Mike\'s team win with '+ avgMike +' score in front of John');
    }
    
}
else{
    
    console.log('!!!!....Match Draw Between John And Mike....!!!!');
}
//john and mary
if(avgJohn != avgMary){
        if(avgJohn > avgMary){
            console.log('John\'s team win with '+ avgJohn +' score in front of Mary');
        }
        else{
            console.log('Mary\'s team win with '+ avgMary +' score in front of John');
        }
}
else{
    console.log('!!!!....Match Draw Between John And Mary....!!!!');
}

// mike and mary
if(avgMike != avgMary){
        if( avgMike  > avgMary){
            
            console.log('Mike\'s team win with '+ avgMike +' score in front of Mary');
        }
        else{
            console.log('Mary\'s team win with '+ avgMary +' score in front of Mike');
        }
}
else{
    console.log('!!!!....Match Draw Between Mike And Mary....!!!!');
}