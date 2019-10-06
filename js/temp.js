/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

let releseDate= new Date('Dec 31, 2020 12:59:00');

function interval(){

    let  current=new Date().getTime();
    
    let duration = releseDate - current;

    let days = Math.floor(duration / (24*60*60*1000));

    let hours = Math.floor(duration % (24*60*60*1000) / (60*60*1000));

    let mins = Math.floor(duration % (60*60*1000) / (60*1000));

    let sec = Math.floor(duration % (1000*60)/1000);

   let countdown = document.querySelector('#countdown')
   
   countdown.innerHTML= ` 
    <div class="counter-box">
        <span class="counter-number"> ${days}</span>
        <span class="counter-text">Days</span>
    </div>

    <div class="counter-box">
        <span class="counter-number"> ${hours}</span>

    <span class="counter-text">Hours</span>

    </div>

    <div class="counter-box">

        <span class="counter-number"> ${mins}</span>

        <span class="counter-text">Mins</span>

    </div>

    <div class="counter-box">

        <span class="counter-number">${sec}</span>

        <span class="counter-text">Seconds</span>

    </div>
    `;

   
}

var interval = setInterval(interval,1000);

function closeInterval(){
    clearInterval(interval);
}


