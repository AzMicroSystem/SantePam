<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Adresse</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="index.html">Accueil</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li><a href="account-orders.html">Mon compte</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Adresse</li>
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

        <a class="list-group-item" href="<?php echo base_url().'accueil/monCompte'; ?>">
          <i class="icon-user"></i>Profil
        </a>

        <a class="list-group-item active" href="<?php echo base_url().'accueil/adresse'; ?>">
          <i class="icon-map-pin"></i>Adresse
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
  <h5>Adresse de contact</h5>
  <hr class="padding-bottom-1x">
  <form class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="account-company">Adresse</label>
        <input class="form-control" type="text" id="account-company" value="4 Impasse Mondestin">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="account-country">Ville</label>
        <select class="form-control" id="account-country">
          <option>Choisir une ville</option>
          <option selected>Port-au-Prince</option>
          <option>Hinche</option>
          <option>Cap-Haitien</option>
          <option>Cayes</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="account-city">Commune</label>
        <select class="form-control" id="account-city">
          <option>Choisir une commune</option>
          <option>Delmas</option>
          <option>Pétion-Ville</option>
          <option selected>Tabarre</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="account-zip">Code postal</label>
        <input class="form-control" type="text" id="account-zip" required>
      </div>
    </div>
   
    <div class="col-12 padding-top-1x">
      
      <hr class="margin-top-1x margin-bottom-1x">
      <div class="text-right">
        <button class="btn btn-primary margin-bottom-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-check-circle" data-toast-title="Success!" data-toast-message="Your address updated successfuly.">Mettre à jour</button>
      </div>
    </div>
  </form>
</div>
  </div>
</div>