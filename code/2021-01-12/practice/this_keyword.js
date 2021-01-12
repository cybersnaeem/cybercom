var naeem = {
    name: 'naeem',
    BirthYear: 1998,
    calculateAge: function() {
        console.log(this);
        console.log(2021 - this.BirthYear);
    }
}
naeem.calculateAge();

var dishant = {
    name: 'dishant',
    BirthYear: 1992,
}

dishant.calculateAge = naeem.calculateAge;
dishant.calculateAge();

var pratik = {
    name: 'pratik',
    BirthYear: 1985,
}

pratik.calculateAge = naeem.calculateAge;
pratik.calculateAge();