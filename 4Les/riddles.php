<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт</title>
    <link rel="stylesheet" href="style.css">
    <script>
        var score = 0;

        function checkAnswer(inputId, answers){
            var userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            for(var i = 0; i < answers.length; i++){
                if(userAnswer == answers[i]){
                    score++;
                    break;
                }
            }
        }

        function checkAnswers(){
            checkAnswer("userAnswer1", ["сон", "сноведение"]);
            checkAnswer("userAnswer2", ["морской", "подводной"]);
            checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

            alert("Вы отгадали " + score + " загадок");
        }
    </script>
</head>
<body>
<div class="content">
<?php
    include "menu.php";
?>

    <div class="contentWrap">
        <div class="content">
            <div class="center">
            
                <h1>Игра в загадки</h1>

                <div class="box">

                    <?php
                        if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && 
                            isset($_GET['userAnswer3'])){
                            $userAnswer = $_GET["userAnswer1"];
                            $score = 0;
                            if($userAnswer == "сон" || $userAnswer == "сноведение"){
                                $score++;
                            }

                            $userAnswer = $_GET["userAnswer2"];
                            $score = 0;
                            if($userAnswer == "морской" || $userAnswer == "подводной"){
                                $score++;
                            }

                            $userAnswer = $_GET["userAnswer3"];
                            $score = 0;
                            if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
                                $score++;
                            }

                            echo "Вы угадали " . $score . " загадок";
                        }
                    ?>

                    <form method="GET">
                        <p>Что можно увидеть с закрытыми глазами?</p>
                        <input type="text" name="userAnswer1">

                        <p>Какой болезнью никто не болеет на суше?</p>
                        <input type="text" name="userAnswer2">

                        <p>Какой конь не ест овса?</p>
                        <input type="text" name="userAnswer3">

                        <br>
                        <a href="#" onclick="checkAnswers();">Ответить</a>
                    </form>

                </div>

            </div>
        </div>
    </div>

</div>



<div class="footer">
    Copyright &copy; Vladislav
</div>

</body>
</html>