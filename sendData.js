//import { json } from "body-parser";
import {data} from "./collector";

let store = window.sessionStorage;

function sendInit(){
    store.setItem('static', JSON.stringify(data.static));
    store.setItem('performance', JSON.stringify(data.performance));
    store.setItem('activity', JSON.stringify(data.activity));


}

window.addEventListener('load',sendInit);

