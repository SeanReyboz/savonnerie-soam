class Navigation {
    constructor() {
        this.initEls();
        this.initEvents();
    }

    initEls() {
        this.body = document.querySelector('html');
        this.burger = document.querySelector('.js-burger');
        this.responsiveNav = document.querySelector('.js-responsive-nav');
        this.state = false;
    }

    initEvents() {
        this.burger.addEventListener("click",() => this.toggleMenu());
    }


    toggleMenu() {
        //console.log(this)

        if (this.state === false) {
            this.openMenu();
        } else {
            this.closeMenu();
        }
    }

    setState(state = false) {
        return this.state = state;
    }

    openMenu() {
        this.setState(true);
        this.body.classList.toggle("no-scroll");
        return this.responsiveNav.setAttribute("data-opened", "true");
    }

    closeMenu() {
        this.setState(false);
        this.body.classList.toggle("no-scroll");
        return this.responsiveNav.setAttribute("data-opened", "false");
    }

}

new Navigation();