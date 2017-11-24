$(document).ready(function(){
    $(".lien-suppr").click(function(evt) {
        // stopper le comportement du lien 
        evt.preventDefault();
        if(confirm('Etes-vous sur de vouloir supprimer ce message ?')) {
            document.location = $(this).attr('href');
        }
    });
});