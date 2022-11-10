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
                                   
                                           
                    <?php
					  session_start();
					    $a = rand(0, 5);
                        $b = rand(0, 20);
                        $c = $a + $b;
						$_SESSION['data'] = $c;
                        echo 'Полученное число после операции сложения двух рандомных чисел:', ' ', $_SESSION['data'] . '<br>';
						echo 'Это число с типом', ' ', gettype($_SESSION['data']);
                    ?>   <br>
					
					<?php  include 'knowledge.inc.php'; ?>
					
					<?php
                        echo $d;
                    ?>   <br><br>
					
					<?php   
					    echo $a, ' ', $b, $c; 
					?>   <br>
                                         
					<?php
                        echo $dr;
                    ?>   <br><br>
					
					<?php
					echo 'PS. Рандомные числа генерируются после каждого обновления страницы.' . '<br>' . 'Попробуйте, это весело' . '<br>' . '<br>';
					echo 'PSPS. Затем эти числа складываются и полученное значение передается' . '<br>' . 'на другую страницу';
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
