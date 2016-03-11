<?php include_once('heading.inc.php');?>

<?php include_once('header.inc.php');?>
    
    <section class="row section_1" id="">
    <div class="col-md-6 col-md-push-3">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <h1 class="text-center">FIND SERVICES</h1>	
            <h3 class="text-center">around your campus</h3>
        </div>
        
        <section class="search_form_section  no_padding  col-md-10 col-md-push-1">
           <h3 class="col-xs-12 no_margin text-center">NEED A SERVICE</h3>
           
            <div class="row" id="form_find_services">
                <form class="col-md-6 col-md-push-3 text-left">
                 <span class="col-xs-12 text-center">Complete the form to find a service near you</span><br /><br />
                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="service_type" >Service Type</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" name="service_type" class="col-xs-9" />
                    </div>
    
                    <div class="form_control col-xs-12">
                      <label class="col-xs-push-2 col-xs-9" for="campus_name">Campus</label><br />
                      <i class="col-xs-2  material-icons">account_balance_wallet</i>
                      <input type="text" class="col-xs-9" name="campus_name"/>
                    </div>
                    
                    <div class="form_control text-center">
                        <span tabindex="0" role="button" class="button_rounded_med" name="submit_find_services">Find Services</span>
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
    
    <section class="row section_1 slanted-bottom" id="">
    </section>

    <section class="row section_2 about_us_section">
    	<div class="col-md-6 col-md-push-3">
        	<div class="row">
                <h2 class="col-md-12">ABOUT KALOKAMPUS</h2>
                <article class="col-md-6">
                	<h3>FIND APARTMENTS</h3>
                    <p>Kalokampus aims to make the search for 
                    apartments and pro service providers 
                    easier for folks living around the campus 
                    communities by being the best and 
                    easiest platform to find the right 
                    apartments and businesses you need in
                    time.
                    </p>
                    <a href="#"><span role="button" class="button_rounded_med">Read more...</span></a>
                </article>
                <p class="col-md-6 text-left"><i class="icon_big material-icons">search</i></p>
             </div>
             <div class="row">   
                <p class="col-md-6 text-right"><i class="icon_big material-icons ">face</i></p>
                <article class="col-md-6">
                	<h3>FIND BUSINESSES & SERVICES</h3>
                    <p>Kalokampus aims to make the search for 
                    apartments and pro service providers 
                    easier for folks living around the campus 
                    communities by being the best and 
                    easiest platform to find the right 
                    apartments and businesses you need in 
                    time.</p>
                    <a href="#"><span role="button" class="button_rounded_med">Read more...</span></a>
                </article>
        	</div>
        </div>
    </section>
    <section class="row section_3">
    
    	<div class="col-md-6 col-md-push-3 text-center">
        	<div class="row">
                <article class="col-md-4">
                    <i class="icon_big material-icons">grade</i>
                    <p>
                        Find Services listing and apaartments
                    </p>
                </article>            	

                <article class="col-md-4">
                    <i class="icon_big material-icons">find_replace</i>
                    <p>
                        Find Services listing and apaartments
                    </p>
                </article>
                
                <article class="col-md-4">
                    <i class="icon_big material-icons">check_circle</i>
                    <p>
                        Find Services listing and apaartments
                    </p>
                </article>            
            </div>
        </div>    
    </section>
    
    <section class="row">
    	<div class="col-md-6 col-md-push-3">
        	<div class="row">        	
                <article class="col-md-6">
                  <h3>FEEL LIKE JOINING THE TEAM?</h3>
                  <p>You can contribute by 
                  <a href="#">Adding your school</a> or
                  Sharing on <a href="#">Facebook</a>, <a href="#">Twitter</a>
                  or <a href="#">Instagram</a>.</p>
                </article>
                
                <p class="col-md-6 pull-left"><a href="#"><span role="button" class="button_rounded_big">Contribute</span></a></p>        
            </div>
        </div>    
    </section>
      
    <section class="hidden-xs row">
    </section>
    
    <section class="row section_1 slanted-top" id="">
    </section>
    <section class="row section_1" id="">
    </section>
    
<?php include_once('footer.inc.php');?>