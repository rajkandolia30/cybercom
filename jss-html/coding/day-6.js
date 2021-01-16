console.log("objects and functions")

//function calling another function and function without nmae is called anonymous function


function interview(job)
{
    if(job === 'designer')
    {
        return function(name) //anonymous function
                {
                    console.log(name + ' what do you design ?');
                }
    }
    else if (job === 'coder')
    {
        return function(name)
                {
                    console.log(name + ' which language you know?');
                }
    }
    else if(job === 'teacher')
    {
        return function(name)
                {
                    console.log(name +  ' which subject you teach?');
                }
    }
    else
    {
        return function(name)
                {
                    console.log(name + ' what do you do?');
                }
    }
}

//calling a function by expression,in variable
var desq= interview('designer');
desq('john'); //calling function expression with name
    //or we can call like this
        //interview('designer')('john');

var tecq=interview('teacher');
tecq('raj');
    //or we can call like this
        //interview('teacher')('raj');

var codq=interview('coder');
codq('juli');
    //or we can call like this
        //interview('coder')('juli');

var noq=interview('dancing');
noq('prince');
    //or we can call like this
        //interview('dancing')('prince');

//(iife)immediatly invoke function expression used for data privacy

function game()//declaration
{
    var score=Math.random()+10; //creates any randome no. and add 10
    console.log(score >= 5);
}
game();//call

(function () //declaration
{
    var score=Math.random()+10; //creates any randome no. and add 10
    console.log(score >= 5);
})
(); //call

(function (goodluck) //declaration
{
    var score=Math.random()+10; //creates any randome no. and add 10
    console.log(score >= 5-goodluck);
})
(10);

//closures:an inner function has always access to its  outer funtion variables and parameters even if that/outer function has retunrd.

function retire(retireyear)
{
    var a='years left until retirement';
    return function(yearofborn)
    {
        var age=2021-yearofborn;
        console.log(retireyear-age + a);
    }
}

var inus=retire(65);
inus(1998);

retire(60)(1998); //directly calling both function
 //or var india=retire(60); inindia(1998);

var bri=retire(70)(1999);

//using closure
function interview(job)
{
    return function(name)
    {
    if(job === 'designer')
    {
    console.log(name + ' what do you design ?');
    }
    else if (job === 'coder')
    {
    console.log(name + ' which language you know?');
    }
    else if(job === 'teacher')
    {
    console.log(name +  ' which subject you teach?');
    }    
    else
    {
    console.log(name + ' what do you do?');
    }
    }
}

interview('singer')('prince');
interview('teacher')('prince');
interview('coder')('prince');

//bind, call, apply 

var raj={
    name:'raj',
    lastname:'kandolia',
    age:23,
    job:'dancer',
    presentation: function(style, timeoftheday)
                    {
                        if(style === 'formal')
                            {
                                console.log('hello..everyone good ' + timeoftheday + ' my name is ' + this.name +' '+ this.lastname +' i m ' + this.age + ' years old and i m a'+ this.job);
                            }
                        else if(style === 'friendly')
                            {
                                console.log('hey guys.. good ' + timeoftheday + ' my name is ' + this.name +' '+ this.lastname +' i m ' + this.age + ' years old and i m a'+ this.job);
                            }
                        else
                        {
                            console.log('no style or time');
                        }
                    }
}

raj.presentation('formal','morning');

var prince={
    name:'prince',
    lastname:'kandolia',
    age:22,
}

raj.presentation.call(prince,'friendly','evening'); //call from raj object
//raj.presentation.apply(prince,[frindly,evening]);//apply doestn't gonna work because it has array aruments which object method doesn't have

//bind method is similR TO call method but it is assinged explicitly and it gerates the caopy of the function
var rajfriendly=raj.presentation.bind(raj,'friendly'); 
rajfriendly('afternoon'); 



//es5 version of js till we are useing

//now es6 upgrade version os js
//variables const and let,let is as same as var,const is the value we dont want to chnage in program

var a=6;
console.log(a);
a=10;
console.log(a);

let b=4;
console.log(b);
b=7;
console.log(b);

const pi=3.17;
console.log(pi);
//pi=3;
//console.log(pi);    wont work beacause it is defined as contant


//function using var let const
//es5
function ex(passed)
    {
        if(passed)
        {
            var name='raj';
            var marks='70';
        }
        console.log(name+ ' passed the exm with '+ marks+ ' marks');
    }

ex(true);

//es6
function ex1(passed)
    {
        if(passed)
        {
            let name='princec';
            const marks='75';
            console.log(name+ ' passed the exm with '+ marks+ ' marks');
        }
       // console.log(name+ ' passed the exm with '+ marks+ ' marks');  this doesn't work beacuase let and const works in same block {}
    }

ex1(true);

//es5
/*var i=45;
for(var i=0; i<5; i++)
{
    console.log(i);
}
console.log(i);*/


//es6
let i=45;
for(let i=0; i<5; i++)
{
    console.log(i);
}

console.log(i);//beacuse of block variable let

//blocks and iief

{
    const r=50;
    let s=10; //not accsed outside the block
    var t=40;// accessed outside the block
    console.log(r+s)
}
//console.log(r+s);
console.log(t);

//strings in es6

let firstname='raj';
let lastname='kandolia';
const yearofbirth=1998;
function calcage(year)
{
    return 2021-year;
}
//es5
console.log('This is ' + firstname+' '+ lastname + ' she was born in '+yearofbirth+' '+ calcage(yearofbirth)+ '  old')
//es6
console.log(`this is ${firstname} ${lastname} she was born in ${yearofbirth} today she is ${calcage(yearofbirth)} years old`);

//

const n=`${firstname} ${firstname}`;
console.log(n.startsWith('r'));
console.log(n.endsWith('r'));
console.log(n.includes(' '));
console.log(n.includes('aj'));
console.log(n.includes('jk'));
console.log(n.includes('j k'));
console.log(firstname.repeat(5));//without space
console.log(`${firstname} `.repeat(5));//with space





























































