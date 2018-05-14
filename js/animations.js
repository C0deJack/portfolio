displayLinkPopup()
smoothScroll()
hiddenConsoleLogMessage()

function displayLinkPopup() {
    let projectHolder = Array.from(document.getElementsByClassName('projectHolder'))
    projectHolder.forEach(function (element) {
        element.addEventListener("mouseover", function () {
            element.children[0].children[1].classList.add('slideUp')
        })
        element.addEventListener("mouseout", function () {
            element.children[0].children[1].classList.remove('slideUp')
        })
    })
}

function smoothScroll() {
    let atagArray = document.querySelectorAll('a[href^="#"]')
        atagArray.forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
})
}

function hiddenConsoleLogMessage() {
    let log = Function.prototype.bind.call(console.log, console)
    log.apply(console, ["If you like my code. Please get in contact " +
    "to discuss your next project: jackwoodpearce@gmail.com "])
}