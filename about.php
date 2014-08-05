<?php include 'header.php';?>      
<section id="main-content" class="fade-in container">
  <div class="thebackground">
  <img class="baconback hidden-xs" src="images/bacon.png">
    <img class="toastback hidden-xs" src="images/toast.png">
<div class="col-md-12 namecont2 shadow">
<h3>The Rivergate Coffee Shoppe</h3>
<p>
Located in the sunny town of Ormond Beach, Florida, the Rivergate Coffee Shoppe serves American style breakfast with a southern flair.
Our friendly staff serves brewed coffee from fresh beans ground daily. Dine-in or call for delivery. With breakfast platters, sandwiches, salads and a kids menu, 
the Rivergate Coffee Shoppe has something for everyone! 
</p>
<p class="bold">
  Delivery available from 9am - 1pm Monday thru Friday. 5 mile radius and $10 minimum please. 
  </p>

  <div class="namecont margbot shadow">
  <h4>Location: 128 South Nova Rd (Corner of Nova & Granada), Ormond Beach, FL 32174</h4>
  <h4>Phone: (386) 672-9577<h4>
  <h4>Hours: Mon-Fri 6am - 2pm, Sat & Sun 7am - 2pm</h4>
</div>
</div>
<div class="col-md-6">
<div class="margbot margtop">
<center><iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Rivergate%20Coffee%20Shop%2C%20South%20Nova%20Road%2C%20Ormond%20Beach%2C%20FL%2C%20United%20States&key=AIzaSyBfVPKySm0Mch9B9bT4xnqTYeb7z1NPU9g"></iframe></center> 
</div>
</div>
<div class="col-md-6">
<center><div id="forprint" class="coupon margtop centertext">
  <h3>Rivergate Coffee Shoppe</h3>
  <center><img class="img-responsive margtop" src="images/coffeecup.jpg"></center>
  <h4>1 free beverage with your purchase of a meal</h4>
  <hr/>
  <h5>128 South Nova Rd (Corner of Nova & Granada), Ormond Beach, FL 32174</h5>
  <h5>Phone: (386) 672-9577<h5>
  <h5>Hours: Mon-Fri 6am - 2pm, Sat & Sun 7am - 2pm</h5>
</div></center>
  <center><button class="btn btn-primary" onclick="print()">Click to print coupon</button></center>
  </div>
<img class="img-responsive margtop" src="images/restmain/front3.jpg">
</div>
</div>
</section>
<script>
function print(){
  var prtContent = document.getElementById("forprint");
  var WinPrint = window.open('', '', 'letf=0,top=0,width=396,height=396,toolbar=0,scrollbars=0,status=0');
  WinPrint.document.write(prtContent.innerHTML);
  WinPrint.document.close();
  WinPrint.focus();
  WinPrint.print();
  WinPrint.close();
}
</script>