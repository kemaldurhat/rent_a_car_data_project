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
		<div class="col-xs-12"><b>Kiradaki Araçlar</b></div>
	</div>
	<br/>

	<div class="row ust_cizgi">
	</div>
	<br/>
	<div class="row">
		<?php 
			for($i=0; $i<10; $i++)
			{ ?>
	 <div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail">
			<div class="hovereffect">
				<img src="<?php echo base_url();?>images/golf.jpg" alt="Golf" class="img-responsive">
				<div class="overlay"></div>
			</div>
		  
		  <div class="caption">
			<h4>Volkswagen Golf</h4>
			<p>2015 Model <span class="right0"><em><small>No: 1547886</small></em></span><br/>Gidiş Tarihi : 05/11/2015 <br/>Dönüş Tarihi :08/11/2015</p>
			<p>100 TL/Gün <br/> 300 TL/3 Gün<button type="button" class="btn btn-primary btn-sm right0">Kiradan Geldi</button></p>
		  </div>
		</div>
	 </div>

		<?php } ?>
		
	</div>
	
	
</div>