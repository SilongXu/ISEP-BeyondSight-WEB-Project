<!DOCTYPE html>
<html >

    <?php include "includes/header.php" ?>

    <body>
    	<!-- Menu Bar -->
    	<?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>

        <script src="js/jquery-3.5.1.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <div class="form-group">
            <input class="from-control" type="text" id="search-user" value="" placeholder="Rechercher un utilisateur"/>
        </div>

        <div class="form-group2">
            <div id="result-search"></div>
        </div>



        <script>
            
            $(document).ready(function(){
                $('#search-user').keyup(function(){
                    $('#result-search').html('');

                    var utilisateur = $(this).val();
                    if (utilisateur !="") {
                        $.ajax({
                            type:'GET',
                            url: 'includes/rechercheUtilisateurs.php',
                            data: 'user=' + encodeURIComponent(utilisateur),
                            success: function(data){
                                if (data != "") {
                                    $('#result-search').append(data);
                                }else{
                                    document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px;'>Aucun utilisateur</div>"
                                }
                                
                            }
                            
                        });
                    }
                        
                });
            });


        </script>








    </body>
</html>