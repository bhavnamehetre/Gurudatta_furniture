<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function display()
        {
            var x=new XMLHttpRequest();
            var n=documnet.getElementById("GET","a.php",true);
            x.onreadystatechange=function()
            {
                if(x.readyState==4 && x.status==200)
                {
                    documnet.getElementById("show").innerHTML=x.responseText;
                }
            }
        }
        </script>
        <input type="button" value="print" onclick="display()"><br>
        <div id="show"></div>
</body>
</html>