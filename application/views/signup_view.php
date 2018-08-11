<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Se connecter / Créer un compte</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="index.html">Acceuil</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Se connecter / S'inscrire</li>
      </ul>
    </div>
  </div>
</div>

<!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-md-6">
          <form class="card" method="post">
            <div class="card-body">
              <h4 class="margin-bottom-1x">Se connecter</h4>
              <div class="form-group input-group">
                <input class="form-control" type="email" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
              </div>
              <div class="form-group input-group">
                <input class="form-control" type="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
              </div>
              <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                  <label class="custom-control-label" for="remember_me">souviens-toi de moi</label>
                </div><a class="navi-link" href="account-password-recovery.html">Mot de passe oublié?</a>
              </div>
              <div class="text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">Se connecter</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <div class="padding-top-3x hidden-md-up"></div>
          <h3 class="margin-bottom-1x">Pas de compte? S'inscrire</h3>
          <p>Faire connaitre vos produits et/ou services en moins d'une minute</p>
    
          <?php echo form_open('accueil/creationCompte'); ?>
          <form class="row" method="post" id="formCompte">
            <!-- Selection -->
            <div class="col-sm-12">
              <div class="form-group">
                <?php echo $this->session->flashdata('msg'); ?>
                <label for="select-input">Choisir</label>

                <select class="form-control" name="centre" id="centre">
                  <option value="Pharmacie" id="pharma">Pharmacie</option>
                  <option value="CentreHospita" id="CentreHospita">Centre hospitalier</option>
                  <option value="Professionnel" id="perso">Professionnel de santé</option>
                </select>
              </div>
            </div><!--Fin Selection -->

            <!-- Selection type centre hospitalier -->
            <!--<div class="col-sm-12">
              <div class="form-group">
                <select class="form-control" name="choixTypeCentre" id="choixTypeCentre">
                  <option value="hopital" id="hopital">Hopital</option>
                  <option value="centreSante" id="centreSante">Centre de santé</option>
                  <option value="clinique" id="clinique">Clinique</option>
                  <option value="dispensaire" id="dispensaire">Dispensaire</option>
                </select>
              </div>
            </div>--><!--Fin Selection type centre hospitalier -->

            <!-- Nom comercial -->
            <div class="col-sm-12" id="divNomCommercial">
              <div class="form-group">
                <!--<label for="reg-ln" id="lblNomCommercial">Nom commercial</label>-->
                <input class="form-control" type="text" name="nomCommercial" id="nomCommercial" value="<?php echo set_value(''); ?>" placeholder="Veuillez saisir le nom commercial">
              </div>
            </div><!--Fin Nom comercial -->

            <!-- Prenom -->
            <div class="col-sm-12" id="divPrenom">
             <div class="form-group">
                <!--<label for="reg-ln" id="lblPrenom">Prénom</label>-->
                <input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo set_value(''); ?>" placeholder="Veuillez saisir votre prénom">
              </div>
            </div><!--Fin Prenom -->

            <!-- Nom -->
            <div class="col-sm-12" id="divNom">
              <div class="form-group">
                <!--<label for="reg-ln" name="lblNom" id="lblNom">Nom</label>-->
                <input class="form-control" type="text" name="nom" id="nom" value="<?php echo set_value(''); ?>" placeholder="Veuillez saisir votre nom">
              </div>
            </div><!--Fin Nom -->

            <!-- Email -->
            <div class="col-sm-12">
              <div class="form-group">
                <!--<label for="reg-ln" id="lblNomCommercial">Nom commercial</label>-->
                <input class="form-control" type="text" name="email" id="email" value="<?php echo set_value(''); ?>" placeholder="Veuillez saisir votre email">
              </div>
            </div><!--Fin Email -->

            <div class="col-12 text-center text-sm-right">
              <button class="btn btn-primary margin-bottom-none" type="submit">S'inscrire</button>
            </div>
          </form>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>