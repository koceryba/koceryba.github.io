
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

           
