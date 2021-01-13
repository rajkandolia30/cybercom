console.log('hello');

//now we are creating a game of dice from the videos 
//all the variables

var score, roundscore,activeplayer;
score=[0,0];
roundscore=0;
activeplayer=0;//0 means player 1 score[0,] and 1 means player 2 score[,0]
dice= Math.floor(Math.random()*6)+1;



console.log(dice);//will give the single output in refreshing 

//now we are accessing dom structure from the html page by the following codes
                                                                        //this code print id specified in (#) of active player from dice
//document.querySelector('#current-' +activeplayer).textcontent=dice;
//document.querySelector('#curremt-) +activeplayer).innerHTML='<em>'+ dice '</em>';

var x = document.querySelector('#score-0').textContent;                   stores in variable x and print
console.log(x);

document.querySelector('.dice').style.display='none';                     hide the dice from webpage using style in js
document.getElementById('score-0').textContent='0';
document.getElementById('score-1').textContent='0';
document.getElementById('current-0').textContent='0';
document.getElementById('current-1').textContent='0';

 

 
//now we are learning event handling

document.querySelector.('.btn-roll').addEventListner('click', function()
{
    //1.randome number
    var dice= Math.floor(Math.random()*6)+1;    /* here math is a math libary in js
    .random gives the floating no from 0-1 but we want upto 6 so we multiply it with 6
    but it still gives result in floating point so we give .floor to remove floating points
    now the it results between 0-5 in integer but stil we want 1-6
    so we add  +1 to get dice no.*/

    //2.display result
    var diceDOM= document.querySelector('dice');
    diceDOM.style.display='block';
    diceDOM.src= 'dice-' + dice + ''.png' ;  

    
    

    //update the round IF the rolled number was not a 1

})