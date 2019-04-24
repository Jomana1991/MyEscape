
function checkPassword(){
    $password = document.forms["RegForm"]["Password"].value;     // to understand this syntax pls refer JS forms in W3schools website.
    $confirmation = document.forms["RegForm"]["ConfirmPassword"].value;
    if($password !== $confirmation)
    {
        alert("Passwords do not match"); 
        return false;
    }
    else
    {
        return true;
    }
     
}

//function disableButton() {
//    document.getElementById('thumb-button').disabled = true;
//}


 function addLikeCounter(blogID) {
    var xhttp; //new variable
    xhttp = new XMLHttpRequest ();//create XHR object
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){//when XHR object is ready
                    document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                                                       }
                               };//end of readystate change function
    
    xhttp.open("GET","index.php?controller=blog&action=likeBlog&blogID="+blogID,true);
    xhttp.send();
                        }
                        
    function subtractLikeCounter(blogID) {
    var xhttp; //new variable
    xhttp = new XMLHttpRequest ();//create XHR object
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){//when XHR object is ready
                    document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                                                       }
                               };//end of readystate change function
    
    xhttp.open("GET","index.php?controller=blog&action=dislikeBlog&blogID="+blogID,true);
    xhttp.send();
                        }