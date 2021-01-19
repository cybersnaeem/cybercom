
const first = [1,2,3];
const second = [4,5,6];

const add = first.concat(second);
console.log(add);

const con = [...first ,...second];
console.log(con);


//object destructuring
/*
const address = {
    city:'vapi',
    street:'valsad',
    name:'naeem'
}
console.log({city,name,street} = address);

*/

/*
//map method
const colors = ['orange','yellow','green']

const colorData = colors.map(color => `${color}`);
console.log(colorData);
*/

/*
//array with this
const Person = {
    talk:function(){
        setTimeout(()=>{
            console.log(this);
        },1000)
        
    }
}
Person.talk();
*/
/*
const data  = {
    name:'naeem',
    getData(){
        console.log(this);
    }
}

data.getData();

const dataGet = data.getData;
console.log(dataGet);



const jobs = [
    { id: 1 , isActive: true },
    { id: 2 , isActive: true },
    { id: 3 , isActive: false },
    { id: 4 , isActive: true },
]

const activeJobs = jobs.filter(function(jobs) {
    return jobs.isActive;
})


const activeJobs = jobs.filter(jobs => jobs.isActive);
console.log(activeJobs)
*/