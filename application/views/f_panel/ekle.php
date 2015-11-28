<div class="container">
	<div class="row">
		<ol class="breadcrumb">
		  <li><a href="#">Araçlar</a></li>
		  <li><a href="#">Araç içi</a></li>
		  <li class="active">Ekle</li>
		</ol>
	</div>
	
	<br/>
	<br/>
	<div class="row">
		<div class="col-xs-12"><b>Araç Bilgileri</b></div>
	</div>
	<br/>
	<div class="row">
		<div class="col-lg-2 col-md-4 col-xs-12">
			<label for="s1">Kategori</label>
			<select name="" id="s1" class="form-control">
				<option value="">Otomobil</option>
				<option value="">SUV</option>
				<option value="">Minibüs</option>
				<option value="">Motosiklet</option>
			</select>
		</div>
		<div class="col-lg-2 col-md-4 col-xs-12">
			<label for="s2">Marka</label>
			<select name="" id="s2" class="form-control">
				<option value="">Volkswagen</option>
			</select>
		</div>
		<div class="col-lg-2 col-md-4 col-xs-12">
			<label for="s3">Model Adı</label>
			<select name="" id="s3" class="form-control">
				<option value="">Golf</option>
				<option value="">Passat</option>
			</select>
		</div>
		<div class="col-lg-1 col-md-3 col-xs-12">
			<label for="s4">Model</label>
			<input type="text" name="" id="s4" class="form-control" placeholder="Yıl"/>
		</div>
		<div class="col-lg-2 col-md-3 col-xs-12">
			<label for="s5">Yakıt</label>
			<select name="" id="s5" class="form-control">
				<option value="">Dizel</option>
				<option value="">Benzin</option>
				<option value="">LPG</option>
			</select>
		</div>
		<div class="col-lg-2 col-md-3 col-xs-12">
			<label for="s6">Vites</label>
			<select name="" id="s6" class="form-control">
				<option value="">Manuel</option>
				<option value="">Otomatik</option>
			</select>
		</div>
		<div class="col-lg-1 col-md-3 col-xs-12">
			<label for="s7">Kapı</label>
			<select name="" id="s7" class="form-control">
				<option value="">3</option>
				<option value="">4</option>
				<option value="">5</option>
			</select>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-xs-12">
			<button type="button" class="btn btn-primary">Kaydet</button>
		</div>
	</div>
	<br/>
	<br/>
	<div class="row ust_cizgi">
		<br/>
		<div class="col-xs-12"><b>Araç Resimleri</b></div>
	</div>
	<br/>
	<div class="row">
		<?php 
			for($i=0; $i<10; $i++)
			{ ?><div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
			
			<div class="hovereffect">
				<img class="img-responsive" src="<?php echo base_url();?>images/golf.jpg" alt="Golf">
				<div class="overlay">
				   <h4>Düzenle</h4>
				</div>
			</div>
			
			<div class="row">
				<div class="right"><span class="glyphicon glyphicon-trash cursor" aria-hidden="true"></span> <span class="glyphicon glyphicon-ok cursor" aria-hidden="true"></span></div>
			</div>
			<br/>
		</div><?php } ?>
		
	</div>
	<div class="row">
		<div class="btn btn-primary">Toplu Resim Ekle</div>
	</div>
	
</div>