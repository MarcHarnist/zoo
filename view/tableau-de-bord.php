<article class="row">
	<header class="col-lg-12 p-3">
		<h2 class="h1 col-lg-12 ml-0 text-muted">Tableau de bord</h2>
		<h3 class="col-lg-12 text-success">
			<i>
				<?php
					if(isset($_GET['nourrir'])) echo 'Bravo! Les animaux avaient faim.';
					if(isset($_GET['soigner'])) echo 'Bravo! Les animaux avaient besoin de soins';
				?>
			</i>
		</h3>
	</header>
	<?php
		foreach($catalogue as $id => $image_name){
			?>

				<div class="card m-3" style="width: 18rem;">
				  <img class="card-img-top" src="<?=$repertory.$image_name;?>.jpg" alt="<?=$image_name;?>">
				  <div class="card-body">
					<h5 class="card-title"><?=ucfirst($image_name);?></h5>
					<p class="card-text">Cette animal a peut-être faim ou voudrais des soins. Choisissez une action.</p>
					<a href="<?=PAGE_URL;?>tableau-de-bord&nourrir=<?=$image_name;?>" class="btn btn-primary">Nourrir</a>
					<a href="<?=PAGE_URL;?>tableau-de-bord&soigner=<?=$image_name;?>" class="btn btn-primary">Soigner</a>
				  </div>
				</div>
			<?php
		}
		?>
	</form>
</article>