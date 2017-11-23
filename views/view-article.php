<?php
	require_once('../../public/view/header.inc.php');
?>

	<?php echo $article_title ?>
<div class="container">
  <form method="post">
  	 <label for="mini_img_import">Titre de l'article</label>
    <input type="text" name="titre_article" class="form-control-file" id="titre_article" value="">
  	 <label for="mini_img_import">Importer l'image miniature</label>
    <input type="file" name="mini_img" class="form-control-file" id="mini_img">
    <textarea id="mytextarea">On attend votre article ici! Vite il fait soif!</textarea>
  </form>
<script type="text/javascript" src="../../public/view/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../public/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" type="text/javascript" src="../../public/view/vendor/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="../../public/view/vendor/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="../../public/view/vendor/tinymce/edit.js"></script>
</div>
<?php require_once('../../public/view/footer.inc.php');?>