<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table width=100%>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Yesr</td>
                <td>StudentID</td>
            </tr>

            <tbody id=info>

            </tbody>
        </thead>
    </table>
    <button type="button" onclick="loadDoc()">change content</button>

    <script>
        function loadDoc(){
            let xttp = new XMLHttpRequest();
            xttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    let data = JSON.parse(this.responseText);
                    console.log(data);

                    for(let i = 0; i < data.length; i++){
                        document.getElementById('info').innerHTML += `
                            <tr>
                                <td>${data[i].id}</td>
                                <td>${data[i].name}</td>
                                <td>${data[i].yesr}</td>
                                <td>${data[i].std.ID}</td>
                                <td>${data[i].id}</td>
                            </tr>
                        
                        `
                    }
                }
            }
            document.getElementById('info').innerHTML='';
            xttp.open("GET", 'index.php', true)
            xttp.send();
        }
        
    </script>
</body>
</html>