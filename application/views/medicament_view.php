<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Mes médicaments</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="index.html">Accueil</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li><a href="account-orders.html">Mon compte</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Mes médicaments</li>
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

        <a class="list-group-item" href="<?php echo base_url().'accueil/adresse'; ?>">
          <i class="icon-map-pin"></i>Adresse
        </a>

        <a class="list-group-item" href="account-address.html">
          <i class="icon-lock"></i>Changer mot de passe
        </a>

        <a class="list-group-item with-badge  active" href="<?php echo base_url().'accueil/medicament'; ?>">
          <i class="icon-tag"></i>Mes médicaments
          <span class="badge badge-default badge-pill">4</span>
        </a>
      </nav>
    </div>

    <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Médicament</th>
                  <th>Date de soumission | Actualisé</th>
                  <th>Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="navi-link" href="account-single-ticket.html">Amoxicilline</a></td>
                  <td>17/07/2018 | 17/07/2018</td>
                  <td>Antibiotique</td>  
                </tr>
                <tr>
                  <td><a class="navi-link" href="account-single-ticket.html">Amoxicilline</a></td>
                  <td>17/07/2018 | 17/07/2018</td>
                  <td>Antibiotique</td> 
                </tr>
                <tr>
                  <td><a class="navi-link" href="account-single-ticket.html">Amoxicilline</a></td>
                  <td>17/07/2018 | 17/07/2018</td>
                  <td>Antibiotique</td> 
                </tr>
                <tr>
                 <td><a class="navi-link" href="account-single-ticket.html">Amoxicilline</a></td>
                  <td>17/07/2018 | 17/07/2018</td>
                  <td>Antibiotique</td> 
                </tr>
              </tbody>
            </table>
          </div>
          <hr class="mb-4">
          <div class="text-right">
            <button class="btn btn-primary margin-bottom-none" data-toggle="modal" data-target="#openTicket">Enregistrer un nouveau médicament</button>
          </div>
        </div>
  </div>
</div>