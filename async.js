setInterval(receiver , 1000);
function receiver (){
    var request = new XMLHttpRequest();
    request.open("POST" , "ajax.php");
    request.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200){
            document.getElementById('chatRoom').innerHTML = this.responseText;
        }
    };
    request.send();
}
function sender() {
    var x = document.forms['messenger']['message'].value;
    var postMan = new XMLHttpRequest();
    postMan.open("POST" , "ajax.php?x=" + x);
    postMan.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200){
            document.getElementById('message').innerText = "";
        }
    };
    postMan.send();
}