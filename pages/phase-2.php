	<div class="row">
		<div class="large-12 columns">
			<h1>Phase 2, prévente débutée </h1>
			<p>Soyez parmi les 1ers acheteurs à obtenir le plus grand choix aux meilleurs prix. <strong>819 572-0880</strong></p>
			<div class="row">
				<div class="large-12 columns">
					<div id="plan" class="row">
			  			<div class="large-3 large-offset-9 columns text-right">
			  			    <h3>etage - <a class="stage" href="phase2-etage-1">1</a> <a class="stage" href="phase2-etage-2">2</a> <a class="stage" href="phase2-etage-3">3</a> <a class="stage" href="phase2-etage-4">4</a></h3>
			  			</div>
            		</div>
            		<div class="row">
                        <div id="plan-bottom">
                            <img src="../assets/images/plan/immeuble.jpg" alt="Condos VV" usemap="#etages" class="mapster" border="0" style="width: 100%; height: auto; width: auto"/>
                            <map name="etages" id="etages">
                              <area id="Étage-1" shape="poly" coords="727,416,698,414,682,411,589,408,546,407,495,407,415,408,91,419,97,363,220,349,375,325,496,320,699,337,712,347,763,351,765,416" rel="" href="phase2-etage-1" />
                              <area id="Étage-2" shape="poly" coords="704,334,701,328,630,315,575,304,480,304,440,308,356,322,204,346,143,343,104,342,98,341,99,297,180,278,223,277,376,236,466,232,502,227,709,259,710,274,759,280,761,336" rel="" href="phase2-etage-2" />
                              <area id="Étage-3" shape="poly" coords="761,257,712,253,701,241,612,213,585,205,516,201,451,208,239,265,217,270,170,265,129,264,101,267,103,219,184,196,226,197,377,138,489,132,506,128,668,164,680,162,707,173,708,190,760,205,761,255" rel="" href="phase2-etage-3" />
                              <area id="Étage-4" shape="poly" coords="755,172,713,169,681,160,698,154,700,150,605,104,567,96,522,93,469,96,437,105,225,190,175,186,129,183,117,183,104,186,107,156,183,111,225,109,377,29,485,25,502,16,704,75,705,102,755,116" rel="" href="phase2-etage-4" />
                            </map>
                        </div>
                    </div>
				</div>
			</div>
			<h2>CONFORT, LUXE, SÉCURITÉ ET PRESTIGE</h2>
		</div>
    </div>
    <div class="row">
		<div class="large-6 columns">
		<ul class="circle">
				<li>Ascenseur </li>
				<li>Balcons surdimensionnés aux allures bord de mer</li>
				<li>Design extérieur recherché</li>
				<li>Équipe de designers créatifs</li>
				<li>Fenestration abondante</li>
				<li>Garage intérieur spacieux</li>
				<li>Espace de rangement supplémentaire disponbile</li>
				<li>Plus-value supérieure à la moyenne</li>
				<li>Proximité de nombreux services</li>
				<li>Standing unique</li>
				<li>Système d’alarme incendie et gicleurs</li>
				<li>Et de nombreux autres avantages...</li>
			</ul>
		</div>
	</div>
	<script>
    $(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();

    	$('area').on('click', function() {
    		alert($(this).attr('alt') + ' clicked');
    	});
    });
    </script>
