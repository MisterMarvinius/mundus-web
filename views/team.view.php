<template id="main">
	<div class="textwall-container">
		<div class="page-header">
			<h2 class="page-header-content">Our team</h2>
		</div>
		
		<div class="row">
			<?php foreach($teamData as $data) : ?>
				<div class="team-container text-center">
					<img src="images/team/<?= $data["ingame"] ?>.png" width="200" height="270" alt="<?= $data["name"] ?>">
					<h3><?= $data["name"] ?></h3>
					<h6><?= $data["ingame"] ?></h6>
					<p><?= $data["text"] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</template>

<?php include "base.php"; ?>