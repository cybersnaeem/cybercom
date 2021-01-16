function getJob(job) {
    if (job === 'teacher') {
        return function(name) {
            console.log('what subjects you know ?? . ' + name);
        }
    } else if (job === 'coder') {
        return function(name) {
            console.log('do you know programming..?.. ' + name);
        }
    } else {
        return function(name) {
            console.log('what you done before.. ' + name);
        }
    }
}

var ingterviewJob = getJob('teacher');

ingterviewJob('naeem Valiyani');

getJob('coder')('mukesh prajapati');