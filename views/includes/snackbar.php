	<div class="snackbar shadow-sm <?= ($this->getResponseModel() ? '' : 'd-none') ?>">
		<div class="snackbar-body">
			<p><?= $this->getResponseModel() ?? '' ?></p><button type="button" class="btn text-danger ml-2 btn-snackbar-close btn-square" title="close"><i class="fas fa-times"></i></button>
		</div>
	</div>