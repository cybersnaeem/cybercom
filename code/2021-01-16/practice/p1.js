const years = [18, 20, 67, 16, 60];

function calculateCount(arr, fn) {
    var arrayCount = [];
    for (var i = 0; i < arr.length; i++) {
        arrayCount.push(fn(arr[i]));
    }
    console.log(arrayCount);
}

function calculateYears(ele) {
    return ele - 18;
}


calculateCount(years, calculateYears)