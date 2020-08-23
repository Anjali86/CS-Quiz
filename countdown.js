
           
           setInterval(function(){
           
           var xmlhttp= new XMLHttpRequest();
           xmlhttp.open("GET", "response.php",false);
           xmlhttp.send(null);
           document.getElementById("timmer").innerHTML=xmlhttp.responseText;
           },1000);
           
         
