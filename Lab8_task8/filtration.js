function changeNums(numbers, change, filt) {
    const updElements = numbers
        .map(change)
        .filter(filt)
    console.log(updElements)      
}
    


function filtration(numbers, change, filt) {
    if (Array.isArray(numbers)) {
        if (numbers.length) {
            changeNums(numbers, change, filt)
        } else {
            console.error('Массив пустой')
        }
    } else { 
        console.error('Неправильный формат')
    }
}