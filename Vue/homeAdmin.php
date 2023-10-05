<?php 
require_once('../Controller/indexAdmin.php'); 

include_once('navAdmin.php');
?>
<div class="py-5" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
    <main class="container mt-5">
      <div class="text-center" id="titre">
        <h2>Page admin</h2>
      </div>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="../assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Ajout nouvel Admin</small></h3>
            </div>
            <div class="mt-auto">
              <a href="?routing=registerAdmin" class="btn btn-primary mt-4">Go</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/834453-garcon-avec-des-points-d-interrogation-vectoriel.jpg" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Présentation</small></h3>
            </div>
            <div class="mt-auto">
              <a href="?routing=SumPresAdmin" class="btn btn-primary mt-4">Go</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/bouclier.jpeg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="s-en-premunir" id="text"><small>Quiz</small></h3>
            </div>
            <div class="mt-auto">
              <a href="?routing=quizAdmin" class="btn btn-primary mt-4">Go</a>
            </div>
          </div>
        </div>
      </div>
    </main>
</div>
<?php include_once('footerAdmin.php');
    
