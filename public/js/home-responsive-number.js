let valueDisplays = document.querySelectorAll('.num')
let interval = 50000


// console.log(valueDisplay);

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0
    let endValue = parseInt(valueDisplay.getAttribute('data-vla'))
    // console.log(endValue);
    let duration = Math.floor(interval / endValue)
    let counter = setInterval(function () {
        startValue += 50
        valueDisplay.textContent = startValue
        if (startValue == endValue) {
            clearInterval(counter)
        }

    }, duration)
})