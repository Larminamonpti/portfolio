<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PorteFolio | Quentin Jeannet</title>
</head>
<body>
<div id="fleche">
<a href="#first" class="ancre"><i class="fas fa-arrow-up"></i></a>
</div>
    <div class="screen" id="first">
        <h1>Bienvenue sur le Portfolio de <span>Quentin Jeannet</span></h1>
        <a id="bouton" href="#second">Decouvrez mon travail</a>
    </div>     
    <div class="screen" id="second">
        <header id="header">
            <nav id="nav">
                <a href="#first" class="ancre">Accueil</a>
                <a href="#second" class="ancre">About</a>
                <a href="#third" class="ancre">Projets</a>
                <a href="#fourth" class="ancre">Contact</a>
            </nav>
        </header>
        <div id="replace"></div>
        <div>
            <div class="titre">
                <h2>ABOUT</h2>
                <div class="souligne"></div>
            </div>
            <div id="about">
                <div id="moi">
                    <div id="img">
                        <img src="img/109555042_3375838422459726_5560614307532242943_o.jpg" alt="une photo de moi" id="monImage">
                    </div>
                    <h3>Développeur web junior</h3>
                    <span>Après 10 ans passés dans le metier des laboratoires, j'ai decidé d'operer une reconversion via une formation et devenir un developpeur web orienté back-end.</span>
                    <span>Je suis actuellement à la recherche d'un stage pour me permettre de mettre en oeuvre les compétences acquises ces derniers mois.</span>
                </div>
                <div id="competence">
                    <div class="d-flex">
                        <span>HTML</span>
                        <div class="gradient"><div id="html"></div><p>70%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>CSS</span>
                        <div class="gradient"><div id="css"></div><p>65%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>PHP</span>
                        <div class="gradient"><div id="php"></div><p>70%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>JavaScript</span>
                        <div class="gradient"><div id="js"></div><p>65%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>Symfony</span>
                        <div class="gradient"><div id="symfo"></div><p>70%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>Laravel</span>
                        <div class="gradient"><div id="lara"></div><p>50%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>Node.js</span>
                        <div class="gradient"><div id="node"></div><p>40%</p></div>
                    </div>
                    <div class="d-flex">
                        <span>React</span>
                        <div class="gradient"><div id="react"></div><p>50%</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="screen" id="third">
        <div>

            <div class="titre">
                <h2>PROJETS</h2>
                <div class="souligne"></div>
            </div>
            <div id="projet">
                    <div class="maquette" id="df">
                        <div class="couche">
                            <a href="">
                                <img src="img/DeFilsEnTetines.JPG" alt="DeFilsEnTetines" id="deFilsEnTetines">
                            </a>
                        </div>
                        <div class="surcouche">
                        <div>
                            <span>De fils en tétines</span>
                            <p>Symfony</p>
                        </div>
                        <div>
                            <a href="">En savoir plus</a>
                        </div>
                    </div>
                    
                </div>
                <div class="maquette" id="mg">
                    <div class="couche">
                        <a href="">
                            <img src="img/memoryGame.JPG" alt="memoryGame" id="memoryGame">
                        </a>
                    </div>
                    <div class="surcouche">
                        <div>
                            <span>Jeu de mémoire</span>
                            <p>Jquery</p>
                        </div>
                        <div>
                            <a href="">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="maquette" id="pz">
                    <div class="couche">
                        <a href="">
                            <img src="img/Puzzle.JPG" alt="Puzzle" id="puzzle">
                        </a>
                    </div>
                    <div class="surcouche">
                            <div>
                                <span>Puzzle</span>
                                <p>jQuery</p>
                            </div>
                            <div>
                                <a href="">En savoir plus</a>
                            </div>
                        </div>
                </div>
                <div class="maquette" id="dv">
                    <div class="couche">
                        <a href="">
                            <img src="img/divinity-original-sin-2-une.jpg" alt="divinity" id="divinity">
                        </a>
                    </div>
                    <div class="surcouche">
                            <div>
                                <span>Divinity builder</span>
                                <p>Symfony/JavaScript</p>
                            </div>
                            <div>
                                <a href="">En savoir plus</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="screen" id="fourth">
        <div class="titre">
            <h2>CONTACT</h2>
            <div class="souligne"></div>
        </div>
        <div id="form">
            <h3><label for="name"> </label> Vous pouver me contacter:</h3>

        <?php
            if(!empty($_SESSION['success'])){
                echo '<div class="alert success">' . $_SESSION['success'] . '</div>';
                unset($_SESSION['success']);
            }
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert erreur">' . $_SESSION['erreur'] . '</div>';
                unset($_SESSION['erreur']);
            }
        ?>
            <form action="mail.php" method="POST">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Veuillez saisir votre nom" tabindex="1" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Veuillez saisir votre email" tabindex="2" required>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Veuillez saisir votre message" tabindex="3" required></textarea>
                </div>
                <div>
                    <button type="submit" name="submit" id="submit" value="submit">ENVOYER</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div>
            <span>Jeannet Quentin &copy; 2021</span>
            <a href="https://www.linkedin.com/in/quentin-jeannet-82696b18a/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
    
    <script src="js/portfolio.js"></script>
</body>
</html>