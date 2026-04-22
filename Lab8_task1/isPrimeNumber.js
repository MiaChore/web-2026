function isPrimeNumber(n) {
    let isPrime
    if (typeof n == 'object') {
        for (let i = 0; i < n.length; i++) {
            if (typeof n[i] == 'number') {
                if (n[i] > 2) {
                    isPrime = true
                    for (let j = 2; j < n[i]; j++) {
                        if (n[i] % j == 0) {
                            isPrime = false
                            break
                        }
                    }
                    if (isPrime) {
                        console.log('Результат ', n[i], ' простое число')
                    } else {
                        console.log('Результат ', n[i], ' не простое число')
                    }
                } else {
                    console.log('Ошибка: ', n[i], ' не может быть простым')
                }
            } else {
                console.log('Ошибка: ', n[i], '- это неправильный формат')
            }       
        } 
    } else {
        if (typeof n == 'number') {
            if (n > 1) {
                isPrime = true
                for (let j = 2; j < n; j++) {
                    if (n % j == 0) {
                        isPrime = false
                        break
                    }
                }
                if (isPrime) {
                    console.log('Результат ', n, ' простое число')
                } else {
                    console.log('Результат ', n, ' не простое число')
                }
            } else {
                console.log('Ошибка: ', n, ' не может быть простым')
            }
        } else {
            console.log('Ошибка: ', n, '- это неправильный формат')
        }
    }
}
