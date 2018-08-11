<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Mot de passe</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
        <li class="separator">&nbsp;</li>

        <li class="separator">&nbsp;</li>
        <li>Mot de passe</li>
      </ul>
    </div>
  </div>
</div>
<!--End of Page Title-->

<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <h3>Veuillez ajouter un mot de passe s'il vous plait!</h3>
      <?php echo $this->session->flashdata('msg'); ?>
      <ol class="list-unstyled">
        <li><span class="text-primary text-medium">1. </span>Le mot de passe doit contenir au moins huit lettres et/ou chiffres.</li>
        <li><span class="text-primary text-medium">2. </span>Le mot de passe doit avoir obligatoirement une lettre majuscule et deux chiffres.</li>
        
      </ol>
      <form class="card mt-4" action="<?php echo base_url().'accueil/monCompte'; ?>" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="email-for-pass">Mot de passe</label>
            <input class="form-control" type="password"  name="password" id="password" value="">
          </div>

          <div class="form-group">
            <label for="email-for-pass">Confirmation de mot de passe</label>
            <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" value="">
          </div>
        </div>

        <div class="card-footer">
          <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>