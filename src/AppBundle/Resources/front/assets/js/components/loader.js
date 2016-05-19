"use strict";

let body = document.querySelector("body");

class Loader{

    constructor(){
        this._events();
    }
    _events(){
        window.addEventListener("load", (e) => { this._handleLoad(e) }, false);
    }
    _handleLoad(e){

        window.setTimeout(() => {
            body.classList.add("__loaded");
        }, 100);

        window.setTimeout(() => {
            window.scrollTo(0, 0);
        }, 100);
        
        return false;
    }

}

export default Loader;