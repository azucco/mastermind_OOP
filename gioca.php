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
    $tavolo = new Tavolo(5, 10, $set);
    $width = $tavolo->getWidth();
    $lenght = $tavolo->getLenght();
    $nome = $player->getName();
    $combo = $tavolo->getCombo();
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
    <h1>Benvenuto <b><?php echo ucfirst($nome); ?></b>!</h1>
    <div class="col-sm-6">
        <br>
        <div>
            <button type="button" class="btn btn-primary btn-block">Fai il tentativo</button>
        </div>
        <div class="well well-sm">
            <?php
            foreach($set as $pin){
                ?>
                <a href="#" style="color: <?php echo $pin->getColor(); ?>; font-size: 2em;" onclick="scriviPin('<?php echo $pin->__toString(); ?>', '<?php echo $pin->getColor(); ?>')"><?php echo $pin; ?></a>
                <?php 
            }
            ?>
        </div>
    </div>
    <div class="col-sm-6">
    <br>
    Combinazione
    <div class="well well-sm">
            <?php
            foreach($combo as $pin){
                ?>
                <span style="color: <?php echo $pin->getColor(); ?>; font-size: 2em;"><?php echo $pin; ?></span>
                <?php 
            }
            ?>
        </div>
    </div>
   
    <div class="well well-sm">
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
                        for($n = 1; $n <= $width; $n++){
                            ?>
                            <th class="text-center" scope="col"></th>
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
                            for($j = 1; $j <= $width; $j++){
                                ?>
                                <td id="td_<?php echo $l . '_' . $j; ?>" onclick="setTdActive('td_<?php echo $l . '_' . $j; ?>')">
                                   
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

<script>
    var allTd = document.getElementsByClassName("borderTdActive");

    function scriviPin(value, color){
        allTd[0].setAttribute("style", "color:"+color+";")
        allTd[0].innerHTML = value;
    }

    function setTdActive(id){
        for (let td of allTd) {
            td.classList.remove("borderTdActive");
        }
        var tdActive = document.getElementById(id);
        tdActive.classList.add("borderTdActive");
    }
</script>