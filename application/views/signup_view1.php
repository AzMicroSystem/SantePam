
<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="jumbotron">
			  <h1 class="display-4">Hello, world!</h1>
			  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			  <hr class="my-4">
			  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</div>
		</div>

		<div class="col-8">
			<div class="jumbotron">
	      		<?php echo form_open('accueil/creationCompte'); ?>
		       <form action="" name="formChoix" id="formChoix" method="POST">
		         <div class="form-group">
		          <label> Créer le compte en tant que :</label>
		            <?php echo $this->session->flashdata('msg'); ?>
		            <select class="form-control" name="centre" id="centre">
		              <option value="Pharmacie" id="pharma">Pharmacie</option>
		              <option value="CentreHospita" id="CentreHospita">Centre hospitalier</option>
		              <option value="Professionnel" id="perso">Professionnel de santé</option>
		              <option value="Assurance" id="asure">Assuré SantePam</option>
		            </select>
		          </div>

		            <div class="form-group" id="divNomCommercial">
		                <input type="text" class="form-control" name="nomCommercial" id="nomCommercial" placeholder="Entrer le nom commercial" value="<?php echo set_value('nomCommercial'); ?>" />
		            
		            </div>   

		           <div class="form-group" id="divNom">
		                <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrer Votre nom" value="<?php echo set_value('nom'); ?>" />
		                
		            </div>
		              
		            <div class="form-group" id="divPrenom">
		                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrer votre prénom" value="<?php echo set_value('prenom'); ?>" />
		                
		            </div>

		            <div class="form-group">
		                <input type="text" class="form-control" name="email" id="email" placeholder="Entrer votre e-mail " value="<?php echo set_value('email'); ?>" />
		               
		            </div>

		            <div class="clearfix"></div><hr />
		                 <div class="form-group">
		                 <button type="submit" id="btn" class="btn btn-block btn-primary" name="btn-signup">
		                      <i class="glyphicon glyphicon-open-file"></i>&nbsp;S'inscire
		                 </button>
		            </div>
		            <br />

		            <label>J'ai déja un compte ! <a href="#">Se connecter</a></label>
		            <br>
		            <label><a href="#">Mot de passe oublié</a></label>

		      </form>
		      <?php echo form_close(); ?>
	    	</div>
		</div>
	</div>  
</div>

