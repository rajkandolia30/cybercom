function editcategory(id){
    window.location.replace('addcategory.php?id='+id);
    }
function removecategory(id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","../php files/deletecategory.php?id="+id,true);
    xmlhttp.send();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        if(xmlhttp.responseText == 'Row deleted succesfully'){
                            window.location.replace('../php files/categorytable.php');
                        }
                    }
                }
}
function editblog(id){
    window.location.replace('addblog.php?id='+id);
    }
function removeblog(id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","../php files/deleteblog.php?id="+id,true);
    xmlhttp.send();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        if(xmlhttp.responseText == 'Row deleted succesfully'){
                            window.location.replace('../php files/blogtabletable.php');
                        }
                    }
                }
}