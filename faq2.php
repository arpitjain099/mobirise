
<?php require('header.php'); ?>
<style type="text/css">
.panel-title:hover {
     cursor: pointer;
}
</style>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left">


<br/><br/>

<div class="panel-group" id="accordion">
    <!-- First Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#collapseOne">
                 Collapsible Group Item #1
             </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, 
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>
    
    <!-- Second Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#collapseTwo">
                 Collapsible Group Item #2
             </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, 
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>
    
    <!-- Third Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#collapseThree">
                 Collapsible Group Item #3
             </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit, 
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>
</div>
    
    
    
    

    <div>
      <script type="text/javascript">
      $(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('Enable accordion behavior');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Disable accordion behavior');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});


      </script>
</div>
</section>

<?php require('footer.php'); ?>