function getJob(job) {
    return function(name) {
        if (job === 'teacher') {
            console.log('Do You Know Javascript and Web Development.. Mr.' + name);
        } else if (job === 'designer') {
            console.log('Do You Know The Concept Of UI/UX Mr.' + name);
        } else {
            console.log('why You Applied.. Mr.' + name);
        }
    }
}

var getInterview = getJob('teacher');

getInterview('Rajesh Joshi');

//or

getJob('designer')('Naeem Valiyani');

getJob('coding')('Pratik');