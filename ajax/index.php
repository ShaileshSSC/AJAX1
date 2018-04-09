<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1 ajax</title>
</head>
<body>
<div>
    <h2 id="demo">Laat ajax deze tekst veranderen</h2>
    <button type="button" onclick="loadDoc()">Verander content</button>
</div>
<script>
    function loadDoc()
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById('demo').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET" , "ajax_info.txt" , true);
        xmlhttp.send();
    }
</script>
</body>
</html>