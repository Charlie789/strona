function allnumeric(){
    var numbers = /^[0-9]+$/;
    var i;
    for (i = 0; i < arguments.length; i++) {
        if(!argument[i].value.match(numbers)) {
            alert('Please input numeric characters only');
            return false;
        }
    }
    return true;
} 