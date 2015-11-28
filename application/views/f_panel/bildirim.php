<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
		<ol class="breadcrumb">
		  <li><a href="#">Araçlar</a></li>
		  <li><a href="#">Araç içi</a></li>
		  <li class="active">Ekle</li>
		</ol>
		</div>
		<div class="col-xs-12  col-md-offset-2 col-md-4 text-right">
		<form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Araç Bul" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-xs-12"><b>Sigorta Durumları</b></div>
	</div>
	<br/>

	<div class="row ust_cizgi">
	</div>
	<br/>
	<b>
	<div class="row">
		<div class="hidden-xs col-sm-2">Araç NO</div>
		<div class="col-xs-3 col-sm-3">Marka</div>
		<div class="col-xs-3 col-sm-2">Model</div>
		<div class="col-xs-3 col-sm-2">Bitiş Tarihi</div>
		<div class="col-xs-3 col-sm-2">Detay / Düzenleme</div>
	</div>
	</b>
	<?php 
	
	for($i=0; $i<10; $i++)
	{ ?>
	
	
	<div class="row table-bordered pt_5 pb_5">
		<div class="hidden-xs col-sm-2">221544</div>
		<div class="col-xs-3 col-sm-3">Volkswagen</div>
		<div class="col-xs-3 col-sm-2">Golf</div>
		<div class="col-xs-3 col-sm-2">15.10.2016</div>
		<div class="col-xs-3 col-sm-2"><button type="button" class="btn btn-primary btn-sm right0">Detay</button></div>
	</div>
		
		
	<?php } ?>
	
	
</div>