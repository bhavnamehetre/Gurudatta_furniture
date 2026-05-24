<!DOCTYPE html>

<head>
    
    <script>
        function check(name)
        {
            var name=document.getElementById("name").value;
            var x=new XMLHttpRequest();
            x.open("GET","s.php?name="+name,true);
            x.send();
            x.onreadystatechange=function()
            {
                if(x.readyState==4 && x.status==200)
                {
                    document.getElementById("resp").innerHTML=x.responseText;
                }
            }
        }
        </script>
</head>
<body>
    <form method="GET">
        username:<input type="text" id="name" onkeyup="check(this.value)"><br>
        <div id="resp"></div>
</form>
</body>
</html>