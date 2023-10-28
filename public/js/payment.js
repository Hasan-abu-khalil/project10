const personal_btn = document.querySelector('.personal_btn')
const payment_btn = document.querySelector('.payment_btn')
const welcome = document.querySelector('.welcome')
const payment = document.querySelector('.payment')
const personal = document.querySelector('.personal')

personal_btn.addEventListener('click', () => {
    personal.classList.add('active')
    welcome.classList.add('active')
    personal_btn.classList.add('active')
    payment_btn.classList.add('active')
    payment.classList.add('active')
})

payment_btn.addEventListener('click', () => {
    personal.classList.remove('active')
    welcome.classList.remove('active')
    personal_btn.classList.remove('active')
    payment_btn.classList.remove('active')
    payment.classList.remove('active')
})






