class MobileNavBar {
    constructor(mobileMenu, navLinks, navList){
        this.mobileMenu = document.querySelectorAll(mobileMenu);
        this.navList = document.querySelectorAll(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";
        this.handleClick = this.handleClick.bind();
    }

    handleClick(){
        console.log(this);
        this.navList.classList.toggle(this.activeClass)
    }

    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick());
    }

    init(){
        if (this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavBar = new MobileNavBar (
    ".mobile-menu",
    ".nav-list",
    "nav-list li",
);

mobileNavBar.init();