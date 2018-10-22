<?php $title = "Cell Free Systems | YC Request for Startups" ?>

<?php include "conf.php"; ?>
<?php include "header.php"; ?>
<?php include "nav.php" ?>

<div class="color-yellow">
	<div class="hero">
		<div class="container">
			<div class="width">
				<h1>Cell-Free <br class="not-mob">Enzyme Systems</h1>
			</div>
		</div>
		<img src="<?=$baseUrl?>img/bg-free-cell.svg" class="hero-img" alt="">
	</div>
	<div class="container">
		<div class="width">
			<section id="about">
				<div class="group text-item">
					<div class="text">
						<h2>About</h2>
						<p>Microbes make enzymes, which we can leverage to accomplish useful goals. Microbes also have their own agendas, which limits what they can produce in a closed system. If we use microbes in an open space, such as the ocean, we run the risk of vastly changing the ecosystem by introducing a massive bloom of a single microbe. The downstream consequences of this are unpredictable and could be disastrous.  </p>
						<p>If we purify the necessary enzymes from a single biosynthetic pathway instead of using living microbes for carbon fixation, then we could vastly simplify the system to get all of the "good" (carbon fixation) without any of the "bad" (cell growth and unnecessary pathways requiring the cell's attention and resources). An engineered cell can can devote ~20% of its resources to a single pathway in the best case. This means that ~80% of the cell's efforts and resources are going to things that the project doesn't need, but that are necessary for the cell. If we isolate just the pathway for carbon fixation, we can increase efficiency at least 5-fold and reduce space and resource depletion caused by cellular growth. Furthermore, a cell-free enzyme system would avoid the potential runaway ecological disaster that could ensue when using living organisms. Cell-free enzyme solutions would be both more efficient and have less ecological risk than other biological strategies. </p>
						<p>In a perfectly designed system, a mix of purified enzymes could fix carbon in perpetuity, with no compounding cellular material or extraneous resource sinks. An aqueous solution containing soluble enzymes could dissolve CO2 on air contact. The combination of CO2 with water would result in bicarbonates, which could be used in subsequent reactions to produce something either useful (e.g. ethanol) or easily disposed (e.g. a stable precipitate). </p>
					</div>
					<div class="item">
						<div class="white-box padded-20 extras" id="contents">
							<h5>Contents</h5>
							<ol>
								<li><a href="#about">About</a></li>
								<li><a href="#impact">Impact</a></li>
								<li><a href="#in-depth">In-depth Description</a></li>
								<li><a href="#frontier">What makes it a frontier technology?</a></li>
								<li><a href="#energy-requirements">Energy requirements</a></li>
								<li><a href="#business-models">Possible Business Models</a></li>
								<li><a href="#estimated-costs">Estimated Cost</a></li>
								<li><a href="#risks">Risk</a></li>
								<li><a href="#vision">2040 Vision</a></li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section id="impact">
				<div class="color-box padded-160">
					<h2>How much CO2 it could absorb if everything worked perfectly?</h2>
					<ol class="simple">
						<li>Which enzymes are utilized, and the kinetics of those enzymes in the conditions of the reaction</li>
						<li>
							Efficiency of diffusion of CO2
							<ol>
								<li>passive (i.e. CO2 is dissolved into the aqueous solution by natural gas exchange with the solution) — dependent on surface area</li>
								<li>active (i.e. air is pumped through the system and high pressure is maintained in the system, increasing the surface area of interaction to facilitate more gas exchange and CO2 being absorbed) — dependent on energy source to bubble air through the system and maintain internal pressure.</li>
							</ol>
						</li>
						<li>Other inputs that would be necessary (e.g. consumed starting materials, co-factors, etc.)</li>
						<li>Form of the cell-free bioreactor (e.g. is this a massive bioreactor facility with 100,000L tanks, or is this millions of smaller "personal use" bioreactors installed in homes to generate some useful end product)</li>
					</ol>
					<p>Because at this stage, such a system is dependent on design (and such a system does not yet exist), it is perhaps better to take a "top down" approach — How efficient does the system need to be to be useful?  If we assume that this approach would need to remove 10 gigatons of CO2/year and the world's most common carbon-fixation enzyme RuBisCO can fix 10 molecules of CO2 (~7.3E-22g) per second, then we would need 2.3E29 RuBisCO enzymes to be successful.  This is ~26 kilotons of RuBisCO, not to mention other enzymes needed in the system, other materials, and water.  That's a lot of enzyme.  However, RuBisCO is a notoriously inefficient enzyme.  To develop a successful enzyme system it is clear that one would first and foremost have to optimize enzyme kinetics to likely far exceed that of RuBisCO before even tackling the other dependent factors above. </p>
					<p>Put another way, for cell-free system solutions, the question is not "how much CO2 could theoretically be absorbed."  The question is "can we design and execute a system that is efficient enough to matter?"  Ultimately, the answer has to be yes, since biology has done it already.  We just need to engineer and harness the most efficient version of this system and find a place (or places) to put it.</p>
				</div>
			</section>
			
			<section id="in-depth">
				<div class="white-box padded-80">
					<h2>In-depth description & science</h2>
					<img src="<?=$baseUrl?>img/ill-desert-1.svg" alt="">
					<div class="padded-80">
						<h3>Inputs, outputs, and balancing the system</h3>
						<p>To make a cell-free enzyme system (or cell-free system, or CFS) useful, the goal is to make it completely regenerative and balanced with respect to co-factors and chemical energy so that the system needs minimal input.  For instance, arguably the most famous carbon-fixation system is the Calvin Cycle, in which a cycle of reactions fixes a CO2 molecule to a growing sugar molecule and in the process consumes 3 ATP molecules to ADP and 2 NADPH molecules to NADP.  As such, for the cycle to continue, ADP has to be converted back to ATP and NADP has to be converted back to NADPH.  Plant cells handle this by using photosynthesis to generate the energy necessary to replenish these co-factors that are necessary for the Calvin Cycle.  Similarly, any necessary co-factors for a carbon-fixation pathway utilized in a CFS would need to be replenished by auxiliary pathways or subsequent reactions in the carbon-fixation pathway.  Ultimately, the system would ideally be designed to be completely balanced.</p>
						<p>The simplest system would require no starting material, but could utilize CO2 and water to make a hydrocarbon and oxygen gas.  This would likely require a fair bit of energy, typically converted from chemical, solar, electric and/or other energy sources into chemical energy stored in the form of ATP in the biological world.  Theoretically, one could try to build a simplified version of this in a CFS, although cells typically use membranes and chemical gradients as tools to master these energy conversions, so there would be some engineering challenges to go that route.</p>
						<?php include "definitions-units.php"; ?>
						<p>Alternatively, one could design a system that fixes a carbon to another molecule (an input) and then uses the resulting product in further reactions, driving toward a productive output.  The advantage of this is that the input would in essence provide a head start for the system and would likely make the system itself less complex.  The disadvantage of course is that the input would have to be regenerated, much like the CO2 acceptor ribulose 1,5-bisphosphate is continually regenerated in the Calvin Cycle.  Or alternatively it would be consumed, requiring the CFS to be "fed" input continually.  As such, the input would need to be cheap and readily available in massive quantities.  </p>
						<p>One possible input that could be available in massive quantities would be a mineral, such as calcium or magnesium or alkaline rocks that could nucleate a precipitate of a solid carbonate, such as calcium carbonate, which has several extremely useful applications, such as construction material.  The advantage of an solid output such as calcium carbonate is that the CO2 is stable and can be disposed of or put to use without re-releasing the CO2 back into the atmosphere (at least not right away).</p>
						<h3>Controlling the system</h3>
						<p>Once a pathway (or pathways) have been designed, another massive challenge is figuring out where to put these enzymes and how do they gain access to atmospheric CO2?  The most basic idea is a bioreactor full of salty water and enzymes.  This reactor could potentially be controlled for temperature and pressure if necessary.  In one scenario, the bioreactors are massive and in a large industrial facility, such as Chr. Hansen's ~300,000L fermenter facility in Denmark.  The advantage of large centralized bioreactors is that power, systems, and maintenance would all be streamlined.  The disadvantage is that it would require a large amount of up-front capital to build and would likely have high power and energy demands that in themselves could create CO2 emissions. </p>
						<p>How could we get atmospheric CO2 into the bioreactor?  The most straightforward approach is to bubble air into a closed system and then use back-pressure to increase the amount of CO2 dissolved in the solution.  Alkaline solutions will also dissolve CO2 better, and since there are no living organisms in a CFS, we have the advantage of being able to raise the pH without having to worry about the viability of cells.  Granted, we'd have to have enzymes that could function at higher pH, but that is far easier to engineer than an entire organism that functions at high pH.  </p>
						<p>Another way to get CO2 into the bioreactor would be to install these bioreactors next to facilities that generate a lot of CO2-rich exhaust, and funnel that exhaust into the bioreactor.  This has the advantage of using the energy already expended by the target facility as the power source to bubble the CO2-rich air through the bioreactor.  It also targets the richest sources of CO2 pollution.  Companies like [NovoNutrients](https://www.novonutrients.com/) and [Blue Planet](http://www.blueplanet-ltd.com/#technology) are already tackling these rich sources of CO2 and have demonstrated that it's possible to convert this into useful material.</p>
						<p>If we wanted to avoid the massive up-front capital required to build and maintain huge bioreactor facilities, an alternative solution could be to make millions or billions of smaller bioreactors that could be sold commercially and installed in homes, farms, businesses, etc.  For this to be reasonable and viable, the bioreactors would have to be relatively simple and require minimal maintenance, and they'd have to do something that gave a benefit to the consumer.  The most obvious benefit would be that the output of the CFS was something common and useful to an individual, such as a daily consumable like food or soap or energy (e.g. ethanol).  Of course, these individual bioreactors would break and need new enzymes and upgrades and the like continually, which would be a logistical nightmare, although it could spawn a new industry, with private businesses emerging that specialize in servicing and maintaining these bioreactors for the consumer.  </p>
						<p>If we really want to dream big, and we want to avoid the whole bioreactor challenge altogether, we could potentially put the enzymes in membrane "bubbles" and drop them in the ocean.  The membranes would be permeable to water, air, dissolved ions, and small molecules (e.g. the output of the system) but would keep out larger molecules like proteases (proteins that destroy other proteins) and living organisms.  The advantage here is that the enzymes would have access to CO2 via passive diffusion from the air and dissolved bicarbonate in the ocean water.  This would limit the energy requirements of the system.  The disadvantage is that these membranes would inevitably tear or otherwise be destroyed and new CFS "bubbles" would have to be continually manufactured and dropped into the ocean.  In addition, since the membranes would be in the ocean, ideally they would not be harmful to sea life or damaging to the ecosystem.  The material would have to be simultaneously resilient and strong enough to survive in the ocean, but also able to break down if eaten by a sea creature.  I imagine such a material would be very difficult to develop!</p>
					</div>
				</div>
			</section>

			<section id="frontier">
				<div class="color-box padded-160">
					<h2>What makes it a frontier technology?</h2>
					<p>Designing and engineering a completely self-sustaining enzymatic system is incredibly attractive, but also is only currently being executed in the simplest forms right now.  Optimization of enzymes and production of a system that is simple enough to be executable but complex enough to be regenerative, efficient, and useful is currently not something that exists.  However, advances in synthetic biology in recent years have given us unprecedented capabilities for enzyme engineering, enzyme production, and developing and testing biological circuits.  While the technology is still in the very early stages, the necessary precursor tools are available and rapidly improving such that tackling the challenge of efficient and meaningful carbon sequestration is an attainable goal. </p>
				</div>
			</section>

			<section id="energy-requirements">
				<div class="transparent-box">
					<div class="border">
						<div class="inner">
							<div class="offset-text wide">
								<h3>Energy requirements</h3>
								<p>Designing and engineering a completely self-sustaining enzymatic system is incredibly attractive, but also is only currently being executed in the simplest forms right now.  Optimization of enzymes and production of a system that is simple enough to be executable but complex enough to be regenerative, efficient, and useful is currently not something that exists.  However, advances in synthetic biology in recent years have given us unprecedented capabilities for enzyme engineering, enzyme production, and developing and testing biological circuits.  While the technology is still in the very early stages, the necessary precursor tools are available and rapidly improving such that tackling the challenge of efficient and meaningful carbon sequestration is an attainable goal.</p>
								<div class="cols cols-2">
									<div>
										<h4>Type of device utilized</h4>
										<ol class="simple">
											<li>
												<strong>Bioreactor</strong> — Beyond the manufacture of they system and enyzmes and materials that are inherent to any version of this strategy, the main energy requirements for a bioreactor would be any necessary temperature stabilization for optimum enzyme kinetics, and possibly some mechanism for automating input of starting material and extraction of output.
												<ol>
													<li>Large bioreactor — Fewer large bioreactors would likely be more efficient logistically (less sites, less construction, more concentrated focus for maintenance, etc.) than many small bioreactors, but would require significant power that might be difficult to generate in a fashion that wouldn't produce a net positive CO2 emission.</li>
													<li>Small bioreactor — A small bioreactor, while less efficient, could feasibly require less overall power, making a non-fossil fuel energy source (maybe even the electro-geo-chemically derived H2 discussed in P2!) a reasonable possibility.</li>
												</ol>
											</li>
											<li>
												<strong>Open system</strong> — energy requirements inherently would be minimal, as this is a "set it and forget it" system, although significant energy would go into the manufacture of the system and ongoing maintenance.  
											</li>
										</ol>
									</div>
									<div>
										<h4>Method for CO2 diffusion</h4>
										<ol class="simple">
											<li>passive — minimal energy requirements</li>
											<li>active — potentially meaningful amounts of energy would be required to pump air into the solution and maintain an internal pressure that facilitated high CO2 and bicarbonate concentrations in solution.</li>
										</ol>
										<p>Ultimately, from an energy perspective, obviously the less needed the better, but the engineer would have to create a system where efficiency was high enough to have a meaningful impact.  In the "open system" approach, we take advantage of a massive surface area in the ocean to gain energy-free access to enough CO2 to be meaningful.  However, the logistics of such a system could be unfeasible.  In the bioreactor approach, likely the biggest energy requirements would be around dissolving meaningful amounts of CO2 into solution.  </p>
									</div>
								</div>
							</div>
							<hr class="small">
							<div class="offset-text left" id="business-models">
								<h3>Possible Business Models</h3>
								<p>The most obvious way to make this financially interesting would be to have the cell-free system produce something valuable as the output.  If the output was something commercially valuable (e.g. concrete), this would likely support a big bioreactor model with huge plants being manufactured and the output sold or utilized by the government.  If the output was something valuable or useful to an individual (e.g. ethanol), this could support the sale of bioreactors to be installed in homes.  However, realistically, this is unlikely to be a real solution, at least on its own.  If we need to remove 10 gigatons of CO2, then even if we install 1 billion small bioreactors (~1 per every 7 people on earth), each bioreactor would have to remove ~27 kilograms of CO2 per day (1e9 reactors * 27kg/reactor/day * 365 days = ~10 gigatons).  That's a lot of ethanol everyone is making every single day!  I can't really imagine anything that someone needs 27kg of everyday.  However, a hybrid approach, wherein large bioreactors do the heavy lifting on CO2 removal, but they are supplemented with ubiquitous, smaller personal and less efficient bioreactors that remove a fraction of CO2 while simultaneously minimizing individuals' carbon footprints could be a valid approach.</p>
							</div>
							
							<hr class="small">
							<div class="offset-text right" id="estimated-costs">
								<h3>Estimated Costs</h3>
								<p>It is extremely difficult to estimate, given the extensive set of contingencies outlined in the sections above.  It would be heavily dependent on the efficiency of the system and thus how many systems needed to be built and how much enzyme would need to be manufactured to seed these systems.  In addition, it would be heavily dependent on what (if any) input consumable material was needed to produce a useful or easily disposable output.  Ultimately, there would likely be very significant up-front costs to manufacture the hardware and facilities necessary to execute a cell-free system at a viable scale.  The advantage would only be gained as the system continued to work with minimal input, since theoretically the enzymes could continue to work in perpetuity if engineered to be stable and maintained properly.  </p>
								<p>If a large bioreactor facility approach were taken, a rough estimate based on 200,000,000L/year (200,000L fermenters) bacterial fermentation facilities would be ([citation](https://bioprocessintl.com/manufacturing/facility-design-engineering/construction-and-start-up-costs-for-biomanufacturing-plants-182238/)):</p>
								<p>$120MM / facility in up-front construction costs</p>
								<p>$200MM / Facility / year in maintaining, running, and feeding bioreactors (conservative estimate, as this is based on bacterial fermentation requirements, which would likely be far more demanding for resources and energy than a CFS)</p>
								<p>Without knowing the efficiency of the system, it is difficult to estimate how many such facilities would be needed to remove 10 gigatons of CO2/year, but if we take a worst case scenario efficiency with RuBisCO and assume a 10% w/v solution of enzyme, we would need ~1000 of these facilities around the world.  This would then require about $120B in up-front construction costs, and $200B/year to run these facilities.  This doesn't take into account how we make and purify the enzymes needed to go into these reactors.  The enzyme manufacture itself would likely require huge fermentation facilities, as we'd likely use microbes to manufacture these enzymes.  It is possible that to tackle that problem, these facilities would be built and initially used to grow bacteria to produce the enzymes, and then the bioreactors gradually transitioned over to CFS once enough enzyme was produced.</p>
							</div>
							<hr class="small">
							<div class="offset-text center" id="risks">
								<h3>Risks</h3>
								<p>As stated in several sections above, by far the biggest risk is finding a solution efficient enough to have a meaningful impact.  It would likely require significant investment of money, energy, and resources to get such a system up and running, and failure after such an investment could make things worse, rather than better. In addition, while in theory enzymes could be engineered to be stable, realistically they would likely degrade over time, and continual production and replenishment of enzymes would be necessary.  In addition, as is the problem with many carbon removal strategies, what do we do with the output of the system?  If the output is say ethanol, the obvious solution is to burn it as fuel, which really just releases the CO2 back into the atmosphere, which somewhat defeats the purpose (although theoretically makes us carbon neutral going forward).  If we could engineer the system to output some sort of stable precipitate or polymer, we could theoretically store it somewhere on earth where it would not release the fixed CO2 back into the atmosphere, but we're talking about gigatons of material being produced each year.  It may be difficult to find reasonable places to store that much material.  Although we use about 10 gigatons of concrete every year, so theoretically, that could be our output (or more specifically CaCO3 or other mineral carbonates).  </p>
							</div>	
						</div>
					</div>
				</div>
			</section>

			<section id="vision">
				<div class="white-box padded-160">
					<h2>What is the 2040 vision for the idea. How would it work 20 years from now.</h2>
					<p>In 20 years, I think realistically we could be harnessing cell-free systems to produce valuable resources while producing a negative carbon footprint.  In addition, the ability of cell-free systems will enable us to accomplish these goals without causing massive and unpredictable changes to delicate ecosystems.  Ultimately, the massive challenges around developing cell-free systems will likely limit them as the sole solution to the carbon problem.  However, they can be leveraged in combination with other strategies to provide a greater element of control and predictability as we attempt to reverse the runaway damage we have created.  </p>
					<div class="years">
						<span>2018</span>
						<span>2040</span>
					</div>
				</div>
			</section>

			

		</div>
	</div>
</div>

		
<?php include "footer.php"; ?>