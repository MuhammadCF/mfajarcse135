//import { json } from "body-parser";
import {data} from "./collector.js";


function sendInit(){
    let store = window.sessionStorage;

    store.setItem('static', JSON.stringify(data.static));
    store.setItem('performance', JSON.stringify(data.performance));
    setTimeout(function (){
        store.setItem('activity', JSON.stringify(data.activity));
    }, 1000);
    
}

window.addEventListener('load',sendInit);

