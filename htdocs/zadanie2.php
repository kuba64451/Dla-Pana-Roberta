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
        <div><h1>Zadanie 2</h1></div>
        <hr>
        <div>
            <ul>
                <?php 
                        $conn = mysqli_connect('localhost', 'root', "", 'wedkowanie') or die("Blad lacznosci z serwerem");
                        $z = "SELECT ryby.nazwa, okres_ochronny.wymiar_ochronny FROM okres_ochronny, ryby WHERE okres_ochronny.wymiar_ochronny < 50 AND ryby.id = okres_ochronny.Ryby_id";
                        $w = mysqli_query($conn, $z) or die('Blad zaptyania');

                        while($x = mysqli_fetch_assoc($w)){
                            echo "<li><h1>Ryba: ".$x['nazwa']."</h1>";
                            echo "<p>Wymiar ochrony: ".$x['wymiar_ochronny']."</p></li>";
                        }
                    ?>
            </ul>
        </div>
    </main>
</body>
</html>