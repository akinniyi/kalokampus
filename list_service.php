<?php include_once('heading.inc.php');?>

<?php include_once('header.inc.php');?>

    
    <section class="row section_1" id="">
    <div class="col-md-6 col-md-push-3">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <h1 class="text-center">CREATE A NEW LISTING</h1>	
            <h3 class="text-center"></h3>
        </div>
        
        <section class="search_form_section  no_padding  col-md-10 col-md-push-1">
            <ul role="heading" class="no_margin row text-center">
                <li class="col-md-6 active" tabindex="0">LIST A SERVICE</li>
                <li class="col-md-6" tabindex="0">LIST AN APARTMENT</li>
            </ul>
            <div class="row" id="form_find_services">
                <form class="col-md-6 col-md-push-3 text-left">
                 <span class="col-xs-12 text-center">Complete the form to find a service near you</span><br /><br />
                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="service_type" >Campus</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" name="service_type" class="col-xs-9" />
                    </div>

                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="service_type" >Your name</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" name="service_type" class="col-xs-9" value="e.g Ciroma Chukwuma Adekunle" />
                    </div>
 
                     <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="service_type" >Listing title</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" name="service_type" class="col-xs-9" value="Makeup" />
                    </div>

                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="service_type" >Location</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" name="service_type" class="col-xs-9" value="e.g Motion Ground" />
                    </div>
                                                               
                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="campus_name">Listing description</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <textarea type="text" rows="4" cols="8" class="col-xs-9" name="campus_name">Listing description...</textarea>
                    </div>
  
                    <div class="form_control text-center">
                        <span tabindex="0" role="button" class="button_rounded_med" name="submit_find_services">Create Listing</span>
                    </div>
                    
                </form>
                
                <form class="col-xs-6 col-xs-push-3 hidden">
                    <div class="form_control">
                        <label for="apartment_type">Apartment Type</label>
                       <span class="iconized_2"></span>  <input type="text" name="apartment_type" class="" />
                    </div>
    
                    <div class="form_control">
                        <label for="campus_name">Campus</label>
                        <span class="iconized_2"></span> <input type="text" class="" name="campus_name"/>
                    </div>
                    
                    <div class="form_control ">
                        <span tabindex="0" role="button" class="button_rounded_med" name="submit_find_apartments">Find Apartment</span>
                    </div>
                </form>
             </div>
        </section>
    </div></div>
    </section>



      

    
<?php include_once('footer.inc.php');?>