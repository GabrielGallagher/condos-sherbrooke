<?php
// File   : pages/accueil.php
// Author : Reydel Leon
// Date   : April 2015

?>
<link href="../assets/stylesheets/condosvv.css" rel="stylesheet" type="text/css" />

<section class="promotion">
    <div class="row">
        <div class="large-9 columns">
            <h3 class="text-light">Condos à vendre avec vue magnifique à Sherbrooke. Les condos W</h3>
            <p><strong>Vous cherchez un condo raffiné, un design personnalisé, une vue exceptionnelle. Vous avez trouvé la bonne adresse!</strong></p>
        </div>
        <div class="large-3 columns">
            <a href="gallerie" class="button">VOIR LES PHOTO &raquo;</a>
        </div>
    </div>
</section>

<section class="hero clearfix">
    <div class="row intro">
        <div class="large-12 columns">
            <div class="row">
                <div class="large-12 text-center columns no-space">
                    <h1><strong>Avril 2015</strong></h1>
                </div>
                <div class="large-12 text-center columns no-space">
                    <h2 class="subheader">Promotion spéciale sur condos en inventaire libre
                                          immédiatement</h2>
                </div>
                <div class="large-10 columns text-center large-offset-1">
                    <hr/>
                </div>
                <div class="large-12 text-center columns no-space"><h4>De plus, offrez -vous le meilleur des condos tout équipé avec notre
                                                                       promotion LUXE phase 2  en construction
                                                                       actuellement</h4></div>
                <div class="large-4 large-offset-8 columns">
                    <h3><small>Prenez rendez-vous </small><a href="tel:+18195720880">(819) 572-0880</a></strong></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="small-centered medium-uncentered medium-6 large-5 columns">
        <div class="tech-img"></div>
    </div>
</section>

<section>
    <div class="row">
        <div class="large-6 columns">
            <h3>LIVRAISON IMM&EacuteDIATE</h3>
            <ul class="styless underline">
                <li><a href="1101">Suite 1101 - Condo phase 1- &eacute;tage 1</a></li>
                <li><a href="1204">Suite 1204 - Condo phase 1- &eacute;tage 2</a></li>
                <li><a href="1401">Suite 1401 - Condo phase 1- &eacute;tage 4</a></li>
                <li><a href="1103">Suite 1103 - Condo phase 1- &eacute;tage 4</a></li>
            </ul>
            <h3>EN PR&Eacute;VENTE</h3>
            <ul class="styless underline">
                <li><a href="phase-2">Condo phase 2</a></li>
            </ul>
        </div>
        <div class="large-6 columns">
            <div class="flex-video widescreen">
                <iframe src="//fast.wistia.net/embed/iframe/aeuhu16fdw" allowtransparency="true" frameborder="0"
                        scrolling="no"
                        class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen
                        webkitallowfullscreen
                        oallowfullscreen msallowfullscreen width="475" height="267"></iframe>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="large-12 columns">
            <img src="http://www.condosvv.com/assets/images/plan/plan-implentation.jpg"
                                       alt="Condos VV"
                                       width="935" height="581" usemap="#etages" class="etages" border="0"/>
                <map name="etages" id="etages">
                    <area id="Phase 1" shape="poly" coords="215,224,214,367,254,426,408,426,410,213,215,213"
                          href="plan-condos"/>
                    <area id="Phase 2" shape="poly" coords="418,206,418,418,612,417,615,207,437,206" href="phase-2"/>
                    <area id="Phase 3 à venir" shape="poly" coords="674,206,675,418,887,409,888,206,682,205"
                          href="phase-3"/>
                </map>
        </div>
    </div>
</section>

<div class="row">
    <div class="large-6 columns">
        <h3>CHOISISSEZ MAINTENANT VOTRE CONDO DE R&Ecirc;VE!</h3>

        <p>Offrez-vous un condo de prestige sur un site exceptionnel offrant une vue spectaculaire unique &agrave;
            Sherbrooke!</p>

        <p>Les Condominiums W vous proposent des designs sur mesure et une valeur ajout&eacute;e assur&eacute;e. Sans
            contredit, votre meilleur investissement se trouve ici!</p>

        <p>Vous obtiendrez:</p>
        <ul class="indent underline">
            <li>Design unique et personnalis&eacute;</li>
            <li>Ascenseur</li>
            <li>Stationnements int&eacute;rieurs disponibles</li>
            <li>Fenestration abondant et balcons surdimensionn&eacute;s</li>
            <li>Vue imprenable sur la ville</li>
            <li>Plafonds 9 et 10 pieds</li>
            <li>Finition supérieure et qualit&eacute; de vie unique</li>
            <li>Et de nombreux autres avantages...</li>
        </ul>
    </div>

    <div class="large-6 columns">
        <h3>PRENEZ RENDEZ-VOUZ</h3>
        M. GIL POULIN <b>PROMOTEUR</b> <span class="underline"><a href="tel:+18195720880">(819) 572-0880</a></span>
            <br><b>VENTE ET D&Eacute;VELOPPEMENT</b> <span class="underline"><a href="tel:+18195720880">(819) 572-0880</a></span></p>
        <p>Vous verrez les plans, les aménagements proposés de nos différentes unités, vous obtiendrez tous les détails concernant les inclusions et les prix de vente ainsi que nos promotions spéciales</p>
        <p>Vous pourrez concrètement réserver votre condo ou votre penthouse</p>
        <p>Nous offrirons à notre clientèle privilège nos unités de condos et penthouses à des conditions uniques et très avantageuses. Faites vite!</p>
        <p>Vous êtes invités à venir nous rencontrer en prenant rendez-vous, communiquez avec Gil Poulin promoteur au <a href="tel:+18195720880">(819) 572-0880</a> ou par courriel au: ventes@condosvv.com</p>
        <p>Ou encore en complétant le formulaire suivant</p>
		<?php include("modules/formulaire.php"); ?>
		</div>
</div>