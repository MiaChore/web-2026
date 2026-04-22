function mergeObjects(obj1, obj2) {
    let result = {}
    let element = ''
    let objError = false
    if (typeof obj1 !== 'object') {
        console.log('Ошибка: Первый объект обладает неправильным форматом')
        objError = true
    } else { 
        if (Object.keys(obj1) == 0) {
            console.log('Ошибка: Первый объект пуст')
            objError = true
        }
    }
    if (typeof obj2 !== 'object') {
        console.log('Ошибка: Первый объект обладает неправильным форматом')
        objError = true
    } else {
        if (Object.keys(obj2) == 0) {
            console.log('Ошибка: Второй объект пуст')
            objError = true
        }
    }  
    if (objError == false) {
        for (element in obj1) {
            result[element] = obj1[element]
        }
        for (element in obj2) {
            result[element] = obj2[element]
        }
        console.log(result)
    }    
}