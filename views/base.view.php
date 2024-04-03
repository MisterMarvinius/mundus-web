<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Mundus Crassus</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <noscript>
      <p>This website requires JavaScript. Activate JavaScript in your browser.</p>
    </noscript>
    
    <body tabIndex=0>
        <header>
            <nav class="navbar navbar-expand-md">
				<div style="display:flex; align-items: center;">
					<a style="text-decoration:none;" href="/">
						<div>
							<img class="navbar-logo" src="images/mundus_logo.png" alt="logo">
						</div>
					</a>
					<a style="text-decoration:none;" href="/">
						<span class="navbar-title">Mundus Crassus</span>
					</a>
				</div>
                <input type="checkbox" id="check">
                <img class="menu-icon" src="images/menu_icon.png" alt="menu_icon" onclick="document.getElementById('check').checked = !document.getElementById('check').checked;">
                <ul class="navbar-nav">
                    <?php foreach($navData as $name => $data) : ?>
                        <?php if($data["show"]) : ?>
                            <?php if($data["dropdown"] != "") : ?>
                                <li class="nav-item dropdown nav-list-item" tabindex="0">
                                    <div class="nav-link-container">
                                        <div>
                                            <p class="nav-link"><?= $data["name"] ?></p>
                                        </div>
                                        <div class="dropdown-helper">
                                            <p>+</p>
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu">
                                    <?php foreach(${$data["dropdown"]} as $subname => $subdata) : ?>
                                        <li class="nav-list-item"><a class="dropdown-item" href='<?= $subname ?>'><img src="<?= $subdata["icon"] ?>">&nbsp;<?= $subdata["name"] ?></a></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item nav-list-item">
                                    <a class="nav-link" href='<?= $name ?>'><?= $data["name"] ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
        
        <main role="main">
            <script src="js/main.js"></script>
        </main>
        
        <footer>
            <div class="footer-bar">
                <p>
                    Made by Marvin &middot; 
                    <a href="contact">Contact</a> &middot; 
                    <a href="policy">Privacy Policy</a>
                </p>
            </div>
        </footer>
        
    </body>
</html>