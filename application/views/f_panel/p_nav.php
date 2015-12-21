<header id="header">
	<div id="sticky" class="content">
			<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url(); ?>">Özet <span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo base_url(); ?>arac">Araçlar<span class="sr-only">(current)</span></a></li>
				
				<li class="dropdown">
				  <a href="<?php echo base_url(); ?>kira_durum" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kira Durumu<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>kira_durum">Kiradaki Araçlar</a></li>
					<li><a href="<?php echo base_url(); ?>kira_durum">Rezerve Araçlar</a></li>
					<li><a href="<?php echo base_url(); ?>kira_durum">Boştaki Araçlar</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="<?php echo base_url(); ?>kira_fiyat">Kira Fiyatları</a></li>
					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bildirimler<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>bildirim">Vergi</a></li>
					<li><a href="<?php echo base_url(); ?>bildirim">Sigorta</a></li>
					<li><a href="<?php echo base_url(); ?>bildirim">Kasko</a></li>
					<li><a href="<?php echo base_url(); ?>bildirim">Muayene</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="<?php echo base_url(); ?>bildirim">Tamir</a></li>
					<li><a href="<?php echo base_url(); ?>bildirim_detay">Bakım</a></li>
					
				  </ul>
				</li>
				<li><a href="<?php echo base_url(); ?>muhasebe">Muhasebe<span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo base_url(); ?>musteriler">Müşteriler<span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo base_url(); ?>firma">Firma Bilgileri<span class="sr-only">(current)</span></a></li>
				
			  </ul>
			 
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url(); ?>/cikis">Çıkış</a></li>
				<li class="dropdown">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>">Action</a></li>
					<li><a href="<?php echo base_url(); ?>">Another action</a></li>
					<li><a href="<?php echo base_url(); ?>">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="<?php echo base_url(); ?>">Separated link</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
	</header>