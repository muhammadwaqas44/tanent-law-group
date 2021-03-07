function isNumberKey(evt) {      //onkeypress="return isNumberKey(event)"
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    } else {
        return true;
    }
}

function isCharacterKey(evt) {      //onkeypress="return isNumberKey(event)"
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122 ) && charCode !=32 ){
        return false;
    } else {
        return true;
    }
}

function scrollToResponse(_targetId){
    $('html, body').animate({
        scrollTop: $("#"+_targetId).offset().top
    }, 500);
}
