var linkPopup = document.getElementById('linkPopup')
var box = document.getElementById('temp')

box.addEventListener("mouseover", function () {
    linkPopup.classList.add('slideUp')
})

box.addEventListener("mouseout", function () {
    linkPopup.classList.remove('slideUp')
})


