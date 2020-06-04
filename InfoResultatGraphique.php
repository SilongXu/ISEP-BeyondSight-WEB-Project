<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
        <title>Graph</title>
    </head>

    <?php include "includes/header.php" ?>

    <body class="background_graphique">
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>


        <!--<div id="bgConnexion"></div>-->

        <div class="graphiqueInfos">
            <canvas id="score"></canvas>
        </div>
            
        <script>
            var dataScoreMoyen = [];
            var dataScoreUser = [];
            <?php
                
                $db=new mysqli("localhost:3308","root","","beyondsight");
                $sql1 ="SELECT AVG(score) FROM resultats GROUP BY test ORDER BY test";
                $resultat1=$db ->query($sql1);
                if($resultat1){
                    while($attr1 = $resultat1->fetch_row()){

            ?>  
                dataScoreMoyen.push(<?php echo $attr1[0];?>);
            <?php 
                }
            }  
            ?>

            <?php
                $sql2 = "SELECT MAX(score) FROM resultats WHERE idUtilisateur=". $_SESSION['idUtilisateur'] ." GROUP BY test ORDER BY test";
                $resultat2=$db ->query($sql2);
                if($resultat2){
                    while($attr2 = $resultat2->fetch_row()){
            ?> 
                dataScoreUser.push(<?php echo $attr2[0];?>);
            <?php 
                }
            }  
            ?>
          

            var ctx = document.getElementById('score').getContext('2d');
    
            var chart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ['Score total','Capteur cardiaque','Capteur température','Reconnaissance de tonalité','Réaction stimulus visuel'],
                    datasets: [{
                    label: 'Score moyen des utilisateurs',
                    data: dataScoreMoyen,
                    backgroundColor: ['rgba(26, 117, 255, 0.2)'],
                    borderColor: ['rgba(27, 118, 255,0.2)'],
                    borderWidth: 1,
                    pointBorderColor: '#fff',
                    pointBackgroundColor: 'rgba(26, 117, 255, 0.2)',
                        radius: 5,
                        pointRadius: 5,
                        pointBorderWidth: 5,
                        pointHoverRadius: 7
                },{
                    label: 'Votre score',
                    data: dataScoreUser,
                    backgroundColor: ['rgba(255, 51, 51, 0.2)'],
                    borderColor: ['rgba(255, 52, 52, 0.2)'],
                    borderWidth: 1,
                    pointBorderColor: '#fff',
                    pointBackgroundColor: 'rgba(255, 51, 51, 0.2)',
                        radius: 5,
                        pointRadius: 5,
                        pointBorderWidth: 5,
                        pointHoverRadius: 7
                    }
                    ]
                },
                options : {
                    title: {
                    display: true,
                    text: 'Votre score comparé à la moyenne'
                    },
                    /*scale: {
                        ticks: {
                            min: 0,
                            max: 100
                        }
                         
                    }*/
                    scale: {
                        ticks: {
                            min: 0,
                            max: 100,
                            fontSize:15
                        },
                        pointLabels: { fontSize:15 },
                        fontColor: 'black'
                    }
                }    
            });
        </script>
    </body>
</html>