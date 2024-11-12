<!DOCTYPE HTML>
<html>
<head>
<script>
function showHint(str) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if (this.readyState==4 && this.status==200) {
            document.getElementById("txthint").innerHTML= 
                    this.responseText;
        }
    }
    req.open("GET","gethint.php?q="+str,true);
    req.send();
}
</script>
</head>    
<body>

<form action="">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"          
                    onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txthint"></span></p>
</body></html>