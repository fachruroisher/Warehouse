<?php $this->load->view('template/header_view.php'); ?>

<section id="page-header" class="clearfix">    
<!-- responsive FlexSlider image slideshow -->
<div class="wrapper">
	<h1>Dodawanie produktu do produkcji</h1>
    </div>

</section>


<!-- main content area -->   
<div class="wrapper" id="main"> 
    
<!-- content area -->    
<section id="content" class="wide-content">
	<div class="grid_4">
		<form action="" method="POST">
			<input type="hidden" name="sent" value="yes">
			<div class="label">Produkt:</div>
			<select name="id">
				<?php foreach ($products as $product) { ?>
				<option value="<?php if (isset($product['id'])) { echo $product['id']; } ?>">
					<?php if (isset($product['name'])) { echo $product['name']; } ?>
				</option>
				<?php } ?>
			</select>
			<div class="label">Ilość:</div>
			<input type="number" name="amount">
			<input type="submit">
		</form>
	</div>
	<div class="grid_8">
		<table>
			<tr><th>Id</th><th>Produkt</th><th>Ilość</th></tr>
			<?php foreach ($reports as $report) { $sum = 0;?>
				<tr>
					<td><?php echo $report['id']; ?></td>
					<td><?php echo $report['name']; ?></td>
					<td><?php echo $report['sum']; ?></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</section><!-- #end content area -->
         
</div><!-- #end div #main .wrapper -->

 <?php $this->load->view('template/footer_view.php'); ?>