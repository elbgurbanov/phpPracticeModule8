<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика по PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/ll.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $surname, ' ', $name, '.' . '<br>'; 
                          echo 'Я ранее жил в городе', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные? </p>
                    <p> Изучили простые операции с ними? </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo 'Полученное число после операции сложения:', ' ', $c;
                    ?>   <br>                
                     
					<?php
                        echo $d;
                    ?>   <br> 
                    
					<?php
                        echo $dr;
                    ?>   <br> 


            </div>

            <div class="article">
                <p class="text">
                    Работа занимает у меня много времени. Много времени занимает у меня работа.
                    Работа занимает у меня много времени. Много времени занимает у меня работа.
                    Работа занимает у меня много времени. Много времени занимает у меня работа.
					Много времени занимает у меня работа. ХОХОХОХОХОХОХОХОХО
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
