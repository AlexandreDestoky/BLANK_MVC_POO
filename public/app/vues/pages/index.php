<?php
/*
  ./app/vues/posts/index.php
  Details de la page 1
  Variables disponibles : 
   - $page : OBJ Page (id,titre,texte)

 */
 ?>

 <h1><?php echo $page->getTitre();?></h1>
 <div>
 <?php echo $page->getTexte();?>
 </div>
