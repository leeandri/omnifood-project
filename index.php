<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Omnifood est un service de livraison de nourriture haut de gamme dont la mission est de proposer des repas abordables et sains au plus grand nombre."/>
        
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css"/>
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="ressources/css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="ressources/css/queries.css"/> 
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet"/>
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
        
        <link rel="apple-touch-icon" sizes="180x180" href="/ressources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/ressources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/ressources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/ressources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/ressources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/ressources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/ressources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        
        <title>Omnifood</title>
        
        
        
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="ressources/img/logo-white.png" alt="Omnifood logo" class="logo"/>
                    <img src="ressources/img/logo.png" alt="Omnifood logo" class="logo-black"/>
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">Livraison de plats</a></li>
                        <li><a href="#works">Comment ça marche</a></li>
                        <li><a href="#cities">Nos villes</a></li>
                        <li><a href="#plans">S'inscrire</a> </li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Adieu la malbouffe.<br/>Bonjour les super repas équilibrés.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">J'ai faim</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">En savoir plus</a>
            </div>
        </header>  
        
        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="long-copy">
                    Bonjour, nous sommes Omnifood, votre nouveau service de livraison de nourriture premium. Nous savons que vous êtes toujours occupé. Pas le temps de cuisiner. Alors laissez-nous nous en occuper, nous sommes vraiment bons pour ça, c'est promis !
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite-outline icon-big"></i>
                    <h3>Jusqu'à 365 jours/an</h3>
                    <p>                        
                        Ne cuisinez plus jamais ! Nous le pensons vraiment. Nos plans d'abonnement comprennent une couverture jusqu'à 365 jours/an. Vous pouvez aussi choisir de commander de manière plus flexible si c'est votre style.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Prêt en 20 minutes</h3>
                    <p>                        
                        Vous n'êtes qu'à vingt minutes de vos délicieux et super sains repas livrés directement chez vous. Nous travaillons avec les meilleurs chefs de chaque ville pour nous assurer que vous êtes satisfait à 100 %.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-nutrition-outline icon-big"></i>
                    <h3>100% bio</h3>
                    <p>                        
                        Tous nos légumes sont frais, biologiques et locaux. Les animaux sont élevés sans ajout d'hormones ou d'antibiotiques. C'est bon pour la santé, pour l'environnement et c'est aussi meilleur au goût !
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Commandez tout</h3>
                    <p>                        
                        Nous ne limitons pas votre créativité, ce qui signifie que vous pouvez commander ce que vous voulez. Vous pouvez également choisir parmi notre menu qui contient plus de 100 délicieux repas. C'est à vous!
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/1.jpg" alt="Bibimbap coréen avec des œufs et des légumes"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/2.jpg" alt="Pizza italienne simple avec tomates cerises"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/3.jpg" alt="Steak de poitrine de poulet aux légumes"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/4.jpg" alt="Soupe de potiron d'automne"/>
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/5.jpg" alt="Steak de bœuf de paléo avec légumes"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/6.jpg" alt="Baguette saine avec des œufs et des légumes"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/7.jpg" alt="Burger au cheddar et au bacon"/>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="ressources/img/8.jpg" alt="Granola aux cerises et aux fraises"/>
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>Comment ça marche &mdash; Simple comme 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="ressources/img/app-iPhone.png" alt="Omnifood app sur iPhone" class="app-screen js--wp-2"/>
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choisissez le plan d'abonnement qui correspond le mieux à vos besoins et inscrivez-vous dès aujourd'hui.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Commandez votre délicieux repas en utilisant notre application mobile ou notre site Web. Ou vous pouvez même nous appeler!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Profitez de votre repas après moins de 20 minutes. A la prochaine fois!</p>
                    </div>                    
                    <a href="#" class="btn-app"><img src="ressources/img/download-app.svg" alt="Bouton App Store"/></a>
                    <a href="#" class="btn-app"><img src="ressources/img/download-app-android.png" alt="Bouton Play Store"/></a>
                </div>
            </div>
        </section>
        
        <section class="section-cities" id="cities">
            <div class="row">
                <h2>Nous sommes actuellement dans ces villes</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="ressources/img/osaka.jpg" alt="Osaka"/>  
                    <h3>Osaka</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        1600+ mangeurs heureux
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        60+ grands chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_osaka</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="ressources/img/bern.jpg" alt="Bern"/> 
                    <h3>Berne</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        3700+ mangeurs heureux
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        160+ grands chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_bern</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="ressources/img/kyoto.jpg" alt="Kyoto"/>  
                    <h3>Kyoto</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        2300+ mangeurs heureux
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        110+ grands chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_kyoto</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="ressources/img/london.jpg" alt="Londres"/>  
                    <h3>Londres</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        1200+ mangeurs heureux
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        50+ grands chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_london</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-testimonials">
             <div class="row">
                <h2>Nos clients ne peuvent pas vivre sans nous</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Omnifood est tout simplement génial! Je viens de lancer une startup qui ne me laisse pas le temps de cuisiner, donc Omnifood est une bouée de sauvetage. Maintenant que je m'y suis habitué, je ne pourrais plus vivre sans mes repas quotidiens!
                        <cite><img src="ressources/img/customer-1.jpg" alt="Client 1 photo"/>Ekon Hasani</cite>
                    </blockquote>                    
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Des repas bon marché, sains et savoureux, livrés directement chez moi. Nous avons beaucoup de livraison de nourriture ici à Kyoto, mais personne ne s'approche même d'Omifood. Ma famille et moi sommes tellement amoureux!
                        <cite><img src="ressources/img/customer-2.jpg" alt="Client 2 photo"/>Karen Fukuhara</cite>
                    </blockquote>                    
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Je cherchais un service de livraison de nourriture rapide et facile à Berne. J'ai essayé beaucoup d'entre eux et j'ai fini avec Omnifood. Meilleur service de livraison de nourriture dans la région de la baie. Continuez ce bon travail!
                        <cite><img src="ressources/img/customer-3.jpg" alt="Client 3 photo"/>Jones Yeats</cite>
                    </blockquote>                    
                </div>
            </div>        
        </section>
        
        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2>Commencez à manger sainement aujourd'hui</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Premium</h3> 
                            <p class="plan-price">399€ <span>/ mois</span></p>
                            <p class="plan-price-meal">C’est seulement 13,30€ par repas</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 repas par jour</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Commande 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Accès aux dernières créations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Livraison gratuite</li>
                            </ul>                           
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">S'inscrire maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3> 
                            <p class="plan-price">149€ <span>/ mois</span></p>
                            <p class="plan-price-meal">C’est seulement 14,90€ par repas</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 repas 10 jours/mois</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Commande 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Accès aux dernières créations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Livraison gratuite</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">S'inscrire maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Entrée</h3> 
                            <p class="plan-price">19€ <span>/ repas</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 repas</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Commande de 8h à 12h</li>
                                <li><i class="ion-ios-close-empty icon-small"></i></li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Livraison gratuite</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">S'inscrire maintenant</a>
                        </div>
                    </div>
                </div>
            </div>         
        </section>
        
        <div class="map-box">
            <div id="map">
                <!-- Ici s'affichera la carte -->
            </div>
            <div class="form-box" id="form">
                <div class="row">
                    <h2>Heureux de vous entendre</h2>
                </div>
                <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        <?php 
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Merci! Votre message a été envoyé.</div>";
                            } 

                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oups, une erreur s'est produite. Veuillez réessayer!</div>";
                            } 
                        ?>
                    </div>    
                    
                    
                    
                    <div class="row">
                                            
                        <div class="col span-1-of-3">
                            <label for="name">Nom</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Votre nom" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Votre email" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">Comment nous avez-vous trouvé?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="amis" selected>Amis</option>
                                <option value="recherche">Moteur de recherche</option>
                                <option value="pub">Publicité</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked/>Oui, s'il vous plaît
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Écrivez-nous</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Votre message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" Value="Envoyer!"/>
                        </div>
                    </div>
                </form>
            </div>            
            </div>
        </div>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul  class="footer-nav">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Presse</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul  class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; Lee 2019. Tous droits réservés.
                </p>
            </div>
        </footer>
    
        
    <!--jquery, script, api, map, ..-->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
        
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>	

    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
        
    <script src="ressources/js/script.js"></script>
        
    </body>
            
</html>

<!--


-->