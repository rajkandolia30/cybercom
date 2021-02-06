var array_adminRegister=[];
function Add_admin(){
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
                            if(localStorage.getItem("array_adminRegister") != null){           //entering second data and checking if exist or not otherwise store it into localstorage
                                array_adminRegister=JSON.parse(localStorage.getItem("array_adminRegister"));
                                var admin_exist='';
                                        for(var i=0; array_adminRegister.length; i++){
                                            if(array_adminRegister[i]['name'] === adminName){
                                                admin_exist=true;
                                                break;
                                            }else{
                                                admin_exist=false;
                                            }
                                        }
                                        if(admin_exist == false){
                                            array_adminRegister.push(admin_Data);
                                            localStorage.setItem('array_adminRegister',JSON.stringify(array_adminRegister));
                                            alert('Registeration succesfull');
                                            window.location.replace("login.html");
                                        }else{
                                            alert('Admin already exist');
                                        }
                                        
                            }else{                      //entering first time data of admin
                                array_adminRegister.push(admin_Data);
                                localStorage.setItem('array_adminRegister',JSON.stringify(array_adminRegister));
                                alert('Registeration succesfull');
                                window.location.replace("login.html");
                            }
            }else{
                alert('Please enter all fields to register');
            }
}

function password(pass1,pass2){
    var password=document.getElementById('password').value;
    var confirm_password=document.getElementById('confirm_password').value;
            if(password == confirm_password){
                return document.getElementById('confirm_password').value;
            }else{
                alert('Incorrect password');
            }
}

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

var addUserData=[];
function Add_user(){
    var userName=document.getElementById('name').value;
    var userEmail=document.getElementById('email').value;
    var userPassword=document.getElementById('password').value;
    var userBirthdate=document.getElementById('birthdate').value;
            
            if(userName.length != 0 && userPassword.length != 0){
                var userData={
                    name:userName,
                    email:userEmail,
                    password:userPassword,
                    birthdate:userBirthdate,
                }
                            if(localStorage.getItem("array_userData") != null){           
                                addUserData=JSON.parse(localStorage.getItem("array_userData"));
                                var userExist='';
                                        for(var i=0; i < addUserData.length; i++){
                                            if(addUserData[i]['name'] === userName){
                                                userExist=true;
                                                break;
                                            }else{
                                                userExist=false;
                                            }
                                        }
                                        if(userExist == false){
                                            addUserData.push(userData);
                                            localStorage.setItem('array_userData',JSON.stringify(addUserData));
                                            alert('Registeration succesfull');
                                            window.location.replace("user.html");
                                        }else{
                                            alert('Admin already exist');
                                        }
                                        
                            }else{                    
                                addUserData.push(userData);
                                localStorage.setItem('array_userData',JSON.stringify(addUserData));
                                alert('Registeration succesfull');
                                window.location.replace("user.html");
                            }
            }else{
                alert('Please enter all fields to register');
            }
}

function login(){
	var userEmail = document.getElementById('email').value.trim().toLowerCase();
	var userPassword = document.getElementById('password').value.trim().toLowerCase();

        if(userEmail.length != 0 && userPassword.length != 0) {
                
                //admin login
                if((localStorage.getItem("array_adminRegister") != null)) {
                    array_adminRegister= JSON.parse(localStorage.getItem("array_adminRegister"));
                    var userExits = '';
                            for (var i = 0; array_adminRegister.length; i++) {
                                if(array_adminRegister[i]['email'] === userEmail) {
                                    if(array_adminRegister[i]['password'] === userPassword) {
                                        alert('Admin Successfully Loged In');
                                        window.location.replace("dashboard.html");
                                    } else {
                                        alert('Incorrect Password');
                                        window.location.replace("login.html");	
                                    }
                                    userExits = true ;
                                    break;
                                }else {
                                    userExits = false ;
                                }
                            }
                            if(userExits == false) {
                                alert('Registered First');
                                window.location.replace("login.html");
                            }
                }else{
                    alert('Registered First');
                    window.location.replace("login.html");
                }
                
                //user login
                if((localStorage.getItem("addUserData") != null)) {
                addUserData= JSON.parse(localStorage.getItem("addUserData"));
			    var userExits = '';
			                for (var i = 0; addUserData.length; i++) {
		                        if(addUserData[i]['email'] === userEmail) {
			                        if(addUserData[i]['password'] === userPassword) {
						            alert('User Successfully Log-In');
						            window.location.replace("subuser.html");
					            } else {
						            alert('Wrong Password');
						            window.location.replace("login.html");	
					            }
					            userExits = true ;
					            break;
				            }else {
					            userExits = false ;
				            }
			            }
			            if(userExits == false) {
				            alert('User not Registered');
				            window.location.replace("login.html");
			            }
		        }else{
			    alert('User not Registered');
			    window.location.replace("login.html");
		        }
        }else {
            alert('Please enter all value');
        }	
}

var addUserData=[];
function Add_user(){
    var userName=document.getElementById('name').value;
    var userEmail=document.getElementById('email').value;
    var userPassword=document.getElementById('password').value;
    var userBirthdate=document.getElementById('birthdate').value;
            
            if(userName.length != 0 && userPassword.length != 0){
                var userData={
                    name:userName,
                    email:userEmail,
                    password:userPassword,
                    birthdate:userBirthdate,
                }
                            if(localStorage.getItem("array_userData") != null){           
                                addUserData=JSON.parse(localStorage.getItem("array_userData"));
                                var userExist='';
                                        for(var i=0; i < addUserData.length; i++){
                                            if(addUserData[i]['name'] === userName){
                                                userExist=true;
                                                break;
                                            }else{
                                                userExist=false;
                                            }
                                        }
                                        if(userExist == false){
                                            addUserData.push(userData);
                                            localStorage.setItem('array_userData',JSON.stringify(addUserData));
                                            alert('User added');
                                            window.location.replace("user.html");
                                        }else{
                                            alert('User already exist');
                                        }
                                        
                            }else{                    
                                addUserData.push(userData);
                                localStorage.setItem('array_userData',JSON.stringify(addUserData));
                                alert('Registeration succesfull');
                                window.location.replace("user.html");
                            }
            }else{
                alert('Please enter all fields to register');
            }
}

function ini(){
    if(localStorage.getItem('addUserData') != null){
        addUserData=JSON.parse(localStorage.getItem('addUserData'));
        for(var i=0; i<addUserData.length; i++){
            var name=addUserData[i].name;
            var email=addUserData[i].email;
            var password=addUserData[i].password;
            var birthdate=addUserData[i].birthdate;
            create_table(name,email,password,birthdate);
        }
    }
}

function create_table(name,email, password,birthdate){ 
    var table=document.getElementById('table');
    var row= table.insertRow();
    var namecell=row.insertCell(0);
    var emailcell=row.insertCell(1);
    var passwordcell=row.insertCell(2);
    var birthdatecell=row.insertCell(3);
    var agecell=row.insertCell(4);
    var actioncell=row.insertCell(5);
        namecell.innerHTML=name;
        emailcell.innerHTML=email;
        passwordcell.innerHTML=password;
        birthdate.innerHTML=birthdate;
        cal_age(birthdate);
        action.innerHtml='Edit delete';
}

function cal_age(birthdate){
    
}