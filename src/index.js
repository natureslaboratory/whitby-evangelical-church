
const backButtons = document.getElementsByClassName("c-back__button");
for (let i = 0; i < backButtons.length; i++) {
    const button = backButtons[i];
    button.addEventListener("click", () => {
        window.history.back();
    })
}


const isBaseLink = (href) => {
    const baseUrl = `${window.location.protocol}//${window.location.host}/`;
    if (baseUrl == href) {
        return true;
    }
    return false;

}

const navLinks = document.getElementsByClassName("c-header__link");

for (let i = 0; i < navLinks.length; i++) {
    const link = navLinks[i];
    if (window.location.href.includes(link.href) && !isBaseLink(link.href)) {
        link.style.textDecoration = "underline";
    } else if (window.location.href == link.href && isBaseLink(link.href)) {
        link.style.textDecoration = "underline";
    }
}


const closeHamburger = () => {
    const hamburgerMenu = document.getElementsByClassName("c-hamburger")[0];
    const content = document.getElementById("content");
    document.body.style.transform = "";
    document.body.style.overflowX = "hidden";
    document.body.style.overflowY = "auto";
    document.body.style.position = "relative";
    content.style.overflowX = "hidden";
    content.style.overflowY = "auto";
    setTimeout(() => {
        hamburgerMenu.style.display = "none";
    }, 300)
}

const hamburgerButton = document.getElementsByClassName("c-header__hamburger-button")[0];
const hamburgerClose = document.getElementsByClassName("c-cross")[0];

const openHamburger = () => {
    const hamburgerMenu = document.getElementsByClassName("c-hamburger")[0];
    const content = document.getElementById("content");
    hamburgerMenu.style.display = "flex";
    console.log(hamburgerMenu.style.display)
    const hamburgerMenuRect = hamburgerMenu.getBoundingClientRect();
    const hamburgerWidth = hamburgerMenuRect.right - hamburgerMenuRect.left;
    document.body.style.transform = `translateX(-${hamburgerWidth}px)`;
    document.body.style.overflowX = "auto";
    document.body.style.overflowY = "hidden";
    document.body.style.position = "fixed";
    content.style.overflowX = "auto";
    content.style.overflowY = "hidden";
}
hamburgerButton.addEventListener("click", () => {
    if (document.body.style.transform) {
        closeHamburger()
    } else {
        openHamburger()
    }
})

hamburgerClose.addEventListener("click", () => {
    closeHamburger()
})







const links = document.getElementsByClassName("c-header__link");
for (let i = 0; i < links.length; i++) {
    const link = links[i];
}