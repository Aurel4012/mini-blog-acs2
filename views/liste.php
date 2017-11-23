<main>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">


 <!-- généré en php -->

  


<?php
foreach($liste_articles as $article){
	          
	echo '<p>Poster le '.$article->getDataUpdate().'</p><hr>';
	echo '<p>'.$article->getTitle().'</p>';
	echo ' <p class="lead">'.$article->getResume(2).'</p>';
}
?>
   </div>


      </div>

    </div>
   
</main>
