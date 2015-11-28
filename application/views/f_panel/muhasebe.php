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
	<div class="row ust_cizgi"></div>
	<br/>
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<br/>
			<br/>
			<br/>
			<div class="row"><div class="col-xs-12"><b>Tarih Aralığı</b></div></div>
			<div class="row">
				<div class="col-xs-12 col-sm-5"><input type="date" class="form-control"/></div>
				<div class="col-xs-12 col-sm-2 text-center">arası ile</div>
				<div class="col-xs-12 col-sm-5"><input type="date" class="form-control"/></div>
			</div>
		</div>
		<br/>
		<div class="col-xs-12 col-sm-6">
			<div class="row">
				<div class="col-xs-12 text-center"><b>Geçen Ay</b></div>
			</div>
			<br/>
			<div class="row">
				<div class="col-xs-6 text-center ">
					<div class="col-xs-12"><b>Gelirler</b></div>
					<div class="col-xs-12">12500.00TL</div>
				</div>
				<div class="col-xs-6  border-left">
					<div class="col-xs-12 text-center"><b>Giderler</b></div>
					
					<div class="col-xs-6"><b>Sigorta</b></div><div class="col-xs-6 text-right">25550.00TL</div>
					<div class="col-xs-6"><b>Kasko</b></div><div class="col-xs-6 text-right">25550.00TL</div>
					<div class="col-xs-6"><b>Muayene</b></div><div class="col-xs-6 text-right">50.00TL</div>
					<div class="col-xs-6"><b>Bakım</b></div><div class="col-xs-6 text-right">25550.00TL</div>
					<div class="col-xs-6"><b>Tamir</b></div><div class="col-xs-6 text-right">25550.00TL</div>
					<div class="col-xs-6"><b>Diğer</b></div><div class="col-xs-6 text-right">25550.00TL</div>
					<div class="col-xs-6"><b>Toplam</b></div><div class="col-xs-6 text-right"><b>25550.00TL</b></div>
				</div>
			</div>
		</div>
		

	</div>
	
	<div class="row ust_cizgi"></div>
	<br/>
	<div class="btn btn-default" onclick="write_to_excel()">Excel</div> 
	<div class="row" id="tableWrap">
	
	<table>
   <thead>
    <tr>
      <th>Araç No</th>
      <th>Marka</th>
      <th>Çeşit</th>
      <th class="filter-select filter-exact" data-placeholder="İşlem Seç">İşlem</th>
      <th>Tarih</th>
      <th>Ücret</th></tr>
  </thead>
  <tfoot>
    <tr>
      <th>Araç No</th>
      <th>Marka</th>
      <th>Çeşit</th>
      <th>İşlem</th>
      <th>Tarih</th>
      <th>Ücret</th>
    </tr>
    <tr>
      <th colspan="6" class="ts-pager form-horizontal">
        <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
        <button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
        <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
        <button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
        <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
        <select class="pagesize input-mini" title="Select page size">
          <option selected="selected" value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
        </select>
        <select class="pagenum input-mini" title="Select page number"></select>
      </th>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr> <tr>
      <td>015487</td>
      <td>Volkswagen</td>
      <td>Passat</td>
      <td>Sigorta</td>
      <td>10.11.2015</td>
      <td>250</td>
    </tr>
	<tr>
      <td>0545242</td>
      <td>Volkswagen</td>
      <td>Golf</td>
      <td>Kasko</td>
      <td>10.12.2015</td>
      <td>350</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>Volkswagen</td>
      <td>jetta</td>
      <td>Tamir</td>
      <td>10.09.2015</td>
      <td>890</td>
    </tr>
	<tr>
      <td>245689</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>
	<tr>
      <td>758985</td>
      <td>FİAT</td>
      <td>Albea</td>
      <td>Bakım</td>
      <td>09.09.2015</td>
      <td>870</td>
    </tr>

    
  </tbody>
</table>

	
	
	
	
	
	
	</div>

	
<script src="<?php echo base_url(); ?>js/siralama.js"></script>
<script type="text/javascript">
	function write_to_excel() 
{
 var url='data:application/vnd.ms-excel,' + encodeURIComponent($('#tableWrap').html()) 
        location.href=url
        return false
}
	
</script>

	
	<?php 



	?>
</div>