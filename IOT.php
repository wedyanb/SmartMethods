<!DOCTYPE html>
<html>

<!--wedyan rebort IOT-->
<head> <style>

#Stop {
  position: absolute;
  text-aligin:center;
    left: 155px;
    top: 200px;
    width: 15%;
    padding:12px 20px;
    
}
#Right{
    position: absolute;
    left: 280px;
    top: 200px;
    width: 15%;
    border:none;
    padding:12px 20px;
    
}

#Left{
    position: absolute;
    left: 30px;
    top: 200px;
    width: 15%;
    border:none;
    padding:12px 20px;
  
}

#Forward {
   position: absolute;
    left: 155px;
    top: 150px;
    width: 15%;
    border:none;
    padding:12px 20px;
}

#Backword {
  position: absolute;
    left: 155px;
    top: 250px;
    width: 15%;
    padding:12px 20px;
    border:none;
  
}


#Stop:hover {
  background-color: Red;
  color: white;
}
#Right:hover {
  background-color:#2E86C1 ;
  color: white;
}#Left:hover {
  background-color:#2E86C1 ;
  color: white;
}
#Backword:hover {
  background-color: #2E86C1 ;
  color: white;
}
#Forward:hover {
  background-color: #2E86C1 ;
  color: white;
}

</style> </head>


<body>  <title> Control Rebort </title>

<button id="Right" onClick="movement(this.id)">
            Right
        </button>

        <button id="Left" onClick="movement(this.id)">
            Left
        </button>

        <button id="Stop" onclick="stopMove()">
            Stop
        </button>

        <button id="Forward" onClick="movement(this.id)">
            Forward
        </button>

        <button id="Backword" onClick="movement(this.id)">
            Backword
        </button>

        <p id = "text" style =
            "font-size: 24px; color: #D98880; ">
        </p>

        <script>

     var AppearText = document.getElementById("text");
         AppearText.innerHTML = "Click Button To Move Robot";
          function stopMove() {
    AppearText.innerHTML = "Click Button To Move Robot";
            function movement(clicked) {
                AppearText.innerHTML = clicked;
            }
}

        </script> </body>

        </html>