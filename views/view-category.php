<div class="col-md-4 float-right">
          <div class="card my-4 sticky-top mt-5">
            <h5 class="card-header">Categories</h5>
              <div class="card-body">
                  <?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }
  catch(Exception $e){
    die('Erreur : '.$e->getMessage());
  } 
                  require_once '../model/class_category.php';
                  require_once '../model/class_category_query.php';
                  $id_categorie = 1;
                  $category_query= new CategoryQuery($bdd);
                  $category_liste= $category_query->getListeCategories($id_categorie);
                  var_dump($category_liste);
                  echo '<select>';

                  foreach ($category_liste as $value) {
                  echo "<option>".$value->getName()."</option>";
                  }
                  echo '</select class="col-11">';
                  ?>
              </div>
          </div>

</div>