//calculating mass

console.log('calculating mass');
var john={
        fullname:'john_smmith',
        mass:50,
        height:5.6,
        calculatebmi:function(mass,height)
        {
            return mass/height*height;
            
            
        }
}
    john.bmi = john.calculatebmi(john.mass, john.height);    
     //  console.log(john.bmi);

var mark={
        fullname:'mark_smmith',
        mass:60,
        height:5.6,
        calculatebmi:function(mass,height)
        {
            var bmi=mass/height*height;
            return bmi;
            
        }
}
    mark.bmi = mark.calculatebmi(mark.mass, mark.height);    
     // console.log(mark.bmi);



    //console.log(mark.calculatebmi(mark.mass,mark.height));

if(john.bmi  > mark.bmi)
{
    console.log('john has highest bmi ');
    console.log(john);
}
else if(mark.bmi > john.bmi)
{
    console.log('mark has highest bmi ');
    console.log(mark);
}
else
{
    console.log('they both have same bmi');
    console.log(john);
    console.log(mark);
}