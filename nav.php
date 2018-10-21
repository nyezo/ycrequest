<div class="nav-wp">
	<div class="width wide">
		<nav class="nav">
			<a href="<?=$baseUrl?>" class="logo"><img src="<?=$baseUrl?>/img/logo-symbol.svg" alt="YC Request for Startups"> Request for Startups</a>
			<div class="contents-nav">
				<span class="toggle">Table of contents</span>
				<div class="contents-menu" id="contents-menu"></div>
			</div>

			<div class="right">
				<a href="<?=$applyUrl?>" class="apply">Apply to YC</a>
				<span class="menu-toggle">
					<img class="icon-open" src="<?=$baseUrl?>/img/nav.svg" alt="">
					<img class="icon-close" src="<?=$baseUrl?>/img/icon-close.svg" alt="">
				</span>
			</div>
		</nav>
		<div class="menu">
			<div class="nav-grid">
				<div class="links">
					<h5>Content</h5>
					<a href="<?=$baseUrl?>" class="black">Homepage</a>
					<a href="<?=$baseUrl?>/science" class="black">The Science</a>
					<a href="<?=$applyUrl?>" class="orange">Apply to YC</a>
				</div>
				<div class="tech">
					<h5>Frotier Technologies</h5>
					<?php include "frontier-technologies.php"; ?>
				</div>
			</div>
		</div>
	</div>
</div>