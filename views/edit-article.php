<?php
   // echo getcwd().'<br>'; 
//ici on recup l'update à réaliser
if (isset($_POST['id_article'])&isset($_POST['titre_article'])&isset($_POST['mytextarea'])){
  $id_article      = $_POST['id_article'];       
  $titre_article   = $_POST['titre_article'];
  $mytextarea      = $_POST['mytextarea'];
  // echo $id_article.$titre_article.$mytextarea;
  $aq = new Article_query($bdd);
    $article = $aq->getArticle($id_article);
    $article->setTitle($titre_article);
    $article->setText($mytextarea);
    $aq->updateArticle($article);
}
  if (isset($_POST['supp_article'])){
  $aq = new Article_query($bdd);
  $article = $aq->deleteArticle($id_article);
  }
?>
<!-- <?php echo 'index.php?action=art_update&id_article='.$id_article.'&titre_article='.$titre_article.'&mytextarea='.$mytextarea ?> -->
<div class="container">
<form method="POST">
    <input type="hidden" name="supp_article" value="delete">
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
  <form method="POST" enctype="multipart/form-data">
<button type="submit" class="btn btn-warning">Modifier</button>
    <label for="mini_img_import">Titre de l'article</label>
    <input type="hidden" name="id_article" value="<?php echo $id_article ?>" class="form-control-file" id="id_article">
    <input type="text" name="titre_article" value="<?php echo $article_title ?>" class="form-control-file" id="titre_article">

     	 <label for="mini_img_import">Image Actuelle	 <img src="<?php echo $article_preview_image ?>"></label>
  	 <!-- <label for="mini_img_import">Importer l'image miniature</label> -->
  
    <!-- <input type="file" name="mini_img" class="form-control-file" id="mini_img"> -->

    <textarea id="mytextarea" name="mytextarea"><?php echo $article_text ?></textarea>
    

    </form>

</div>

