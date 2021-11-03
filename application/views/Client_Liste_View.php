<?php 
include VIEWPATH.'includes/header.php';
?>
    <div class="container-fluid" style="background-color: white">

        <div class="container-fluid">
            <div class="row">
                     
                <div class="col-lg-12" style=" margin-bottom: 5px">
                    <div class="row" style="" id="conta">
                    <br>
                     </div>
                    <div class="row" id="conta" style="margin-top: -10px">
                         <div class="col-lg-12 col-md-12">                                  
                            <h4 class=""><b>Liste des Clients</b>
                               <a href="<?= base_url('/Welcome/')?> " 
                                 class="btn btn-primary  pull-right">Add New
                               </a>
                            </h4>
                         </div>

                    </div>

                </div>

                  <div class="col-lg-12" style="padding: 5px">
               
                    <div class="table-responsive">
                        <?php 
                        echo $this->table->generate($client);

                        ?>
                        
                    </div>
                 </div>
          </div>
      </div>
  </div>
  

<?php 
include VIEWPATH.'includes/footer.php';
?>