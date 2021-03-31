
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