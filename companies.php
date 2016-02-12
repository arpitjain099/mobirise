
<?php require('header.php'); ?>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left">


  
  

  

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>

  

  

  

  
    <link rel="stylesheet" type="text/css" href="http://jsfiddle.net/css/result-light.css">
  

  

  <style type="text/css">
    body { font-family:'Arial'; color:#646464; }    
  .continents-wrap { float:left; width:20%; margin:0 5% 0 0; padding:0; }   
  .flowers div { position:relative; }  
  </style>


<script type='text/javascript'>//<![CDATA[
$(function(){
                $('.flowers-wrap, .continents-wrap').delegate('input[type=checkbox]', 'change', function() {
          var $lis = $('.flowers > div'),
            $checked = $('input:checked');  
          if ($checked.length) {              
                        var selector = '';
                        $($checked).each(function(index, element){
              if(selector === '') {
                selector += "[data-category~='" + element.id + "']";                  
              } else {
                selector += ",[data-category~='" + element.id + "']";
              }
                        });                        
            $lis.hide(); 
                        console.log(selector);
            $('.flowers > div').hide().filter(selector).show();        
          } else {
            $lis.show();
          }
        });
});//]]> 

</script>
<div class="container">  <div class="row">

  <div class="flowers-wrap">
             <div class="col-xs-18 col-sm-6 col-md-3">
                <h3 style="font-size:14px; font-weight:normal;">Industries ▼</h3>
                <form>
                                    <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="advertising" > Advertising & Marketing                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="arts" > Arts, Fashion, & Media                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="b2b" > Business to Business                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="cleantech" > Cleantech                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="construction" > Construction & Manufacturing                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="consumerproducts" > Consumer Products                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="energy" > Energy/Transport                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="finance" > Finance                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="fnb" > Food & Beverage                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="healthcare" > Healthcare                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="hospitality" > Hospitality                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="internet" > Internet                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="lifestyle" > Lifestyle                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="mobileandgaming" > Mobile & Gaming                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="realestate" > Real Estate                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" data-industry-id="technology" > Technology                      </label>
                </form>
                 <h3 style="font-size:14px; font-weight:normal;">Stage ▼</h3>
                <form>
                  <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="preseed" > Pre-seed                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="seed" > Seed                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="preseriesa" > Pre Series A                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="seriesa" > Series A                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="preseriesb" > Pre Series B                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="seriesb" > Series B                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="preseriesc" > Pre Series C                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="seriesc" > Series C                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="preseriesd" > Pre Series D                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="seriesd" > Series D                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" data-stage="other" > Other                        </label><br>
                      
               
                </form>        
                 <h3 style="font-size:14px; font-weight:normal;">Size ▼</h3>
                
                     <form>
                  <label style="font-size:12px;"><input type="checkbox" id="tiny" /> Tiny (0-10 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="small" /> Small (10-50 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="medium" /> Medium(50-200 employees)</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="large" /> Large (200-500 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="giant" /> Giant (500+ employees)</label>
                </form> 


                <h3 style="font-size:14px; font-weight:normal;">Location ▼</h3>
                
                     <form>
                  <label style="font-size:12px;"><input type="checkbox" id="ncr" /> NCR</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="bangalore" />Bangalore </label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="chennai" /> Chennai</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="mumbai" /> Mumbai</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="indore" />Indore</label><br>
                      <label style="font-size:12px;"><input type="checkbox" id="jaipur" />Jaipur</label><br>
                         <label style="font-size:12px;"><input type="checkbox" id="trivandrum" />Trivandrum</label><br>
                         <label style="font-size:12px;"><input type="checkbox" id="restofindia" />Rest of India</label>
                </form>

                 <h3 style="font-size:14px; font-weight:normal;">Ask (in Rs.) ▼</h3>
                
                     <form>
                  <label style="font-size:12px;"><input type="checkbox" id="5l" /> 0-5 L</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="10l" />5-10L </label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="50l" /> 10-50L</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="250l" /> 50L - 250L</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="500l" />250L - 500L</label><br>
                      <label style="font-size:12px;"><input type="checkbox" id="600l" />500L +</label>
                         
                </form>
            </div>
              </div>
           


           <div class="flowers">
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="green yellow large antarctica">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View offering</a>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="blue tiny south-america">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>

         <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="blue tiny south-america">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>

    </div>
        
        
  </div><!--/row-->
</div><!--/container -->


</div>
</section>

<?php require('footer.php'); ?>