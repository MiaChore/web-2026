function uniqueElements(array) {
    let result = {}
    if (typeof array == 'object') {
        for (let i = 0; i < array.length; i++) {
            let element = String(array[i])
            if (result[element] == undefined) {
                result[element] = 1
            } else {
                result[element] = result[element] + 1
            }
        }
        console.log(result) 
    } else {
        console.log('Ошибка: неправильный формат')
    }
}