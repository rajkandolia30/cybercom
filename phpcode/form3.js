function valid(){
var fname=document.getElementById('fname').value;
var lname=document.getElementById('lname').value;
var month=document.getElementById('month').value;
var date=document.getElementById('date').value;
var year=document.getElementById('year').value;
var gender=get_val('gender');
var country=document.getElementById('country').value;
var email=document.getElementById('email').value;
var phone=document.getElementById('phone').value;
var password=document.getElementById('password').value;
var repassword=document.getElementById('repassword').value;
var agree=get_val('agree');                
        if(fname.trim().length==0
        || lname.trim().length==0
        || month.trim().length==0
        || date.trim().length==0
        || year.trim().length==0
        || gender.trim().length==0
        || country.trim().length==0
        || email.trim().length==0
        || phone.trim().length==0
        || password.trim().length==0
        || repassword.trim().length==0
        || agree.trim().length==0){
                    if(fname.trim().length==0) {
                        document.getElementById('fname_error').innerHTML='PLEASE ENTER THE NAME';
                    }
                    if(lname.trim().length==0) {
                        document.getElementById('lname_error').innerHTML='PLEASE ENTER THE NAME';
                    }
                    if(month.trim().length==0 || year.trim().length==0 || date.trim().length==0) {
                        document.getElementById('date_error').innerHTML='PLEASE ENTER DOB';
                    }                    
                    if(gender.trim().length==0) {
                        document.getElementById('gender_error').innerHTML='PLEASE SELECT GENDER';
                    }
                    if(country.trim().length==0 ) {
                        document.getElementById('country_error').innerHTML='PLEASE ENTER COUNTRY';
                    }
                    if(email.trim().length==0 ) {
                        document.getElementById('email_error').innerHTML='PLEASE ENTER EMAIL';
                    }
                    if(phone.trim().length==0 ) {
                        document.getElementById('phone_error').innerHTML='PLEASE ENTER PHONE';
                    }
                    if(password.trim().length==0 ) {
                        document.getElementById('password_error').innerHTML='PLEASE ENTER PASSWORD';
                    }
                    if(repassword.trim().length==0 ) {
                        document.getElementById('repassword_error').innerHTML='PLEASE ENTER REPASSWORD';
                    }
                    if(agree.trim().length==0 ) {
                        document.getElementById('agree_error').innerHTML='PLEASE AGREE';
                    }
            return false;
        }else{
            return true;
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