const filterButton = document.querySelectorAll(".container-categories button")
const slideCategoriesCard = document.querySelectorAll(".slide-categories-card .categories-card")


const filterCards = e => {
    document.querySelector(".active").classList.remove("active")
    e.target.classList.add("active")

    slideCategoriesCard.forEach(categoriesCard => {

        categoriesCard.classList.add("hide")

        if(categoriesCard.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
        categoriesCard.classList.remove("hide")

        }
    })
}
filterButton.forEach(button => button.addEventListener('click', filterCards))

