<!-- <?php // session_start();?> -->
<?php
    // $score = '';
    // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
    // if (isset($_GET['routing'])) {
    //     $score = $_GET['routing'];
    // }
    // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
    // switch ($score) {
    //     case 'finish':
    //         require_once('finishQuiz.php');
    //         break;
    //     }
?>
<section class="hero is-fullheight-with-navbar is-flex is-align-items-center is-justify-content-center" style="background-image: url('assets/PrésentationCyber-harcèlement-2.png');">
    <div class="hero-body">
        <div class="columns-container is-centered">
            <?php
            require_once('model/quiz.php');
            require_once('model/question.php');
            require_once('model/answer.php');
            require_once('data/recupQ.php');



// Récupère le quiz avec l'ID 1 en utilisant la fonction getQuiz() du fichier recupQ.php
            $quiz = getQuiz(1);
// Initialisation de l'index des questions à 1
            $questionIndex = 1;
            ?>
<!-- Formulaire pour soumettre les réponses du quiz -->
                <form method="post" action="?routing=quizOne&send=<?= $quiz->getId() ?>">
                    <div class="column is-centered" id="quiz">
                        <?php 
// Boucle pour afficher toutes les questions du quiz
                        foreach ($quiz->getQuest() as $question) {
                        ?>
<!-- Div pour afficher une question à la fois, display: none; pour cacher les questions-->
                            <div class="question" id="title" style="display: none;">
                                <div class="rond">
                                    <!-- Affiche le numéro de la question -->
                                    <h4 class="subtitle has-text-centered" >Question <?= $questionIndex ?></h4>
                                </div>
                                <!-- Affiche le libellé de la question -->
                                <h1 class="title has-text-centered mt-5 is-size-5-mobile" id="titre"><?= $question->getLabelQuestion()?></h1>
                                <div class="rep has-text-centered" id="text">
                                    <?php
                                    // Boucle pour afficher toutes les réponses possibles pour cette question
                                    foreach ($question->getAnswers() as $answer) {
                                    ?>
                                        <div>
                                            <!--Type radio because only one choice is possible-->
                                            <!-- name de l'input radio est l'ID de la question pour associer la réponse à la question -->
                                            <!-- value de l'input radio est l'ID de la réponse -->
                                            <!--L'attribut "required" rend l'input radio obligatoire -->
                                            <input type="radio" name="<?= $question->getId() ?>" id="question-<?= $question->getId() ?>-answers-<?= $answer->getId() ?>" value="<?= $answer->getId() ?>" required="required" />
                                            <!-- Affiche le libellé de la réponse -->
                                            <label for="question-<?= $question->getId() ?>-answers-<?= $answer->getId() ?>"><?= $answer->getAnswerLabel() ?></label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                    <?php
                    // Incrémente l'index des questions pour afficher le numéro de la prochaine question
                    $questionIndex ++;
                        }
                    ?>
                    </div>
                    <!--Bouton pour changer de page, les ancres sont dans le head-->
                    <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
                        <a id="previous-question" class="pagination-previous" style="display: none;">Précédent</a>
                        <a id="next-question" class="pagination-next">Suivant</a>
                        <button id="submit-quiz" class="pagination-next" type="submit" style="display: none;"><a href="?routing=quizTraitment">Envoyer</button>
                    </nav>
                </form>
                <?php
                // if(isset($_POST['submit'])) {
                //     $submit =
                // }
                ?>
        </div>
    </div>
</section>
<script>
    const nextQuestionButton = document.getElementById("next-question");
    const previousQuestionButton = document.getElementById("previous-question");
    const submitButton = document.getElementById("submit-quiz");
    const questions = document.getElementsByClassName("question");
    const numberOfQuestions = questions.length;
    let currentQuestionIndex = 0;

    questions[0].style.display = "block";

    previousQuestionButton.addEventListener('click', previousQuestion);
    nextQuestionButton.addEventListener('click', nextQuestion);

    function previousQuestion() {
        submitButton.style.display = "none";
        if(currentQuestionIndex > 0) {
            nextQuestionButton.style.display = "block";
            questions[currentQuestionIndex - 1].style.display = "block"
            questions[currentQuestionIndex].style.display = "none";
            currentQuestionIndex--;
        }
        if(currentQuestionIndex === 0) {
            previousQuestionButton.style.display = "none";
        }
    }

    function nextQuestion() {
        previousQuestionButton.style.display = "block";
        if(currentQuestionIndex <= numberOfQuestions ) {
            if(currentQuestionIndex !== 0) {
                questions[currentQuestionIndex - 1].style.display = "none";
            }
            questions[currentQuestionIndex].style.display = "none";
            questions[currentQuestionIndex + 1].style.display = "block"
            currentQuestionIndex++;
            if(currentQuestionIndex + 1 === numberOfQuestions) {
                nextQuestionButton.style.display = "none";
                submitButton.style.display = "block";
            }
        } else {
            console.log("Toutes les questions ont été affichés");
        }
    }

</script>