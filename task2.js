
var people = '1,1,3,0,0,0,2,1,0,3'
var res = 0;
var peopleArr = people.split(',');

var allPeople = 1;

for ( var i = peopleArr.length-2; i >= 0; i-- ) {
    while ( peopleArr[i] > 0 ) {
        delete peopleArr[ i + Number(peopleArr[i])];
        peopleArr[i]--;
    };
}

for ( var a = 0; a < peopleArr.length; a++ ) {
    if ( peopleArr[a] !== undefined ) {
        res++;
    }
}

console.log(res);

