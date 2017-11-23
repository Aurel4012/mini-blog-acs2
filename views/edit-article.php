<?php
   // echo getcwd().'<br>'; 
?>

<div class="container">
  <form method="post" method="post" action="index.php?action=art_update" enctype="multipart/form-data">

    <label for="mini_img_import">Titre de l'article</label>
    <input type="hidden" name="id_article" value="<?php echo $id_article ?>" class="form-control-file" id="id_article">
    <input type="text" name="titre_article" value="<?php echo $article_title ?>" class="form-control-file" id="titre_article">

     	 <label for="mini_img_import">Image Actuelle	 <img src="<?php echo $article_preview_image ?>"></label>
  	 <!-- <label for="mini_img_import">Importer l'image miniature</label> -->
  
    <!-- <input type="file" name="mini_img" class="form-control-file" id="mini_img"> -->

    <textarea id="mytextarea" name="mytextarea"><?php echo $article_text ?></textarea>
    <button  type="submit"  class="btn btn-warning">Modifier</button>
    
    <button href="#" class="btn btn-danger lien-suppr"  method="post" name="id_article" value="<?php echo $id_article;?>">Supprimer</button>
    </form>
<script type="text/javascript" src="../public/view/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" type="text/javascript" src="../public/view/vendor/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/edit.js"></script>
<script type="text/javascript" src="js/action_button.js"></script>
</div>

