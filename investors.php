
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
                   <h3 style="font-size:14px; font-weight:normal;">Type ▼</h3>
                
                     <form>
                  <label style="font-size:12px;"><input type="checkbox" id="individualinvestor" /> Individual Investor</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="newangel" />New Angel investor</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="seasonedangelinvestor" /> New Angel investor<New Angel investor/label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="venturefund" /> Venture fund</label><br>
                   
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
                          <label style="font-size:12px;"><input type="checkbox" id="outsideindia" />Outside India</label>
                </form>
            </div>
              </div>
           


           <div class="flowers">
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>XYZ</h4>
                <p>Sector agnostic</p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View profile</a> 
            </div>
          </div>
        </div>
    </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="green yellow large antarctica">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>ABC</h4>
                <p>Sector agnostic</p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View profile</a>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="blue tiny south-america">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>ABC</h4>
                <p>Sector agnostic</p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View profile</a> 
            </div>
          </div>
        </div>

         <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail flower" data-category="blue tiny south-america">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>ABC</h4>
                <p>Sector agnostic</p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"></a> <a href="#" class="btn btn-info btn-xs" role="button">View profile</a> 
            </div>
          </div>
        </div>


        
  </div><!--/row-->
</div><!--/container -->


</div>
</section>

<?php require('footer.php'); ?>