<?php
  // echo getcwd().'<br>'; 
	require_once('view/header.inc.php');
?>

<div class="container">
  <form method="post">

    <label for="mini_img_import">Titre de l'article</label>
    <input type="text" name="titre_article" value="<?php echo $article_title ?>" class="form-control-file" id="titre_article">

     	 <label for="mini_img_import">Image Actuelle	 <img src="<?php echo $article_preview_image ?>"></label>
  	 <label for="mini_img_import">Importer l'image miniature</label>
  
    <input type="file" name="mini_img" class="form-control-file" id="mini_img">

    <textarea id="mytextarea"><?php echo $article_text ?></textarea>
    <button  type="submit" class="btn btn-warning">Modifier</button>
    <a class="lien-suppr" href="./controler/control-delete.php">
    <button href="./admin/controler/control-delete.php??id_article=3&bdd=$bdd" class="btn btn-danger lien-suppr"  method="post" name="id_article" value="<?php echo $id_article;?>">Supprimer</button></a>
    </form>
<script type="text/javascript" src="../public/view/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" type="text/javascript" src="../public/view/vendor/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/edit.js"></script>
<script type="text/javascript" src="js/action_button.js"></script>
</div>

<!-- <?php require_once('../public/view/footer.inc.php');?> Voir si éventuellement nous gardons le footer ou non? -->