function addChar(str) {
    const lowVowels = 'аеёиоуыэюя';
    const upVowels = 'АЕЁИОУЫЭЮЯ';
    let vowelNums = 0;
    let vowels = [];
    for (let i = 0; i < str.length; i++) {
        let char = str[i];
        if (lowVowels.includes(char)) {
            vowels.push(char)
            vowelNums = vowelNums + 1;
        } else {
            if (upVowels.includes(char)) {
                vowels.push(char)
                vowelNums = vowelNums + 1;
            }
        }
    }
    if (vowels.length == 0) {
        console.log('Гласных нет')
    } else {
        console.log(vowelNums + ' (' + vowels.join(', ') + ')');
    }    
}

function countVowels(str) {
    if (typeof str == 'string') {
        if (str == '') {
            console.log('Ошибка: строка пустая');
        } else {
            addChar(str)
        }  
    } else {
        console.log('Ошибка ввода: неправильный формат')
    }  
}