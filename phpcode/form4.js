
function valid(){
var name=document.getElementById('name').value;
var email=document.getElementById('email').value;
var subject=document.getElementById('subject').value;
var message=document.getElementById('message').value;
                
        if(name.trim().length==0
        || lname.trim().length==0
        || subject.trim().length==0
        || date.trim().length==0){
                    if(name.trim().length==0) {
                        document.getElementById('name_error').innerHTML='PLEASE ENTER THE NAME';
                    }
                    if(email.trim().length==0 ) {
                        document.getElementById('email_error').innerHTML='PLEASE ENTER EMAIL';
                    }
                    if(subject.trim().length==0 ) {
                        document.getElementById('subject_error').innerHTML='PLEASE ENTER SUBJECT';
                    }
                    if(message.trim().length==0 ) {
                        document.getElementById('message_error').innerHTML='PLEASE ENTER MESSAGE';
                    }
                    return false;
        }else{
            return true;
        }
}