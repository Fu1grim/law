"use strict";

let menuButton = document.querySelector("#toggle-menu");
let menu = document.querySelector("#menu-holder");

export default class Menu{

    constructor(){
        this._events();
    }
    _events(){
        menuButton.addEventListener("click", (e) => { this.handleMenu(e) }, false);
        menu.addEventListener("click", (e) => { this.closeMenu(e) }, false);
    }
    handleMenu(e){        
        menuButton.classList.toggle("active");
        menu.classList.toggle("opened");

        return false;
    }
    closeMenu(e){
        menuButton.classList.remove("active");
        menu.classList.remove("opened");

        return false;
    }

}