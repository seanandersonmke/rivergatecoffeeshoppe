				<div class="container">
        <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid opawhite">
    <img class="eggback hidden-xs" src="images/unedited/bigegg.png">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand shadow">
        <h5 class="center-text">The Rivergate Coffee Shoppe</h5>
        <img src="images/breakfast2.png" class="img-responsive center-block" alt="Breakfast Platter">
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" ng-controller="HeaderController" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a ng-class="navClass('#')" href="#">Home</a></li>
        <li><a ng-class="navClass('about')" href="#/about">About</a></li>
        <li><a ng-class="navClass('breakfast')" href="#/breakfast">Breakfast</a></li>
        <li><a ng-class="navClass('lunch')" href="#/lunch">Lunch</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right centertext">
        <li class="namecont shadow margtop"><h3 class="headerfont">The Rivergate Coffee Shoppe</h3>
		<h5 class="centertext">128 South Nova Rd (Corner of Nova & Granada), Ormond Beach, FL 32174 | (386) 672-9577</h5>
    <h5>Hours: Mon-Fri 6am - 2pm, Sat & Sun 7am - 2pm</h5>
    <h6>Delivery available from 9am - 1pm Monday thru Friday. 5 mile radius and $10 minimum please.</h6></li>    
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>