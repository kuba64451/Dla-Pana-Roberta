<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul{
        list-style:none;
    }
    li{
        border-bottom: 1px solid rgba(0,0,0,0.4)
    }
    main > div:first-child{
        text-align:center;
    }
</style>
<body>
    <main>
        <div><h1>Zadanie 1</h1></div>
        <hr>
        <div>
            <ul>
                <?php 
                        $conn = mysqli_connect('localhost', 'root', "", 'wedkowanie') or die("Blad lacznosci z serwerem");
                        $q = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE lowisko.rodzaj = 2 AND ryby.id = lowisko.Ryby_id";
                        $z = mysqli_query($conn, $q) or die('Blad zaptyania');

                        while($x = mysqli_fetch_assoc($z)){
                            echo "<li><h1>Ryba: ".$x['nazwa']."</h1>";
                            echo "<p>Akwen: ".$x['akwen']."</p>";
                            echo "<p>Wojewodztwo: ".$x['wojewodztwo']."</p></li>";
                        }
                    ?>
            </ul>
        </div>
    </main>
</body>
</html>