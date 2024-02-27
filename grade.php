<?php
    include "array_of_questions.php";
    echo "<pre>";
    print_r($_POST);
    echo "<pre>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1><?=$_POST['name']. " " .$_POST['surname']?></h1>
        </div>
        <div class="row">
            <div class="question"><h3> Questions </h3></div>
            <div class="answer"><h3> Answers </h3></div>
            <div class="max-point"><h3> Max Point </h3></div>
            <div class="grade"><h3> Grade </h3></div>
        </div>
        <form action="grade.php" method="post">
            <?php
                $i=0;
                foreach($questions as $item):
            ?>
            <div class="row">
                <div class="question"><?=$item['question']?>
                    <input type="hidden" name="question[]" value="<?=$item['question']?>">
            </div>
                <div class="answer"><?=$_POST['answer'][$i]?></div>
                <div class="max-point"><?=$item['gr1']?></div>
                <div class="grade"><input type="text"></div>
            </div>
            <?php
                $i++;
                endforeach;
            ?>
            <div class="button">
                <label for="">Lecturer:</label>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Surname" name="Surname">
                <button>SEND</button>
            </div>
        </form>
    </div>
</body>
</html>
