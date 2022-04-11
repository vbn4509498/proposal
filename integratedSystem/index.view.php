<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>引流整合監控系統</title>
    <link rel="stylesheet" href="./asset/view.css">
    <script src="https://kit.fontawesome.com/b4ff060e83.js" crossorigin="anonymous"></script>
</head>
<body class="body">
    <header>
        <div class="headiv" >
            <a href="" style="text-decoration: none; color: darkgoldenrod;">        
                <h1 class="h1">
                    引流整合監控系統
                </h1>
            </a>    
            <div class="search">
                <form action="">
                    <input type="text" placeholder="輸入病例編號" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>           
        </div>
    </header>
    <div class="tablediv">
        <table>
            <tr>
                <td><input class="tableinput" type="date" id="date"></td>
                <td>流速&ensp;</td>
                <td>酸鹼&ensp;</td>
                <td>濃度&ensp;</td>
                <td>日流速平均值&ensp;</td>
                <td>日酸鹼平均值&ensp;</td>
                <td>日濃度平均值&ensp;</td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td><form action=""><button type="submit" class="delete">刪除</button></form></td>
            </tr>
        </table>
    </div>
    <footer>

    </footer>
</body>
</html>