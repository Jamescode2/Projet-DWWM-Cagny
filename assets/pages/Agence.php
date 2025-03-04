<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole de conduite de cagny</title>
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/Agence.css">
    <script src="../js/index.js" defer></script>
    <script src="../js/Agence.js" defer></script>
    <script src="https://kit.fontawesome.com/c14c1b087e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header id="menu">
            <div class="logo">
                <a href="Accueil.html" target="_blank"><img src="../img/logo.jpg"
                        alt="Accueil"></a>
            </div>
            <ul class="menu_li">
                <li class="lien"><a href="Accueil.html">accueil</a></li>
                <li class="lien"><a href="Présentation.html">présentation</a></li>
                <li class="lien formation">
                    <a href="#">formation</a>
                    <div class="dropdown">
                        <a href="PermisB.html">Permis B</a>
                        <a href="Accompagnee.html">Conduite accompagnée</a>
                        <a href="FormationA2.html">Formation A2</a>
                        <a href="FormationAM.html">Formation AM</a>
                        <a href="Formation125.html">Formation 125</a>
                        <a href="PasserelleA2_A.html">Passerelle A2 => A</a>
                        <a href="Horsforfait.html">prestation Hors forfait</a>
                    </div>
                </li>
                <li class="lien"><a href="Agence.php">agence</a></li>
                <li class="lien"><a href="Livre_d'or.php">Livre d'or</a></li>
            </ul>
            <div class="icon">
                <i class="fa fa-bars"></i>
            </div>
            <div class="menu_mobile">
                <a href="Accueil.html">accueil</a>
                <a href="Présentation.html">présentation</a>
                <a href="#" class="dropdown_formation">formation</a>
                <div class="dropdown_mobile">
                    <a href="PermisB.html">
                        <i class='fas fa-angle-right'></i>
                        Permis B
                    </a>
                    <a href="Accompagnee.html">
                        <i class='fas fa-angle-right'></i>
                        Conduite accompagnée
                    </a>
                    <a href="FormationA2.html">
                        <i class='fas fa-angle-right'></i>
                        Formation A2
                    </a>
                    <a href="FormationAM.html">
                        <i class='fas fa-angle-right'></i>
                        Formation AM
                    </a>
                    <a href="Formation125.html">
                        <i class='fas fa-angle-right'></i>
                        Formation 125
                    </a>
                    <a href="PasserelleA2_A.html">
                        <i class='fas fa-angle-right'></i>
                        Passerelle A2 => A
                    </a>
                    <a href="Horsforfait.html">
                        <i class='fas fa-angle-right'></i>
                        prestation Hors forfait
                    </a>
                </div>
                <a href="Agence.php">agence</a>
                <a href="Livre_d'or.php">Livre d'or</a>
            </div>
        </header>

        <div id="carrousel">
            <div class="slide anim">
                <img src="../img/img.jpg" alt="image">
            </div>
            <div class="slide anim">
                <img src="../img/img2.jpg" alt="image">
            </div>

            <div class="slide anim">
                <img src="../img/img3.jpg" alt="image">
            </div>

            <div class="slide anim">
                <img src="../img/img4.jpg" alt="image">
            </div>

            <div class="slide anim">
                <img src="../img/img5.jpg" alt="image">
            </div>

            <div class="slide anim">
                <img src="../img/img6.jpg" alt="image">
            </div>
            <div class="slide anim">
                <img src="../img/img7.jpg" alt="image">
            </div>
            <div class="slide anim">
                <img src="../img/img8.jpg" alt="image">
            </div>
            <div class="titre">
                <h1>Ecole de conduite de Cagny</h1>
                <h2>Cagny</h2>
            </div>
        </div>

        <div id="information">
            <div class="divider"></div>
            <div class="agence">
                <span class="h1bis">Notre agence</span>
                <span class="h2bis">BIENVENUE À L'ECOLE DE CONDUITE DE CAGNY !</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.945383904326!2d-0.25326568433503466!3d49.144661379316545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a6ec8ff427729%3A0x4debc88de3218112!2s%C3%89cole%20de%20conduite%20de%20Cagny!5e0!3m2!1sfr!2sfr!4v1665248509644!5m2!1sfr!2sfr" 
                width="70%" height="450" style="border:0;" 
                allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="divider"></div>

            <div class="contact">
                <div id="textEchec" class="alert alert-danger" style="display:none;"></div>
                <?php if (isset($_SESSION) && isset($_SESSION['echec'])): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['echec']);?>
                    </div>
                <?php unset($_SESSION['echec']); endif;?>

                <form action="contact.php" method="POST">
                    <span class="h2bis">Contactez-nous</span>
                    <hr>
                    <label for="name">Nom <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <input type="text" id="name" name="name" placeholder="Nom">
						</div>
                        <span id="span_name" class="col-2"></span>
					</div>

                    <label for="firstname">Prénom <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <input type="text" id="firstname" name="firstname" placeholder="Prénom">
						</div>
                        <span id="span_firstname" class="col-2"></span>
					</div>
                    
                    <label for="email">Email <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <input type="email" id="email" name="email" placeholder="Email">
						</div>
                        <span id="span_email" class="col-2"></span>
					</div>

                    <label for="tel">Telephone</label>
                    <div class="row">
						<div class="col-8">
                            <input type="tel" id="tel" name="tel" placeholder="Telephone">
						</div>
                        <span id="span_tel" class="col-2"></span>
					</div>

                    <label for="Objet">Objet / Sujet <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <input type="text" id="Objet" name="Objet" placeholder="Objet / Sujet">
						</div>
                        <span id="span_Objet" class="col-2"></span>
					</div>

                    <label for="message">Message <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <textarea id="message" name="message" placeholder="Message" cols="10" rows="10"></textarea>
						</div>
                        <span id="span_message" class="col-2"></span>
					</div>

                    <p><strong><span class="pink">*</span> Ces informations sont requises.</strong></p>

                    <div class="col-8">
                        <input type="button" value="Envoyer" id="FormAJAX">
                    </div>
                </form>

                <div id="textSucces" class="alert alert-success" style="display:none;"></div>
                <?php if (isset($_SESSION) && isset($_SESSION['succes'])): ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['succes'];?>
                    </div>
                <?php unset($_SESSION['succes']); endif;?>
            </div>

            <div class="divider"></div>

            <div class="contact">
                <div id="ReservationEchec" class="alert alert-danger" style="display:none;"></div>

                <form action="reservation.php" method="POST">
                    <span class="h2bis">Vous pouvez réserver </span>
                    <hr>
                    <label for="nom">Nom</label>
                    <div class="row">
						<div class="col-8">
                            <input type="text" id="nom" name="nom" placeholder="Nom">
						</div>
                        <span id="span_nom" class="col-2"></span>
					</div>

                    <label for="prenom">Prénom</label>
                    <div class="row">
						<div class="col-8">
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
						</div>
                        <span id="span_prenom" class="col-2"></span>
					</div>
                    
                    <label for="mail">Email</label>
                    <div class="row">
						<div class="col-8">
                            <input type="email" id="mail" name="mail" placeholder="Email">
						</div>
                        <span id="span_mail" class="col-2"></span>
					</div>

                    <label for="DateReservation">Date de Reservation</label>
                    <div class="row">
						<div class="col-8">
                            <input type="datetime-local" name="DateReservation" id="DateReservation">
                            <input type="datetime-local" name="FinDateReservation" id="FinDateReservation" >
                        </div>
                        <span id="span_DateReservation" class="col-2"></span>
					</div>

                    <label for="msg">Type de reservation <span class="pink">*</span></label>
                    <div class="row">
						<div class="col-8">
                            <textarea id="msg" name="msg" placeholder="Message" cols="10" rows="10"></textarea>
						</div>
                        <span id="span_msg" class="col-2"></span>
					</div>

                    <div class="col-8">
                        <input type="button" value="Reservation" id="Reservation">
                    </div>
                </form>

                <div id="ReservationSucces" class="alert alert-success" style="display:none;"></div>
            </div>
        
            <div class="divider"></div>

            <div class="fb">
                <span class="h2bis">Rejoignez-nous et suivez nos actualités :</span>
                <a href="https://www.facebook.com/ecoledeconduitedecagny/" target="_blank"><img
                        src="../img/fb.png" alt="Facebook Cagny"></a>
            </div>

            <div class="form">
                <span class="h2bis">PERMIS VOITURE TRADITIONNEL B - CONDUITE ACCOMPAGNEE - SUPERVISEE </span>
                <span class="h2bis">PERFECTIONNEMENT - BOITE MANUELLE - BOITE AUTOMATIQUE</span>
            </div>
        </div>


        <div id="service">
            <div class="code">
                <div class="pass">
                    <span class="h2bis">S'entrainer au code sur internet ?</span>
                    <p>C'EST POSSIBLE ! <br>
                        Avec le prépacode cours, prépacode test et l'appli code mobile,
                        connectez-vous et retrouvez des cours multimédias et des tests de code en illimité.</p>
                    <a href="https://www.prepacode-enpc.fr/" target="_blank">PREPACODE</a>

                    <span class="h2bis">Formation en ligne avec Pass Rousseau</span>
                    <a href="https://auto-ecole.codesrousseau.fr/inscription/etape/inscription"
                        target="_blank">FORMATION EN
                        LIGNE</a>
                </div>

                <div class="rousseau">
                    <div>
                        <span class="h2bis">Page auto-école de Cagny</span>
                        <a href="https://auto-ecole.codesrousseau.fr/annuaire-auto-ecoles/cagny/l-ecole-de-conduite-de-cagny/1143"
                            target="_blank">CAGNY</a>
                    </div>
                    <div>
                        <span class="h2bis">Page auto-école de IFS</span>
                        <a href="https://auto-ecole.codesrousseau.fr/annuaire-auto-ecoles/ifs/ifs/24024"
                            target="_blank">IFS</a>
                    </div>
                </div>
            </div>


            <div class="slider">
                <div class="slide2 anim">
                    <img src="../img/voiture.jpg" alt="image">
                </div>
                <div class="slide2 anim">
                    <img src="../img/auto-ecole.jpg" alt="image">
                </div>

                <div class="slide2 anim">
                    <img src="../img/stud.jpg" alt="image">
                </div>

                <div class="slide2 anim">
                    <img src="../img/volant.jpg" alt="image">
                </div>

                <div class="slide2 anim">
                    <img src="../img/ae4.jpg" alt="image">
                </div>

                <div class="slide2 anim">
                    <img src="../img/img9.jpg" alt="image">
                </div>
            </div>
        </div>

        <div id="horaire">
            <div class="divider"></div>
            <div class="disponibilite">
                <span class="h2bis">disponibilité</span>
                <p>Permanence Code et bureau du lundi au Vendredi de 18h à 19h, Samedi de 13 h à 14 h et sur rendez vous
                    au
                    06.45.13.84.14. <br>
                    Pour la conduite prise en charge possible domicile-Ets scolaire-Ets professionnel. <br>
                    Facilité de paiement possible - Modalité de paiement Chèque-Carte bancaire-Espèces.
                </p>
            </div>

            <div class="bloc">
                <div><img src="../img/logo.jpg" alt="l-ecole-de-conduite-de-cagny"></div>
                <div class="entreprise">
                    <span class="h2bis"><i class='fas fa-info-circle'></i> Ecole de conduite de Cagny</span>
                    <p><i class='fas fa-phone'></i> 09 64 05 02 68</p>
                    <p><i class="fa fa-mobile-phone"></i> 06 45 13 84 14</p>
                    <p><a href="mailto:ecoleconduitecagny@orange.fr" target="_blank"><i class='fas fa-mail-bulk'></i>
                            ecoleconduitecagny@orange.fr</a></p>
                    <p><i class='fas fa-map-marker-alt'></i> 73, avenue de Paris <br>
                        14630 CAGNY <br>
                        Calvados | Basse-Normandie</p>
                    <p>Agrément n°E1401400050</p>
                </div>
                <div class="horaire">
                    <button class="accordion">
                        <span class="h2bis"><i class='far fa-clock'></i> HORAIRES</span>
                    </button>
                    <div class="panel">
                        <p>Code & Bureau :</p>
                        <p>Lundi de 18h à 19h</p>
                        <p>Mardi de 18h à 19h</p>
                        <p>Mercredi de 18h à 19h</p>
                        <p>Jeudi de 18h à 19h</p>
                        <p>Vendredi de 18h à 19h</p>
                        <p>Samedi de 13h à 14h</p>
                        <p>Dimanche Fermé</p>
                    </div>


                </div>
            </div>
        </div>

        <footer>
            <div class="chevron-up">
                <img src="../img/fleche.png" alt="chevron-up">
            </div>
            <h3>© l-ecole-de-conduite-de-cagny</h3>
        </footer>
    </div>
</body>

</html>