function checkForArray(n) {
    n.forEach(element => {
        let isPrime
        if (typeof element == 'number') {
            if (element > 1) {
                isPrime = true
                for (let j = 2; j < element; j++) {
                    if (element % j == 0) {
                        isPrime = false
                        break
                    }
                }
                if (isPrime) {
                    console.log('Результат ', element, ' простое число')
                } else {
                    console.log('Результат ', element, ' не простое число')
                }
            } else {
                console.log('Ошибка: ', element, ' не может быть простым')
            }
        } else {
            console.log('Ошибка: ', element, '- это неправильный формат')
        }       
    })
}

function checkForNumber(n) {
    let isPrime
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
}

function isPrimeNumber(n) {
    if (typeof n == 'object') {
        checkForArray(n)
    } else {
        if (typeof n == 'number') {
            checkForNumber(n)
        } else {
            console.log('Ошибка: ', n, '- это неправильный формат')
        }
    }
}
