function errorCheck(obj1, obj2) {
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
        console.log('Ошибка: Второй объект обладает неправильным форматом')
        objError = true
    } else {
        if (Object.keys(obj2) == 0) {
            console.log('Ошибка: Второй объект пуст')
            objError = true
        }
    }
    return objError  
}

function mergeObjects(obj1, obj2) {
    let result = {}
    let element = ''
    let objError = errorCheck(obj1, obj2)
    if (objError == false) {
        console.log(Object.assign(obj1, obj2))
    }    
}