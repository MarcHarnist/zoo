<article class="row">
	<header class="col-lg-12 p-3">
		<h2 class="h1 col-lg-12 ml-0 text-muted">Achetez vos animaux</h2>
	</header>
	<p>Le propriétaire du zoo vous a recruté, il compte sur vous pour faire tourner son affaire: il vous demande de commander les animaux à son fournisseur habituel. Choisissez les animaux et leur quantité.
	</p>
	
	<form class="row was-validated" method="post" action="<?=PAGE_URL;?>depart">
		<?php
			foreach($catalogue as $image_name){
				?>
				<div class="form-group col-lg-2">
					<img class="rounded w-100" src="<?=$repertory.$image_name;?>.jpg" alt="<?=$image_name;?>">
					<select class="custom-select w-100 mt-1" name="<?=$image_name;?>" required>
						<?php
							for($i=1; $i<10; $i++)//$i = nombre d'animaux maximum par espèce
							{
								?>
										<option value="<?=$i;?>"><?=$i;?></option>
								<?php
							}
						?>
					</select>
				</div>
				<?php
			}
		?>
		<button type="submit" class="btn btn-primary">CONTINUER</button>  
	</form>
</article>