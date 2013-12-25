<div class="recipe">

	<?php foreach($recipe as $rec): ?>

		<h1><?=$rec['title']?></h1>

		<?php if($rec['image_url'] != ""): ?>
			<img src="<?=$rec['image_url']?>" class="recipe_image"/>
		<?php endif;?>
		<?php if($rec['recipeimages']): ?>
			<img src="<?=$rec['recipeimages']?>" class="recipe_image"/>
		<?php endif;?>

		<p><b>Ingredients: </b><br><?=$rec['ingredients_list']?></p>
		<p><b>Directions: <br></b><?=$rec['directions_list']?></p>
		<p><b>Added by: </b><?=$rec['added_by']?></p>
		<?php if($rec['url']): ?>
			<p class="small">Taken from <a href='<?=$rec['url']?>' id="recipelinks"><?=$rec['url']?></a></p>
		<?php endif;?>



	<?php endforeach; ?>



</div>
<br><br>
