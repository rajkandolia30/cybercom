
function valid(){
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    if(email.trim().length==0 || password.trim().length==0){
        if(email.trim().length==0 ) {
                        document.getElementById('email_error').innerHTML='PLEASE ENTER EMAIL';
                    }
        if(password.trim().length==0){
             document.getElementById('password_error').innerHTML='PLEASE ENTER EMAIL';
        }
        return false;
    }else{
        return true;
    }

}
