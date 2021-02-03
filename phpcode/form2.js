
function valid(){
    var name=document.getElementById('name').value;
    var password=document.getElementById('password').value;
    var address=document.getElementById('address').value;
    var month=document.getElementById('month').value;
    var date=document.getElementById('date').value;
    var year=document.getElementById('year').value;
    var game=get_val('game[]');
    var status=get_val('status');
    var agree=get_val('agree');
    var gender=get_val('gender');
            if(name.trim().length==0 
            || password.trim().length==0
            || gender.trim().length==0 
            || address.trim().length==0
            || month.trim().length==0
            || date.trim().length==0
            || year.trim().length==0
            || game.trim().length==0
            || status.trim().length==0
            || agreee.trim().length==0){
                    if(name.trim().length==0) {
                        document.getElementById('name_error').innerHTML='PLEASE ENTER THE NAME';
                    }  
                    if(password.trim().length==0) {
                        document.getElementById('password_error').innerHTML='PLEASE ENTER THE PASSWORD';
                    }
                    if(gender.trim().length==0) {
                        document.getElementById('gender_error').innerHTML='PLEASE SELECT GENDER';
                    }
                    if(address.trim().length==0) {
                        document.getElementById('address_error').innerHTML='PLEASE ENTER ADDRESS';
                    }
                    if(month.trim().length==0 || year.trim().length==0 || date.trim().length==0) {
                        document.getElementById('date_error').innerHTML='PLEASE ENTER DOB';
                    }
                    if(game.trim().length==0) {
                        document.getElementById('game_error').innerHTML='PLEASE ENTER GAME';
                    }
                    if(status.trim().length==0){
                        document.getElementById('status_error').innerHTML='PLEASE SELECT STATUS';
                    }
                    if(agree.trim().length==0){
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

