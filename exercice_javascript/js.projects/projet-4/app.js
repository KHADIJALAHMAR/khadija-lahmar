var btn=document.querySelector(".addItems-submit");
var msg=document.querySelector("#msg");
btn.onclick=function(e){
    e.preventeDefault();
    var inputValuee= msg.nodeValue;
    if(msg.Value === ''){
        console.log("empty");
    }
 else{
    msg.value = '';
    document.getElementById("name").innerHTML=  inputValuee;
}
}

