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
            xmlhttp.open("GET","../php files/insert.php?name="+name+'&email='+email+'&phone='+phone+'&employee='+employee+'&created='+created,true);
            xmlhttp.send();
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
            }
}
function edit(id){
    window.location.replace('../design/update.php?id='+id);
    }

function update(id){
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    var employee=document.getElementById('employee').value;
    var created=document.getElementById('created').value;
    var id=document.getElementById('num').value;
        if(name.trim().length==0 
        && email.trim().length== 0
        && phone.trim().length==0
        && employee.trim().length==0
        && created.trim().length==0){
            alert('Please enter all values');
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","../php files/update.php?name="+name+'&email='+email+'&phone='+phone+'&employee='+employee+'&created='+created+'&id='+id,true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    if(xmlhttp.responseText == 'Row updated succesfully'){
                        //alert(xmlhttp.responseText);
                        window.location.replace('../design/contact.php');
                        }
                    }
                }
        }
}      
function removerow(id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","../php files/delete.php?id="+id,true);
    xmlhttp.send();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        if(xmlhttp.responseText == 'Row deleted succesfully'){
                            window.location.replace('../design/contact.php');
                        }
                    }
                }
}