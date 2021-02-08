function insert(){
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    var employee=document.getElementById('employee').value;
    var created=document.getElementById('created').value;
        if(name.trim().length==0 
        && email.trim().length== 0 
        && phone.trim().length==0
        && employee.trim().length==0
        && created.trim().length==0){
            alert('Please enter all values');
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        if(xmlhttp.responseText == 'New record created successfully'){
                            window.location.replace('../design/contact.php');
                        }
                    }
                }
                //parameters = 'name='+name+'email='+email+'phone='+phone+'employee='+employee+'created='+created;
                //xmlhttp.open('POST','../php files/insert.php',true);
                //xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
                //xmlhttp.send(parameters);
                xmlhttp.open("GET","../php files/insert.php?name="+name+'&email='+email+'&phone='+phone+'&employee='+employee+'&created='+created,true);
                xmlhttp.send();
        }
}