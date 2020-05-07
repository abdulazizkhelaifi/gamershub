<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
	<!-- Text Logo - Use this if you don't have a graphic logo -->
	<a class="navbar-brand logo-text page-scroll"
		href="/gamingWebsite-php/website/web/index.php">Gamer's Hub</a>

	<!-- Image Logo -->

	<!-- Mobile Menu Toggle Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarsExampleDefault"
		aria-controls="navbarsExampleDefault" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-awesome fas fa-bars"></span> <span
			class="navbar-toggler-awesome fas fa-times"></span>
	</button>
	<!-- end of mobile menu toggle button -->

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link page-scroll" href="/gamingWebsite-php/website/web/index.php">HOME
					<span class="sr-only">(current)</span>
			</a></li>
			<li class="nav-item"><a class="nav-link page-scroll" href="#features">FEATURES</a>
			</li>
			<li class="nav-item"><a class="nav-link page-scroll" href="#preview">PREVIEW</a>
			</li>

			<!-- Dropdown Menu -->
			<li class="nav-item dropdown"><a
				class="nav-link dropdown-toggle page-scroll" href="#screenshots"
				id="navbarDropdown" role="button" aria-haspopup="true"
				aria-expanded="false">GAMES</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=2"><span
						class="item-text">Streets of Rage 4</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=3"><span
						class="item-text">Snowrunner</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=4"><span
						class="item-text">Predator: Hunting Grounds</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=5"><span
						class="item-text">Fallout-76</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=6"><span
						class="item-text">Final Fantasy 7</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=7"><span
						class="item-text">Resident Evil 3</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=8"><span
						class="item-text">Call of Duty: Mordern Warfare 2</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=9"><span
						class="item-text">Resident Evil: Resistance</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=10"><span
						class="item-text">Call of Duty: Warzone</span></a>
					<div class="dropdown-items-divide-hr"></div>
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=1"><span
						class="item-text">DragonBall Z: Kakarot</span></a>
				</div></li>
			<!-- end of dropdown menu -->

			<li class="nav-item "><a class="nav-link page-scroll" href="#contact">CONTACT
					US</a></li>
					
			<li class="nav-item "><a class="nav-link page-scroll" href="/gamingWebsite-php/website/web/php/rankings.php">RANKINGS
					</a></li>
					
			<li class="nav-item "><a class="nav-link page-scroll" href="/gamingWebsite-php/website/web/news.php">NEWS
					</a></li>
					
					
					
			
                
                <?php
                if (isset($_SESSION['Username'])) {
                    ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll"
				href="/gamingWebsite-php/website/web/login.html"><?php echo $_SESSION['Username']; ?></a>
                    <?php } 
                    else {
                    ?>
                    <li class="nav-item">
                    <a class="nav-link page-scroll"
				href="/gamingWebsite-php/website/web/login.html">LOGIN</a>
                    
                    <?php } ?>
                    
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item"
						href="/gamingWebsite-php/website/web/php/logout.php"><span
						class="item-text">Logout</span></a>
				</div>
			</li>

		</ul>
		<span class="nav-item social-icons"> <span class="fa-stack"> <a
				href="#your-link"> <i class="fas fa-circle fa-stack-2x"></i> <i
					class="fab fa-facebook-f fa-stack-1x"></i>
			</a>
		</span> <span class="fa-stack"> <a href="#your-link"> <i
					class="fas fa-circle fa-stack-2x"></i> <i
					class="fab fa-twitter fa-stack-1x"></i>
			</a>
		</span>
		</span>
	</div>
</nav>
<!-- end of navbar -->
<!-- end of navigation -->