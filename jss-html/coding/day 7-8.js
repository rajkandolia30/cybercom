
console.log('practice session 6-7');
//arrow function used in es6

var years=[1999,1998,2000,2001,2002];
//es5
//here we are directly storing one arrY TO ANOTHER ARRAy by map metthod
var array1= years.map(function(el)
                                {
                                    return 2021-el;
                                })
var array2= years.map(el => 2022-el);
console.log(array1);
console.log(array2);

//es6
//using const keyword
const array3= years.map(function(el)
                                {
                                    return 2023-el;
                                })
const array4= years.map(el => 2024-el);
console.log(array3);
console.log(array4);

//we can also pass two argument inside map as
let array5= years.map((el,index) => `index(${index + 1}) : element (${2025-el}),`);
console.log(array5);


//now using html sheet we ARE diplaying the msg using onclick method
var box1={
    color:'green',
    position:1,
    clickMe: function()
            {
            var self=this;//this is because when we crete a new function it points to window object
            document.querySelector('.green').addEventListener('click', function()
                                                                    {
                                                                    var str='this is box no '+self.position+' and it has color '+self.color;
                                                                    alert(str);
                                                                    });
                                                            
            }

}
box1.clickMe();

//using arrow function in es6
const box2={
    color:'red',
    position:2,
    clickMe: function()
            {
            document.querySelector('.red').addEventListener('click', () =>
                                                                    {
                                                                    var str='this is box no '+this.position+' and it has color '+this.color;
                                                                    alert(str);
                                                                    });
                                                            
            }

}
box2.clickMe();

//using both function as arrow this will not work because it points to window object (use of arrow)
const box3={
    color:'orange',
    position:3,
    clickMe: () => //but here again lexical scoping will be of window so we will do it like this
            {
            var self=this;
            document.querySelector('.orange').addEventListener('click', () =>
                                                                    {
                                                                    var str='this is box no '+self.position+' and it has color '+self.color;
                                                                    alert(str);
                                                                    });
            }

}
box3.clickMe();








































