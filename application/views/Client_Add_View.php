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
      <form action="<?=base_url('/Welcome/enregistrement/')?>"  method="post">

           
      <div class="col-md-6">
            <label>Nomclient</label>
            <input type="text" name="nom" required="" value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>

      <div class="col-md-6">
            <label>PrenomClient</label>
            <input type="text" required="" name="prenom"  value="" size="50" class="form-control" placeholder="">
            
            <label></label>
      </div>
      <div class="col-md-6">
            <label>Telephoneclient</label>
            <input type="text" name="telephone" required="" value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>
      <div class="col-md-6">
            <label>AdresseClient</label>
            <input type="text" name="addresse"  required=""  value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>
      <div class="col-md-6">
            <label>Numcompte</label>
            <input type="number" name="compte" required=""  value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>
      <div class="col-md-6">
            <label>Soldecompte</label>
            <input type="number" name="solde" required=""  value="" size="50" class="form-control" placeholder="">

            <label></label>
      </div>
      

      <div class="col-md-6">
            <label>TypeCompte</label>
            
            <select type="text" name="type" class="form-control">
              <option>---Choisir---</option>
              <option value="CompteCourant">CompteCourant</option>
              <option value="CompteEpargne">CompteEpargne</option>
            </select>

            <label></label>
      </div>


      <div class="col-md-6">
            <label> </label>
            <input type="submit" value="Save" class="form-control btn btn-primary">
      </div>
    </form>      
     </div>
    </div>
</body>
</html>
<?php 
include VIEWPATH.'includes/footer.php';
?>