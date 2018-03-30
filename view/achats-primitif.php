<!-- idée: pourquoi ne pas faire un programme qui lit les noms des images du catalogue et les affiche ici dans un foreach? Ainsi il suffirait d'ajouter une image dans le repertoire root/img/catalogue/ pour la voir s'afficher ici... -->


<article class="row">
	<header class="col-lg-12 p-3">
		<h2 class="h1 col-lg-12 ml-0 text-muted">Achetez vos animaux</h2>
	</header>
	<p>Le propriétaire du zoo vous a recruté, il compte sur vous pour faire tourner son affaire: il vous demande de commander les animaux à son fournisseur habituel. Choisissez les animaux et leur quantité.
	</p>
	
	
	<form class="row was-validated" method="post" action="<?=PAGE_URL;?>depart">
	
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/giraffe.jpg" 
			alt="giraffe"
			>
			<select class="custom-select w-100 mt-1" name="giraffe" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>

		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/chameau.jpg" 
			alt="chameau"
			>
			<select class="custom-select w-100 mt-1" name="chameau" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/lion.jpg" 
			alt="lion"
			>
			<select class="custom-select w-100 mt-1" name="lion" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>

		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/flamant.jpg" 
			alt="flamant"
			>
			<select class="custom-select w-100 mt-1" name="flamant" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/gazelle.jpg" 
			alt="gazelle"
			>
			<select class="custom-select w-100 mt-1" name="gazelle" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/loutre.jpg" 
			alt="loutre"
			>
			<select class="custom-select w-100 mt-1" name="loutre" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/rhinoceros.jpg" 
			alt="rhinoceros"
			>
			<select class="custom-select w-100 mt-1" name="rhinoceros" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/tortue.jpg" 
			alt="tortue"
			>
			<select class="custom-select w-100 mt-1" name="tortue" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  	  
	  
	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/singe.jpg" 
			alt="singe"
			>
			<select class="custom-select w-100 mt-1" name="singe" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
	  
	  	  	  
		  <div class="form-group col-lg-2">
			<img
			class="rounded w-100" 
			src="img/elephant.jpg" 
			alt="elephant"
			>
			<select class="custom-select w-100 mt-1" name="elephant" required>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			</select>
		  </div>
	  
	  	  
		<button type="submit" class="btn btn-primary">CONTINUER</button>  
	</form>

</article>