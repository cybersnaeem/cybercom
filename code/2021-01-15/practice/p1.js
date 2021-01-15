var Person = function(name, salary, age) {
    this.name = name;
    this.salary = salary;
    this.age = age;
}

Person.prototype.calculateAge = () => {
    var dt = new Date;
    console.log(Number(dt.getFullYear()) - this.age);
}

var naeem = new Person('naeem', 12000, 1999);
naeem.calculateAge();

var shubham = new Person('shubham', 18000, 1992);
shubham.calculateAge();