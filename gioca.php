<?php
if(isset($_POST['inputName'])){
    require "classes/player.php";
    require "classes/pin.php";
    require "classes/tavolo.php";
    $player = new Player($_POST['inputName']);
    $pin_R = new Pin("red", 1);
    $pin_B = new Pin("blue", 2);
    $pin_Y = new Pin("yellow", 3);
    $pin_G = new Pin("green", 4);
    $pin_P = new Pin("purple", 5);
    $set = [$pin_R, $pin_B, $pin_Y, $pin_G, $pin_P];
    $tavolo = new Tavolo(5, 10);
    $width = $tavolo->getWidth();
    $lenght = $tavolo->getLenght();
    $nome = $player->getName();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mastermind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>    
    <script src="main.js"></script>
</head>
<body class="text-center">
    <div>
        <h1>Benvenuto <b><?php echo ucfirst($nome); ?></b>!</h1>
        <button type="button" class="btn btn-primary btn-block">Fai il tentativo</button>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                        <?php
                        for($n = 1; $n <= $width; $n++){
                            ?>
                            <th class="text-center" scope="col"><?php echo $n; ?></th>
                            <?php
                        }
                        ?>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($l = 1; $l <= $lenght; $l++){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $l; ?></th>
                        <?php
                            for($j = 0; $j < $width; $j++){
                                ?>
                                <td>
                                    <select class="form-control">
                                        <?php 
                                            foreach($set as $pin){
                                                ?>
                                                <option style="color: <?php echo $pin->getColor() ?>">
                                                    &#9673
                                                </option>
                                            <?php
                                            };
                                        ?>     
                                    </select>
                                </td>
                                <?php
                            }
                        ?>   
                        <td>
                        </td>
                    </tr>
                    <?php
                }
                ?>
              
            </tbody>
        </table>    
    </div>
       

        

</body>
</html>