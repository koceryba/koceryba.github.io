
/*
Если в gcd есть 1, кол-во шагов равно, величине массива.
Если мы можем привести gcd к 1, кол-во шагов равно, величина массива + кол-во шагов к gcd = 1. 
Если все элементы массива кратны 2, нельзя.
Если все gcd кратны одному числу (>1) нельзя.
Задачу не дописывал, не уверен в логике.
*/

var arr = '2,4,3,6,7'
var res;
var arrTrue = arr.split(',');
var arrStep = [];

console.log(arrTrue)

for ( var i = 0; i < arrTrue.length; i++ ) {
    console.log(i)
    if ( arrTrue[i] % 2 == 0) {
        res = -1;
    } else {
        res = true;
        break
    }
}

function gcd(n, m) {
    if(m > 0) { 
        var k = n%m;
        return gcd(m, k); 
    } 
    else { 
        return Math.abs(n);  
    }
}

for ( var j = 0; j < arrTrue.length-1       ; j++ ) {
    arrStep.push(gcd(arrTrue[j], arrTrue[j+1]))
}
