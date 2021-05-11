<div class="container mt-3">
    <h1 class="text-center">Our team</h1>
    <hr class="featurette-divide mt-n1"/>
    <div class="row">
        <?php foreach($teamData as $data) : ?>
            <div class="col-md-6 col-lg-4 text-center">
                <img src="images/team/<?= $data["ingame"] ?>.png" width="200" height="270" alt="<?= $data["name"] ?>">
                <h3><?= $data["name"] ?></h3>
                <h6 class="text-muted"><?= $data["ingame"] ?></h6>
                <p><?= $data["text"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>