
//variables..and its way of printing


/*var firstname = 'jonh';
console.log(firstname)
var lastname = 'smith';
var age = 25;
var fullage=false;
console.log(fullage);
var job;
console.log(job);
job='teacher';
console.log(job);
var ismarried=false;                                                         

console.log(firstname +' is '+ age +' years old and he is a '+ job + ' he is married? '+ ismarried);
                                                                                */

//concept of alert by using it pop up the window showing the string followed by alert untill we click ok button in it

/*alert(firstname +' is '+ age +' years old and he is a '+ job + ' he is married? '+ ismarried);
 alert("out of service");                                                      */

//concept of prompt: it ask for the variable in popup msg and stores the variable accorgingly

/*var lastname=prompt('what is his last name?');
console.log(lastname);
console.log(firstname +' '+ lastname);                                           */

//math operation are some function used in js

/*var ageofraj=2020-22;
console.log('age of raj is '+ageofraj);

console.log(firstname+'  '+lastname);

var currentyear=2021;
var yourage=prompt('how old you are?')
console.log(yourage);
var yearofborn=currentyear-yourage;
console.log(yearofborn);
//we can also do operations in concole by just giving expression                     */

//logical operations

var age_of_prince=21;
var age_of_raj=22;
var is_prince_older=age_of_prince < age_of_raj;
console.log(is_prince_older);
var is_raj_older=age_of_prince > age_of_raj;
console.log(is_raj_older);

//typeof shows us the type of variables it declares

console.log(typeof age_of_prince);
console.log(typeof is_prince_older);
console.log(typeof 'raj is older than prince');
var x;
console.log(x);
var x=123;
console.log(typeof x);


var average=(age_of_raj+age_of_prince)/2;
console.log(average);

if(age_of_raj>20 && age_of_prince>20)
console.log('both are 20+');
else
console.log('both are under 20');

console.log(age_of_raj,age_of_prince);

//x=x+1,x++,x+=2     x=x-1,x-=2,x--    x=x*2 = x*=2   x=x/2 = x/=2  
 
 var a=1;
 a=a+1;
 console.log(a);//2
  a+=1;
 console.log(a);//3
 a++;
 console.log(a);//4


 var a=4;
 a=a-1;
 console.log(a);//3
  a-=1;
 console.log(a);//2
 a--;
 console.log(a);//1
