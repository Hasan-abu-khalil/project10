function navigation() {
    let icon = document.getElementById('icon')
    let navbar = document.getElementById('navbar')
    if (icon.classList.contains('fa-bars')) {
        icon.classList.remove('fa-bars')
        icon.classList.add('fa-xmark')
        navbar.style.right = '0'
    } else {
        icon.classList.remove('fa-xmark')
        icon.classList.add('fa-bars')
        navbar.style.right = '-300px'

    }
}

document.addEventListener("DOMContentLoaded", function () {
    const decreaseButtons = document.querySelectorAll(".cart-quantity-decrease");
    const increaseButtons = document.querySelectorAll(".cart-quantity-increase");

    decreaseButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const input = button.nextElementSibling;
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
                updateTotalPrice(input);
            }
        });
    });

    increaseButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const input = button.previousElementSibling;
            const currentValue = parseInt(input.value);
            input.value = currentValue + 1;
            updateTotalPrice(input);
        });
    });

    function updateTotalPrice(input) {
        const price = parseFloat(input.closest("tr").querySelector("td:nth-child(3)").textContent.replace(
            "jd", ""));
        const quantity = parseInt(input.value);
        const totalPriceElement = input.closest("tr").querySelector("td:nth-child(5)");
        const totalPrice = price * quantity;
        totalPriceElement.textContent = `jd ${totalPrice}`;
    }
});








