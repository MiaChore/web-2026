function randomizerPass(len) {
    const chars = {
        upperChars: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        lowerChars: 'abcdefghijklmnopqrstuvwxyz',
        numbers: '0123456789',
        specialChars: '!@#$%^&*()_+-=[]{}|;:,.<>?'
    }
    const randomChar = (str) => str[Math.floor(Math.random() * str.length)]
    const allChars = chars.upperChars + chars.lowerChars + chars.specialChars + chars.numbers
    let mustHaveSymbols = [
        randomChar(chars.upperChars),
        randomChar(chars.lowerChars),
        randomChar(chars.numbers),
        randomChar(chars.specialChars)
    ]
    for (let i = mustHaveSymbols.length; i < len; i++) {
        mustHaveSymbols.push(randomChar(allChars))
    }
    for (let i = mustHaveSymbols.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1))
        ;[mustHaveSymbols[i], mustHaveSymbols[j]] = [mustHaveSymbols[j], mustHaveSymbols[i]]
    }
    console.log(mustHaveSymbols.join(''))
}

function passwordGen(len) {
    const minLen = 4
    const maxLen = 50
    if (typeof len == 'number') {
        if (len >= minLen && len <= maxLen) {
            randomizerPass(len)
        } else {
            console.log('Ошибка: Недопустимая длинна')
        }
    } else {
        console.log('Ошибка: Неправильный формат')
    }
}