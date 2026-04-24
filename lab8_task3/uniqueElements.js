function uniqueElements(array) {
    let result = {}
    if (typeof array == 'object') {
        array.forEach(i => {
            let element = String(i)
            if (result[element] == undefined) {
                result[element] = 1
            } else {
                result[element] = result[element] + 1
            }
        })
        console.log(result) 
    } else {
        console.log('Ошибка: неправильный формат')
    }
}