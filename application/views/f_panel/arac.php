<div class="container">
	<div class="row">
		<div class="col-xs-12"><em><small><a href="#">Araçlar</a> > <a href="#">Araç Ekle</a></small></em></div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<h4>Toplam 48 Araç</h4>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="row">
				
				<div class="col-xs-2 text-center">Otomobil</div>
				<div class="col-xs-2 text-center">Suv</div>
				<div class="col-xs-2 text-center">Minibüs</div>
				<div class="col-xs-2 text-center">Motor</div>
				
			</div>
			<div class="row">
				
				<div class="col-xs-2 text-center">35</div>
				<div class="col-xs-2 text-center">5</div>
				<div class="col-xs-2 text-center">5</div>
				<div class="col-xs-2 text-center">3</div>
				
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<div class="row ust_cizgi pt_10">
		<div class="col-xs-12 col-md-2 col-md-offset-2 text-center p15">Kategori Seçiniz</div>
		<div class="col-xs-12 col-md-4">
			<div class="col-xs-3 arac_sec text-center"><img src="<?php echo base_url();?>images/otomobil.png" alt="otomobil"/></div>
			<div class="col-xs-3 arac_sec text-center"><img src="<?php echo base_url();?>images/suv.png" alt="SUV"/></div>
			<div class="col-xs-3 arac_sec text-center"><img src="<?php echo base_url();?>images/minibus.png" alt="minibüs"/></div>
			<div class="col-xs-3 arac_sec text-center"><img src="<?php echo base_url();?>images/motor.png" alt="motor"/></div>
		</div>
		<div class="col-xs-12 col-md-2 text-center pt_10">Araç Ekle <span class="glyphicon glyphicon-plus arac_sec btn btn-default " aria-hidden="true"></span></div>
	</div>
	<br/>
	
	
	<div class="row ust_cizgi pt_10">
		<br/>
		<div class="col-md-1 col-xs-2">Marka</div>
		<div class="col-md-1 col-xs-2 text-center">Model Adı</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center">Model</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center">Yakıt</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center">Vites</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center">Kapı</div>
		<div class="col-md-2 col-xs-4 text-center">Resim</div>
		<div class="col-md-1 col-xs-2">Düzenle</div>
		<div class="col-md-1 col-xs-2">Sil</div>	
	</div>
	
	<?php 
	for($i=0; $i<15; $i++)
	{
		?>
	<div class="row  he70 table-bordered table-hover">
	
		<div class="col-md-1 col-xs-2 vcenter">Volkswagen</div>
		<div class="col-md-1 col-xs-2 text-center vcenter">Golf</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center vcenter">2012</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center vcenter">Dizel</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center vcenter">Manuel</div>
		<div class="col-md-1 hidden-xs hidden-sm text-center vcenter">5</div>
		<div class="col-md-2 col-xs-4 text-center"><img src="<?php echo base_url();?>images/golf.jpg" alt="Golf" class="tum_res"/></div>
		<div class="col-md-1 col-xs-2 vcenter"><a href="#">Düzenle</a></div>
		<div class="col-md-1 col-xs-2 vcenter"><a href="#">Sil</a></div>	
	</div>
	
	<?php } ?>
	

</div>




