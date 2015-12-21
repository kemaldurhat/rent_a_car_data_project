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
		
		</div>
	</div>
	<br/>
	<div class="row ust_cizgi"></div>
	<br/>

<div class="row" id="tableWrap">
	
	<table>
   <thead>
    <tr>
      <th>Müşteri Adı</th>
      <th>Tel</th>
      <th>Kiralama Sayısı</th>
      <th>Ortalama Puan</th>
      <th>Detaylı Bilgi</th></tr>
  </thead>
  <tfoot>
    <tr>
      <th>Müşteri Adı</th>
      <th>Tel</th>
      <th>Kiralama Sayısı</th>
      <th>Ortalama Puan</th>
      <th>Detaylı Bilgi</th>
     
    </tr>
    <tr>
      <th colspan="5" class="ts-pager form-horizontal">
        <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
        <button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
        <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
        <button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
        <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
       
       
      </th>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>Ahmet Mehmetoğlu</td>
      <td>05426971198</td>
      <td>8</td>
      <td>87</td>
      <td><div class="btn btn-default">Detay</div></td>
    </tr>


    
  </tbody>
</table>

</div>

</div>

<script src="<?php echo base_url(); ?>js/siralama.js"></script>