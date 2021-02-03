
function valid(){
    var name=document.getElementById('name').value;
    var password=document.getElementById('password').value;
    var address=document.getElementById('address').value;
    var game= get_val('game[]');
    var gender=get_val('gender');
    var age=document.getElementById('age').value;
    var file=document.getElementById('file').value;
            if(name.trim().length==0
            || password.trim().length==0
            || address.trim().length==0
            || game.trim().length==0
            || gender.trim().length==0
            || age.trim().length==0
            || file.trim().length==0){
                    if(name.trim().length==0) {
                        document.getElementById('name_error').innerHTML='PLEASE ENTER THE NAME';
                    }
                    if(password.trim().length==0) {
                        document.getElementById('password_error').innerHTML='PLEASE ENTER THE NAME';
                    }
                    if(address.trim().length==0) {
                        document.getElementById('address_error').innerHTML='PLEASE ENTER ADDRESS';
                    }
                    if(game.trim().length==0) {
                        document.getElementById('game_error').innerHTML='PLEASE ENTER GAME';
                    }
                    if(gender.trim().length==0) {
                        document.getElementById('gender_error').innerHTML='PLEASE SELECT GENDER';
                    }
                    if(age.trim().length==0) {
                        document.getElementById('age_error').innerHTML='PLEASE SELECT GENDER';
                    }
                    if(file.trim().length==0) {
                        document.getElementById('file_error').innerHTML='PLEASE SELECT GENDER';
                    }
            
            
        return false;
        }else{
            return true;
        }
        
}
function get_val(value){
    var returnvalue='';
    var element=document.getElementsByName(value);
    for(var i = 0; i < element.length; i++){
       if(element[i].checked){
            returnvalue+=element[i].value;
        }
    }
    return returnvalue;
}