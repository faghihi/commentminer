/**
 * Created by hossein on 24/10/2016.
 */
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $( "select" )
        .change(function () {
            var val=0;
            $( "select option:selected" ).each(function() {
               val=$(this).val();
                Filterthis(val);
            });

        });
});

function Filterthis(val) {
    if(val==0){
        $(".enable_one").show();
        $(".off_one").show();
    }
    if(val==1){
        $(".off_one").hide();
        $(".enable_one").show();
    }
    if(val==2){
        $(".off_one").show();
        $(".enable_one").hide();
    }
}

function disi() {
    $("#subi").attr('disabled',true);
    return true;
}

function CheckPass(){
    var psw=$('#pass').val();
    var repsw=$('#repass').val();
    if(repsw==psw){
         var check=CheckUser();
        if(check)
        {
            return true;
        }
        else {
            $('#erruser').show();
            return false;
        }
    }
    else {
        $('#errpsw').show();
        return false;
    }
}
function CheckPass2(){
    var psw=$('#newPass').val();
    var repsw=$('#rePass').val();
    if(repsw==psw) {
        var check=CheckOldPass();
        if(check)
        {
            return true;
        }
        else {
            $('#erruser').show();
            return false;
        }
    }
    else {
        $('#errpsw').show();
        return false;
    }
}
function CheckUser() {
    //alert ("salam");
    var username=$('#Mail').val();
    console.log(username);
    $.ajax({url:"/SignUp/Check?rand="+Math.random(),data:"username="+username, async:false ,success: function (data) {
        if(data==1){
            check= true;
        }
        else {
            check = false;
        }
        console.log(data);
    }});
    return check;
}
function CheckOldPass() {
    var oldpass=$('#oldPass').val();
    $.ajax({url:"/Profile/CheckPass?rand="+Math.random(),data:"OldPassword="+oldpass, async:false ,success: function (data) {
        if(data==1){
            check= true;
        }
        else {
            check = false;
        }
        console.log(data);
    }});
    return check;
}

