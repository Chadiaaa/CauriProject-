<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/ bootstrap-select.min.js">
</script>

<script src="<?=base_url('bootstrap/js/jquery.min.js')?>" type="text/javascript">
  </script>
  <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>" type="text/javascript">
  </script> 
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
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
                               <a href="<?= base_url('Welcome/index')?> " 
                                 class="btn btn-primary  pull-right">AddNew
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

  
</body>
</html>


