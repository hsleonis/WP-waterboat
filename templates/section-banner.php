<div class="container">
	<!--top banner area-->
	<div class="row">
		<div class="col-xs-6 col-mb-12">
			<div class="banner-left-block">
				<p class="welcome"><?php echo TmxLibraryIncluder::getAdmin()->getOption('before_title'); ?></p>
				<h1 class="title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('title'); ?></h1>
				<div class="separator"></div>
				<p class="subtitle"><?php echo TmxLibraryIncluder::getAdmin()->getOption('subtitle'); ?></p>
                <?php if(TmxLibraryIncluder::getAdmin()->getOption('show_link')): ?>
                    <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('link'); ?>" class="btn btn-default btn-general">
                        <?php echo TmxLibraryIncluder::getAdmin()->getOption('link_text'); ?>
                    </a>
                <?php endif; ?>
            </div>
		</div>
		<div class="col-xs-6 col-mb-12">
			<div class="banner-right-block">
				<h4 class="track-trace text-uppercase">Track & trace</h4>
				<p class="find">Find your shipping</p>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-xs-4">Email:</label>
						<div class="col-xs-8">
							<input type="text" class="form-control input-field" id="email" placeholder="Enter your email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4">Shipping no:</label>
						<div class="col-xs-8">
							<input type="text" class="form-control input-field" id="shipping-no" placeholder="Enter your shipping no.">
						</div>
					</div>

					<div id="error-message" class="form-group hidden">
						<div class="col-xs-12">
							<div class="alert alert-danger"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<button type="button" id="trace" class="btn btn-default btn-general">TRACE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--top banner area-->
</div>

<div id="tracktrace-modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">TRACK &amp; TRACE</h4>
			</div>
			<div class="modal-body">
				<table id="trace-table" class="table table-striped">
					<thead>
						<tr>
							<th>Booking no.</th>
							<th>POL</th>
							<th>ETS</th>
							<th>Place of discharge (POD)</th>
							<th>Estimated time of arrival (ETA)</th>
							<th>Place of delivery</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<div class="col-xs-12">
					<button type="button" class="btn btn-default btn-general" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

jQuery('#trace').on('click', function() {
    var data = {
        'email': jQuery('#email').val(),
        'shipping': jQuery('#shipping-no').val()
    };

    jQuery.post('/api/trace', data, function(result) {
		if (result && result.status) {

			var tr;

			jQuery('#trace-table > tbody').empty();
			
	        for (var i = 0; i < result.bookings.length; i++) {
	            tr = jQuery('<tr/>');
	            
	            tr.append('<td>' + result.bookings[i].BOOK_NR + '</td>');
	            tr.append('<td>' + result.bookings[i].SELSKAB + '</td>');
	            tr.append('<td>' + result.bookings[i].AFDELING + '</td>');
	            tr.append('<td>' + result.bookings[i].SAGSNR + '</td>');
	            tr.append('<td>' + result.bookings[i].DATO + ' ' + result.bookings[i].TID + '</td>');
	            tr.append('<td>' + result.bookings[i].POD + ' ' + result.bookings[i].PL_O_DELIVER + ' ' + result.bookings[i].DATO + '</td>');
	            
	            jQuery('#trace-table').append(tr);
	        }

			jQuery('#tracktrace-modal').modal();
		}
    }, 'json');
});

</script>