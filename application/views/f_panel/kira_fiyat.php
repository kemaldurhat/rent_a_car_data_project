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
	
	<div class="row r5">
		<div class="hidden-xs col-sm-1"><small><em>Araç No</em></small></div>
		<div class="col-xs-3 col-sm-2">Araç</div>
		<div class="col-xs-2"><em>Günlük</em></div>
		<div class="col-xs-2"><em>Haftalık</em></div>
		<div class="col-xs-2"><em>Aylık</em></div>
		<div class="col-xs-2"><em>Yıllık</em></div>
		<div class="col-xs-1">Kayıt</div>
	
	</div>
	
	<?php 
	for($i=0; $i<5; $i++)
	{
		?>
	<div class="row table-bordered">
		<div class="hidden-xs col-sm-1 vcenter1"><small><em>100547</em></small></div>
		<div class="col-xs-3 col-sm-2 vcenter1">Volkswagen Golf</div>
		<div class="col-xs-2"><input type="text" class="form-control input-sm t10" id="exampleInputAmount" placeholder="TL" value="1500"></div>
		<div class="col-xs-2"><input type="text" class="form-control input-sm t10" id="exampleInputAmount" placeholder="TL" value="1500"></div>
		<div class="col-xs-2"><input type="text" class="form-control input-sm t10" id="exampleInputAmount" placeholder="TL" value="1500"></div>
		<div class="col-xs-2"><input type="text" class="form-control input-sm t10" id="exampleInputAmount" placeholder="TL" value="1500"></div>
		<div class="col-xs-1 vcenter1"><button class="btn btn-success btn-xs">Kaydet</button></div>
	
	</div>

	<?php } ?>
	
</div>