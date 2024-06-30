function validation(){
    if(document.formfill.email.value==""){
        document.getElementById("result").innerHTML="Enter your Email*";
        return false;
    }
    else if(document.formfill.password.value==""){
        document.getElementById("result").innerHTML="Enter your Password*";
        return false;
    }
   
}
