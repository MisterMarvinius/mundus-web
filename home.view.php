<div id="gamemodeCarousel" class="carousel slide mb-3" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($i = 0; $i < count($carouselData); $i++) : ?>
            <li data-target="#gamemodeCarousel" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? "active" : "" ?>"></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach($carouselData as $data) : ?>
            <div class="carousel-item <?= $data["class"] ?>">
                <img class="d-block w-100" src="images/<?= $data["path"] ?>" alt="<?= $data["alt"] ?>">
                <div class="carousel-caption d-md-block text-left">
                    <h1><?= $data["title"] ?></h1>
                    <p class="lead"><?= $data["text"] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#gamemodeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#gamemodeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
	<br>
	<span style="font-size:18pt"><b>Join our <a href="https://discord.gg/AjwBpm5">Discord</a> to download the mod.</b></span>
	<br>
	<br>
    <div class="row featurette">
        <div class="col-lg-7 vertical-center">
            <h2 class="featurette-heading">Survival</h2>
            <p class="lead">
                Mundus Crassus offers a unique survival feeling by our mod. The mod features many new blocks and items.
                All additions were made with care to fit into Vanilla Minecraft. The system also provides protections to
                secure your land from others.<br>
				<br>
            </p>
            <a class="btn btn-secondary" href="?site=survival">Learn more</a>
        </div>
        <div class="col-lg-5">
            <img class="img-fluid rounded" src="images/survival.png" alt="Survival Spawn">
        </div>
    </div>

    <hr class="featurette-divider"/>
    <div class="row featurette">
        <div class="col-lg-7 order-lg-2 vertical-center">
            <h2 class="featurette-heading">Minigames</h2>
            <p class="lead">
                Need a break from survival? For in between we offer our players a range of different single- and multiplayer games.
            </p>
            <a class="btn btn-secondary" href="?site=games">Learn more</a>
        </div>
        <div class="col-lg-5 order-lg-1">
            <img class="img-fluid rounded" src="images/dame.png" alt="Games Spawn">
        </div>
    </div>

    <!--<hr class="featurette-divider"/>
    <div class="row featurette">
        <div class="col-lg-7 vertical-center">
            <h2 class="featurette-heading">Guild PVP</h2>
            <p class="lead">
				Guild PVP is all about choosing a class and level to unlock new skills.
				You can found guilds to play together with your friends and start sieging the guilds of others.
				Are you ready for the battlefields of Mundus Crassus?
            </p>
            <a class="btn btn-secondary" href="?site=gpvp">Learn more</a>
        </div>
        <div class="col-lg-5">
            <img class="img-fluid rounded" src="images/gpvp_dungeon.png" alt="Guild PVP Dungeon">
        </div>
    </div>-->
</div>
