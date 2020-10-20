
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
     <link rel="stylesheet"  type="text/css" href="plantilla/css/estilos.css">
      
</head>

<body id="myselect">
<a>BIENVENIDO</a>
<form >

    <img class="avatar" src="images/imagen1.png"/>
    
<br>
<label for="">Seleccione el color</label>
<select id="color" onchange="colorChanger()">
   <option value="" selected disabled hidden>selecciona el color</option>
    <option class="pinkText" value="pink">rosado</option>
    <option class="redText" value="red">rojo</option>
    <option class="greenText" value="green">Verde</option>b
    <option class="yellowText" value="yellow">amarillo</option>
</select>
</form>


<script>
    function colorChanger(){
    var selectValue=document.getElementById("color").value;
    document.body.style.backgroundColor=selectValue;
    random_publicidad_sidebar_1()
}
</script>
</body>
</html>
