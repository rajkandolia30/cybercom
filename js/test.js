var adminRegister=[];
        //check the terms and condition
function get_val(value){
    var returnvalue='';
    var element=document.getElementsByName(value);
    for(var i=0; i<element.length; i++){
        if(element.checked){
            returnvalue+=element[i].value;
        }
    }
    return returnvalue;
}
function password(pass1,pass2){
    var password=document.getElementById('password').value;
    var confirm_password=document.getElementById('confirm_password');
    if(password == confirm_password){
        return true;
    }else{
        return false;
    }
}
        //get and register the admin
function register(){
    var adminName=document.getElementById('name').value;
    var adminEmail=document.getElementById('email').value;
    var adminPassword=password('password','confirm_password');
    var adminCity=document.getElementById('city').value;
    var adminState=document.getElementById('state').value;
    var terms=get_val('terms');
            
            if(adminName.length != 0 && adminPassword.length != 0){
                var admin_Data={
                    name:adminName,
                    email:adminEmail,
                    password:adminPassword,
                    city:adminCity,
                    state:adminState,
                }
                            if(localStorage.getItem("adminRegister") != null){           //entering second data and checking if exist or not otherwise store it into localstorage
                                adminRegister=JSON.parse(localStorage.getItem("adminRegister"));
                                var admin_exist='';
                                        for(var i=0; i < adminRegister.length; i++){
                                            if(adminRegister[i]['name'] === adminName){
                                                admin_exist=true;
                                                break;
                                            }else{
                                                admin_exist=false;
                                            }
                                        }
                                        if(admin_exist == false){
                                            adminRegister.push(admin_Data);
                                            localStorage.setItem('adminRegister',JSON.stringify(adminRegister));
                                            alert('Registeration succesfull');
                                            window.location.replace("dashboard.html");
                                        }else{
                                            alert('Admin already exist');
                                        }
                                        
                            }else{                      //entering first time data of admin
                                adminRegister.push(admin_Data);
                                localStorage.setItem('adminRegister',JSON.stringify(adminRegister));
                                alert('Registeration succesfull');
                                
                            }
            }else{
                alert('Please enter all fields to register');
            }
}



                                  