
<!DOCTYPE html>
<html>
    <?php include "includes/header.php" ?>

    <body>
        <!-- Menu Bar -->
        <?php include "includes/menubar.php" ?>
        <!-- Bouton Search-->
        <?php include "includes/searchbar.php" ?>

        <script src='includes/faq.js' async></script>

    	<!-- FAQ Page 1 -->
    	<div class = "faq_div_1">
    	</div>

        <div class = "faq_div_2" id='FAQ2'>
            <h3 class = "question"><?php echo $lang['faq_question1']?><h3/>
            <p class = "answer" id="answer2"><?php echo $lang['faq_reponse1']?></p>
        </div>
        <div class = "faq_div_3" id='FAQ3'>
            <h3 class = "question"><?php echo $lang['faq_question2']?><h3/>
            <p class = "answer" id="answer3"><?php echo $lang['faq_reponse2']?><p/>
        </div>
        <div class = "faq_div_4" id='FAQ4'>
            <h3 class = "question"><?php echo $lang['faq_question3']?><h3/>
            <p class = "answer" id="answer4"><?php echo $lang['faq_reponse3']?><p/>
        </div> 
        <div class = "faq_div_5" id='FAQ5'>
            <h3 class = "question"><?php echo $lang['faq_question4']?><h3/>
            <p class = "answer" id="answer5"><?php echo $lang['faq_reponse4']?><p/>
        </div>
        <div class = "faq_div_6" id='FAQ6'>
            <h3 class = "question"><?php echo $lang['faq_question5']?><h3/>
            <p class = "answer" id="answer6"><?php echo $lang['faq_reponse5']?><p/>
        </div> 
        
        <?php include "includes/footer.php" ?>

    </div>
    </body>
</html>