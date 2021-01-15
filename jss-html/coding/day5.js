console.log('day 5 practice');

// function cunstructor

var person= function(name , yearofborn ,job)
            {
                this.name=name; // here this keywrod points to new object
                this.yearofborn=yearofborn;
                this.job=job;
                this.calculateage=function()
                    {
                        console.log(2021-this.yearofborn);
                    }

            }
        
        //we can also define function of personn outside the person object as given below
    /*    person.prototype.calculateage=function()
                                            {
                                              console.log(2021-this.yearofborn);  
                                            }*/
        //we can also define the propertise of person outside the person object as given below
    
        person.prototype.lastname='kandolia';


var raj= new person('raj',1998, 'dancer');
console.log(raj);
raj.calculateage();

var prince=new person('prince', 1999, 'cricketer');
console.log(prince);
prince.calculateage(prince);

var nirali=new person ('nirali', 1995, 'singer');
console.log(nirali);
nirali.calculateage();

console.log(raj.lastname);
console.log(prince.lastname);
console.log(nirali.lastname);

console.log(raj);
console.log(prince);
console.log(nirali);


//creating object with object.create

var frnd={
        calculateage: function()
                    {
                        console.log(2021-yearofbirth);
                    }
}

var juli =Object.create(frnd);
juli.name='juli';
juli.yearofbirth=1997;
juli.job='coder';
console.log(juli);
//juli.calculateage(yearofbirth);


//or we can crreate instance like this
var dhruva=Object.create(frnd,{
                                name:{value:'dhruva'},
                                yearofbirth:{value:1996},
                                job:{value:'designer'}
                                });

console.log(dhruva);

// primitive and objects
    //primitives
var a=40;
var b=a;
a=60;
console.log(a);
console.log(b);

//in objects tihs does not happens because it stores the same value before and after chnaging the value
    //objects
var obj1={
    a:40,
}
var obj2=obj1;
obj1.a=70;
console.log(obj1);
console.log(obj2);

    //functions
var age=27;
var obj={
    name:'raj',
    city:'rajkot',
}

function change(a,b)
{
    a=30;
    b.city='ahemdabad';
}

change(age,obj);

console.log(age);
console.log(obj.city);


//passsing functionn as argument in another function

var arr1 = [1997,1998,1999,2000,2001];

function func1(arr , func)
{
    var arr2=[];
    for(var i=0 ; i<arr.length; i++)
        {
            arr2.push(func(arr[i]));
        }
    return arr2;
}

function func2(ele)
{
    return 2021-ele;
}

function isfullage(ele)
{
    return ele >=18;
}

var age= func1(arr1 , func2);
console.log(age);

var isfull=func1(age ,isfullage);
console.log(isfull);















