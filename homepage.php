<?php $title = "YC Request for Startups" ?>

<?php include "conf.php"; ?>
<?php include "header.php"; ?>
<?php include "nav.php" ?>

<div class="hero home-hero">
	<div class="container">
		<div class="width">
			<h1>Carbon Removal Technologies</h1>
		</div>
	</div>
	<img src="<?=$baseUrl?>img/home-hero.svg" class="hero-img" alt="">
</div>

<div class="container">
	<div class="width">
		<section id="section-1" class="white-box padded-80-35 z-1">
			<div class="text-contents">
				<div class="text">
					<h2>Climate Change</h2>
					<p>Climate change presents an existential threat to humanity. We are already seeing the effects and they are showing up faster and stronger than anticipated. XXXX research suggests we are already past the tipping point; even if we significantly reduced emissions, climate change would continue. We must reverse the damage already done. </p>
					<p>A report by United Nations’ scientific panel on climate change released in October 2018 expects the atmosphere—on our current trajectory—to warm up by 1.5 degrees Celsius by 2040. Even the effects of a 0.5 degrees increase will have far-reaching consequences. </p>
					<p>If we knew how to get the world to drastically reduce carbon dioxide emissions, we'd do that. Each year we spend hundreds of millions to reduce carbon dioxide emissions. Recent research indicates that we're past the tipping point. It's a collective action problem the world has been unable to solve - emitting carbon provides great individual benefit today at a great cost to us in the future. Adopting renewable energy and reducing future emissions is not enough to stop climate change. We need to do more to undo the harm we have done.</p>
				</div>
				<div class="contents padded-left extras">
					<h5><img class="icon-bookmark" src="<?=$baseUrl?>img/icon-bookmark.svg" alt=""> Read more on this topic</h5>
					<ul>
						<li><a href="http://www.ipcc.ch/report/sr15/" target="_blank">IPCC special report on the impacts of global warming</a></li>
						<li><a href="https://www.nytimes.com/interactive/2018/10/07/climate/ipcc-report-half-degree.html" target="_blank">Why Half a Degree of Global Warming Is a Big Deal</a></li>
					</ul>
				</div>
			</div>
		</section>

		<section>

			<div class="group text-item item-bottom">
				<div class="text">
					<h2>Introducing Frontier Technologies</h2>
					<p>As mentioned, the frontier technology ideas we will introduce in this RFS are near the border between very difficult and impossible, and they present varying degrees of ethical challenges.</p>
					<p>Our goal is to try to come up with technically feasible solutions at realistic costs. If we can do that, we then need to have a global conversation about the tradeoffs.</p>
				</div>
				<div class="item">
					<div class="big-text">
						None of these is our Plan A, but it's time to get Plan B ready.
					</div>
				</div>
			</div>

			<div class="mt-2">
				<?php include "frontier-technologies.php" ?>
			</div>

			<div class="padded-30-80 padded-mob-0">
				<div class="white-box mt-1">
					<div class="padded-30-80">
						<div class="p-r">
							<img class="offset abs offset-left not-mob" src="<?=$baseUrl?>img/icon-bulb.svg" alt="">
							<h5 class="orange">About these ideas</h5>
							<div class="sans">Ideas contributed by Gabriel Lopez, Zack Abbott, Greg Rau, Leonid Kozhunk, and Sam Altman. We are excited to fund any other approaches, even if they ar <a href="https://www.nationalgeographic.com/people-and-culture/food/the-plate/2016/11/seaweed-may-be-the-solution-for-burping-cows" target="_blank">not related</a> to carbon sequestration.
						</div>
					</div>
				</div>
			</div>

		</section>

		<section>
			<div class="group item-text">
				<div class="item">
					<div class="contents extras padded-left">
						<h5><img src="<?=$baseUrl?>img/icon-science.svg" alt="">The Science</h5>
						<div class="white-box padded-30 mt-1">
							<img src="<?=$baseUrl?>img/ill-electrolysis.svg" alt="">
						</div>
						<ul class="mt-2">
							<li><a href="<?=$baseUrl?>science">Dig into a bit of general science to help you understand the ideas better</a></li>
						</ul>
					</div>
				</div>
				<div class="tex">
					<p>We are now in extra innings, and it's time to consider technological solutions to this problem, even ones that are very risky and unlikely to work. We are going to present four such ideas here that we think deserve more research, which YC would be excited to fund. These ideas are near the limit of what's possible, and we're not sure which side of that line they're on. There are many other ideas out there, and we're excited to consider those too. We are open to funding companies and non-profit research. (For example, we may be able to use a chemical in seaweed to greatly reduce methane emissions from cows)</p>
					<p>We're excited about ideas take carbon dioxide out of the air and either transform it into something useful or store it for a long period of time. The biggest issue is the scale of the task—we are currently emitting about 35 gigatons of carbon dioxide per year.</p>
					<p>While we are slowly moving away from the carbon economy and will eventually greatly reduce our emissions, we need some ideas for a short-term bridge. We look forward to supporting the most impactful ones. </p>
				</div>
			</div>
		</section>

		<section>
			<div class="white-box padded-35-80">
				<div class="tabs-content">
					<div class="tabs-wp">
						<h5 class="orange">Where we are now</h5>
						<p>Some of the most popular carbon reduction technologies are:</p>
						<ul class="tabs">
							<li class="active"><a href="#tab-bio-energy">Bio-energy <span class="not-mob">with carbon <br class="not-mob">capture and storage</span></a></li>
							<li><a href="#tab-dac"><span class="not-mob">Direct Air Capture</span><span class="mob">DAC</span></a></li>
							<li><a href="#tab-biochar">Biochar</a></li>
							<li><a href="#tab-srm"><span class="not-mob">Solar Radation Management</span><span class="mob">SRM</span></a></li>
						</ul>
						<div class="footnote">
							An in-depth evaluation of these approaches can be found in <a href="http://www.obs-vlfr.fr/~gattuso/publications_PDF/Gattuso_etal_2018_Frontiers%20in%20Marine%20Science.pdf" target="_blank">this paper</a>.
						</div>
					</div>
					<div class="content-wp">
						<div class="content visible" id="tab-bio-energy">
							<h2>Bio-energy with carbon capture and storage</h2>
							<div class="abbr">BECCS</div>
							<p>The idea behind BECCS is to capture carbon with trees; burn trees for energy; capture carbon at the smokestack; and bury carbon underground.</p>
							<p>The deployment of BECCS is controversial, among other things, because of the large land area required.</p>
							<div class="extras contents small mt-2">
								<h5>More on this topic</h5>
								<ul class="has-icons">
									<li>
										<img class="icon-video" src="<?=$baseUrl?>img/icon-video.svg" alt="">
										<a href="https://www.youtube.com/watch?v=qLsH84dlV1Y" target="_blank">A technofix for the climate? Land-based geoengineering (BECCS)</a>
									</li>
									<li>
										<span class="icon-wp"><img class="icon-bookmark" src="<?=$baseUrl?>img/icon-bookmark.svg" alt=""></span>
										<a href="https://www.notion.so/cdrrfs/P1-Intro-a5587986598c4ced80d23652131df582#207ba6da0de4463b8c7f5a2a283cffff" target="_blank">World can limit global warming to 1.5C ‘without BECCS’</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="content" id="tab-dac">
							<h2>Direct Air Capture</h2>
							<div class="abbr">DAC</div>
							<p>The idea behind Direct Air Capture is to take CO2 from the air and pump it through a plant that transforms it into valuable resource.</p>
							<p>For instance, one of the companies in the space, Carbon Engineering plans to use CO2 as an input to make synthetic fuels that can substitute for diesel, gasoline, or jet fuel. Other companies plan on creating carbon nanotubes which are useful for batteries.</p>
							<p>The current issues with DAC are costs ($94/ton of CO2), and a scalable path to large scale CO2 removal.</p>
							<div class="extras contents small mt-2">
								<h5>More on this topic</h5>
								<ul class="has-icons">	
									<li>
										<img class="icon-video" src="<?=$baseUrl?>img/icon-video.svg" alt="">
										<a href="https://www.youtube.com/watch?v=MmcV4B4xy3Y" target="_blank">Direct air capture: Iceland opens first negative emissions power plant - TomoNews</a>
									</li>
									<li>
										<span class="icon-wp"><img class="icon-bookmark" src="<?=$baseUrl?>img/icon-bookmark.svg" alt=""></span>
										<a href="https://www.vox.com/energy-and-environment/2018/6/14/17445622/direct-air-capture-air-to-fuels-carbon-dioxide-engineering" target="_blank">Sucking carbon out of the air won’t solve climate change</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="content" id="tab-biochar">
							<h2>Biochar</h2>
							<p>The idea of biochar is to burn organic waste in oxygen-free chambers — and then bury it or use it for agriculture.</p>
							<p>One researcher contends that burning and burying 10 percent of the world’s biomass waste would sequester nearly 5 Gton of CO2  annually. The logistics of actually converting 10 percent or more of the world’s organic waste into biochar and burying the result are, at this point at least, incredibly daunting.</p>
							<div class="extras contents small mt-2">
								<h5>More on this topic</h5>
								<ul class="has-icons">
									<li>
										<img class="icon-video" src="<?=$baseUrl?>img/icon-video.svg" alt="">
										<a href="https://vimeo.com/251245935" target="_blank">Fixing Carbon: The Carbon Cycle Solution to our Climate Crisis</a>
									</li>
									<li>
										<span class="icon-wp"><img class="icon-bookmark" src="<?=$baseUrl?>img/icon-bookmark.svg" alt=""></span>
										<a href="https://e360.yale.edu/features/refilling_the_carbon_sink_biochars_potential_and_pitfalls" target="_blank">Refilling the Carbon Sink: Biochar’s Potential and Pitfalls</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="content" id="tab-srm">
							<h2>Solar Radiation Management</h2>
							<div class="abbr">SRM</div>
							<p>The idea of SRM is to reflect a small amount of inbound sunlight back out into space. Multiple approaches have been proposed: Space-Based Options (satellites in space), Stratosphere-Based Options (injection of sulfate aerosols into the stratosphere), Cloud-Based Options (making them more reflective), and Surface-Based Options (whitening roofs or reflective crops). </p>
							<p>SRM is hugely controversial presenting environmental risks, possibility of weaponization, and create regional winners because of unequal deployment.</p>
							<div class="extras contents small mt-2">
								<h5>More on this topic</h5>
								<ul class="has-icons">	
									<li>
										<img class="icon-video" src="<?=$baseUrl?>img/icon-video.svg" alt="">
										<a href="https://www.youtube.com/watch?v=OBTVK8ajqa4" target="_blank">A technofix for the climate? Atmospheric geoengineering (Solar Radiation Management)</a>
									</li>
									<li>
										<span class="icon-wp"><img class="icon-bookmark" src="<?=$baseUrl?>img/icon-bookmark.svg" alt=""></span>
										<a href="https://www.nap.edu/read/12782/chapter/19" target="_blank">Stratosphere-Based Options (Advancing the Science of Climate Change)</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>


		
<?php include "footer.php"; ?>