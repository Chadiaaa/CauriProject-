<?php 
include VIEWPATH.'includes/header.php';
?>
<div class="col-md-8 col-md-offset-2">

    <div class="contain-fluid">
      <div class="row">
        <article class="col-xs-12 col-sm-12 col-mid-3 col-lg-3">
           
        </article>
        <article class="col-xs-12 col-sm-12 col-mid-6 col-lg-6">
             
        </article >
      </div>
      <form action="<?=base_url('/Welcome/save_employe/')?>"  method="post">

           
      <div class="col-md-6">
            <label>Matricule</label>
            <input type="text" name="matricule" required="" value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>

      <div class="col-md-6">
            <label>NomEmploye</label>
            <input type="text" required="" name="nom"  value="" size="50" class="form-control" placeholder="">
            
            <label></label>
      </div>
      <div class="col-md-6">
            <label>PrenomEmploye</label>
            <input type="text" required="" name="prenom"  value="" size="50" class="form-control" placeholder="">
            
            <label></label>
      </div>
      <div class="col-md-6">
            <label>AnneNaissance</label>
            <input type="number" name="anne" required="" value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>
            <div class="col-md-6">
            <label>Telephone</label>
            <input type="number" name="telephone" required="" value="" size="50" class="form-control" placeholder="">

            <label></label>
      </
      
      <div class="col-md-6">
            <label>RolleEmploye</label>
            <select name="role" type="text" class="form-control" value="">
              <option>Choisir Role</option>
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>

            <label></label>
      </div>
    <div class="col-md-6">
            <label>UsernameEmploye</label>
            <input type="text" name="username" required=""  value="" size="50" class="form-control" placeholder="">

            
      </div>
      <div class="col-md-6">
            <label>Password</label>
            <input type="text" name="password" required=""  value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>

    <div class="col-md-6 col-md-offset-2">
            <label> </label>
            <input type="submit" value="Save" class="form-control btn btn-primary">
    </div>
    </form>      
     </div>
    </div>
<?php 
include VIEWPATH.'includes/footer.php';
?>