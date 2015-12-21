<div class="orta_kutu">
	<div class="orta_cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 r1">
					 <?php echo form_open('login_control');

							echo validation_errors('<div class="error">', '</div>');
					 ?>
					  
					  <div class="form-group">
						<label for="exampleInputEmail1">E-Mail</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Şifre</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" name="password">
					  </div>
					 
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> Şifreyi Hatırla
						</label>
					  </div>
					  <button type="submit" class="btn btn-default">Giriş</button>
					<?php echo form_close(); ?>
					
				</div>
			</div>
		</div>
	</div>
</div>