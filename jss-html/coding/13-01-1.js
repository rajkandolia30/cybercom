//calculating bill
console.log('calculator');

var bill=[48,60,215];

function calsi(bill_amount)
{
    if (bill_amount < 50)
        return bill_amount*0.2;
    else if (bill_amount >= 50 && bill_amount <= 200)
        return bill_amount*0.15;
    else 
        return bill_amount*0.1;
}
var tip = new Array(3);
var total = new Array(3);
    for(var i=0; i< bill.length; i++)
    {
        tip[i] = Math.floor(calsi(bill[i]));
        total[i]= Math.floor(tip[i] + bill[i]);
        
    }
    for (var i=0; i< bill.length; i++)
    {
        console.log('bill after tip '+ bill[i]);
        console.log('total bill '+ total[i]);
    }
console.log('over');