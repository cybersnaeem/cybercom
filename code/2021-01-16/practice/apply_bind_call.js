var naeemObj = {
    name: 'naeem',
    age: 22,
    job: 'Frontend Developer',
    introduction: function(style, present) {
        if (style === 'formal') {
            console.log('hello Everyone !!!.. ' + present +
                'I am ' + this.name + ' i am ' + this.age +
                ' Years Old and i\'m ' + this.job);
        } else if (style === 'cool') {
            console.log('hey Guys !!!.. ' + present +
                'I am ' + this.name + ' i am ' + this.age +
                ' Years Old and i\'m ' + this.job);
        }
    }
}

naeemObj.introduction('cool', 'good Miorning');

pratikObj = {
    name: 'pratik',
    age: 27,
    job: 'Backend DEveloper'
}

naeemObj.introduction.call(pratikObj, 'formal', 'good Evening')