//Oefening angry-birds
// const is voor de vogel die moet bewegen
//let is voor de beweging hoeveelheid in pixels
//bird src is voor als de vogel beweegt dat de foto meegaat
const bird = document.querySelector(".bird");
let px = 0;

bird.addEventListener("click", function(){
    //elke keer als ik op de bird klik, word er 50x opgeteld. 
    px = px + 50;
    //voeg styling toe aan je bird class met als property 
    // left : 50px
    bird.style.left = px + "px";
})

window.addEventListener("keydown", function(e){
    console.log(e.key); 
    if(e.key == "ArrowRight"){
    px = px + 50;
    bird.style.left = px + "px";
    bird.src = "img/b-right.svg";
    }

    if(e.key == "ArrowLeft"){
        px = px - 50;
        bird.style.left = px + "px";
        bird.src = "img/b-left.svg";
        }

    if(e.key == "ArrowUp"){
            px = px + 50;
            bird.style.bottom = px + "px";
            bird.src = "img/b-up.svg";
            }

    if(e.key == "ArrowDown"){
    px = px - 50;
    bird.style.bottom = px + "px";
    bird.src = "img/b-down.svg";
    }


})