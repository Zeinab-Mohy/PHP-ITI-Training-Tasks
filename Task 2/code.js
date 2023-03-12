let randomcode_ ;

document.getElementById("rondomcode").onclick= function(){

    randomcode_ = Math.random().toString(36).substring(2,7);

    document.getElementById("rondomcode_label").innerHTML=randomcode_;

}
let ccode=document.querySelector("[name ='code']")
document.forms[0].onsubmit=function(e){
    let code =false ;
    if(ccode.value===randomcode_){
        code=true;
    }
    else{
        e.preventDefault();
    }
}
