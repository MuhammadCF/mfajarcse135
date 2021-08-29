//import { json } from "body-parser";
import {data} from "./collector.js";


function sendInit(){
    let store = window.sessionStorage;

    store.setItem('static', JSON.stringify(data.static));
    
    setTimeout(function (){
        store.setItem('activity', JSON.stringify(data.activity));
    }, 5000);

    setTimeout(function (){
        store.setItem('performance', JSON.stringify(data.performance));
    }, 1000);
    
}

window.addEventListener('load',sendInit);

