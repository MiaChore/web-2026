function mapObject(obj, callback) {
    let updElements = {}
    if (typeof obj == 'object') {
        if (obj.length !== 0) {
            Object.keys(obj).forEach(key => {
                updElements[key] = callback(obj[key], key);
            });
            console.log(updElements)
        } else {
            console.log('Ошибка: Множество пустое')
        }
    } else {
        console.log('Ошибка: Неправильный формат')
    }
}