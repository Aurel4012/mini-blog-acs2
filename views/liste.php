<?php
require_once('public/view/header.inc.php');
?>
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
<div class="col-md-4 float-right">
          <div class="card my-4 sticky-top mt-5">
            <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <select class="col-11">
                      
                      <option>7%</option>
                      
                      <option>15% (Ca va je gère!)</option>
                      <option>20% (C'est le dernier!)</option>
                      <option>70% (Il est des nôtres!!)</option>
                      <option>+70% (J'aoi% perdu mùon Mossepate!)</option>
                    </select>

            </div>
          </div>

        </div>

      </div>

    </div>
    </div>
    </div>
</main>
<?php
require_once('public/view/footer.inc.php');
?>