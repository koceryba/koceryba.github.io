
// если величина всех банок одинакова, то в последнем примере ошибка

var kola = '2,0,1'
var botle = '4,3,7'
var res;
var kolaArr = kola.split(',');
var botleArr = botle.split(',');

var allKola = [];

for ( var i = 0; i < kolaArr.length; i++ ) {
    allKola.push(kolaArr[i]/botleArr[i]);
}

var sum = 0;
for(var i = 0; i < allKola.length; i++){
    sum += allKola[i];
}

if ( sum <= 2 ) {
    console.log('YES');
} else {
    console.log('NO');
}
