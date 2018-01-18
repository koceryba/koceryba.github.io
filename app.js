
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




            // for ( var i = 0; i < arrTrue.length; i++ ) {
            //     console.log(i)
            //     if ( arrTrue[i] % 2 == 0) {
            //         res = -1;
            //     } else {
            //         res = true;
            //         break
            //     }
            // }

            // function gcd(n, m) {
            //     if(m > 0) { 
            //         var k = n%m;
            //         return gcd(m, k); 
            //     } 
            //     else { 
            //         return Math.abs(n);  
            //     }
            // }

            // for ( var j = 0; j < arrTrue.length-1       ; j++ ) {
            //     arrStep.push(gcd(arrTrue[j], arrTrue[j+1]))
            // }

            // console.log(gcd(347, 5884))
            // console.log(gcd(5884, 833))
