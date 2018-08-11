<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Mon profil</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="index.html">Accueil</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li><a href="account-orders.html">Mon compte</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Profil</li>
      </ul>
    </div>
  </div>
</div>
<!--End of Page Title-->

<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
  <div class="row">
    <div class="col-lg-4">
      <aside class="user-info-wrapper">
        <div class="user-cover" style="background-image: url(<?php echo img_url('account/pharmaciejupsin9-2.jpg'); ?>);">
          <div class="info-label" data-toggle="tooltip" title="Vous avez actuellement 290 j'aime"><i class="icon-award"></i>290 j'aime</div>
        </div>
        <div class="user-info">
          <!--<div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="img/account/user-ava.jpg" alt="User"></div>-->
          <div class="user-data">
            <h4 class="h5">Sonfresh Pharma</h4><span>Inscrit le 17 Juillet 2018</span>
          </div>
        </div>
      </aside>

      <nav class="list-group">

        <a class="list-group-item active" href="<?php echo base_url().'accueil/monCompte'; ?>">
          <i class="icon-user"></i>Profil
        </a>

        <a class="list-group-item" href="<?php echo base_url().'accueil/adresse'; ?>">
          <i class="icon-map-pin"></i>Addresses
        </a>

        <a class="list-group-item" href="account-address.html">
          <i class="icon-lock"></i>Changer mot de passe
        </a>

        <a class="list-group-item with-badge" href="<?php echo base_url().'accueil/medicament'; ?>">
          <i class="icon-tag"></i>Mes médicaments
          <span class="badge badge-default badge-pill">4</span>
        </a>
      </nav>
    </div>

    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      <form class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-fn">Nom commercial</label>
            <input class="form-control" type="text" id="account-fn" value="Sonfresh Pharma" required>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-email">Adresse e-mail</label>
            <input class="form-control" type="email" id="account-email" value="petersonalexis14@yahoo.fr" disabled>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="account-phone">Numéro de téléphone</label>
            <input class="form-control" type="text" id="account-phone" value="3359 7570" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="account-phone">Autorisation du MSPP</label>
            <div class="custom-file">
              <input class="custom-file-input" type="file" id="file-input">
              <label class="custom-file-label" for="file-input">Choisir un fichier...</label>
            </div>
          </div>
        </div>

        <!--<div class="form-group row">
            <div class="col-10">
              <div class="custom-file">
                <input class="custom-file-input" type="file" id="file-input">
                <label class="custom-file-label" for="file-input">Choose file...</label>
              </div>
            </div>
          </div>-->
        
        <div class="col-12">
          <hr class="mt-2 mb-3">
          <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div class="custom-control custom-checkbox d-block">
              <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
              <label class="custom-control-label" for="subscribe_me">S'inscrire à notre Newsletter</label>
            </div>
            <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Mettre à jour</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>