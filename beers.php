<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/beers.css">
    <title>Les 3 Wilders | Nos bières</title>
</head>

<body>
    <header>
        <?php include './header.php';?>
    </header>

    <main>
        <div class="titre">
            <div class="page-title">
                <p>Les classiques</p>
            </div>
        </div>
        <section class="classic">
            <article class="vincent">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>La Vincent</h2>
                <ul>
                    <li><strong>Type: Neipa</strong></li>
                    <li><strong>alcool: 5.5%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='55' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='35' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        De puissants arômes de fruits exotiques nous envahissent le palais dès la première gorgée de
                        cette bère onctueuse et doucement amère
                    </li>
                </ul>
            </article>
            <article class="yavuz">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>La Yavuz</h2>
                <ul>
                    <li><strong>Type: Double IPA</strong></li>
                    <li><strong>alcool: 8.5%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='90' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='80' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière forte et bien amère ! Fermentée avec du saucissons provenant d'élevage porcin bio venant
                        contrecarrer l'acidité et la douceur de l'agrume et de fruit exotiques.
                    </li>
                </ul>
            </article>
            <article class="eleonore">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>L'Eléonore</h2>
                <ul>
                    <li><strong>Type: Lager de blé</strong></li>
                    <li><strong>alcool: 4.2%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='90' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='80' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière subtile, légère et désaltérante. Une bière de soif florale et légèrement marine qui nous
                        ferait presque voyagerau bord de la Manche dans un début de primptemps.
                    </li>
                </ul>
            </article>
            <article class="benoit">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>La St Benoit</h2>
                <ul>
                    <li><strong>Type: Bière d'abbaye</strong></li>
                    <li><strong>alcool: 6.7%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='90' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='80' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière ronde et gourmande légèrement épicé, non sans rappelé nos folles escapades Lilloise et nos
                        "black out" mémorable !
                    </li>
                </ul>
            </article>
            <article class="ayoub">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>L'Ayoub</h2>
                <ul>
                    <li><strong>Type: Porter</strong></li>
                    <li><strong>alcool: 5.2</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='90' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='80' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière de malte torréfiés lui apportant des aromes de chocolat et de café, a boire absolument le
                        matin tôt accompagné d'un fameux "breafast" Aglais !
                    </li>
                </ul>
            </article>
        </section>

        <div class="titre">
            <div class="page-title">
                <p>Les Ephémères</p>
            </div>
        </div>
        <section class="éphémère">
            <article id="anae" class="anae">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>L'Anaé</h2>
                <ul>
                    <li><strong>Type: Rye Amber Ale</strong></li>
                    <li><strong>alcool: 6.6%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='55' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='35' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière ambrée au seigle. Des notes caramélisées accompagnent les arômes épicés du seigle sur une
                        bière onctueuse. Parfaite pour accompagner vos seances bronzages sous le soleil Niçois.

                    </li>
                </ul>
            </article>
            <article class="gab">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>La Gab'</h2>
                <ul>
                    <li><strong>Type: Imperial Stout</strong></li>
                    <li><strong>alcool: 10.5%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='75' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='100' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière "noir" de seigle et au calvados vielli 24 mois en barrique. Des notes épicé accompagnent
                        les arômes de café et de pomme. Attention car cette bière ne tartine pas votre pain... mais bien
                        votre caboche ! Le lendemain matin risque d'être fort compliqué...
                    </li>
                </ul>
            </article>
            <article class="mat">
                <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                <h2>La Mat' <i class="soldout">SOLD OUT</i></h2>
                <ul>
                    <li><strong>Type: Triple</strong></li>
                    <li><strong>alcool: 8%</strong></li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Amertume</strong></p>
                        <div class="progress-container-amertume">
                            <progress id='p0' value='75' max='100'></progress>
                        </div>
                    </li>
                    <li class="progress-element">
                        <p class="progress-label"><strong>Corps</strong></p>
                        <div class="progress-container-corps">
                            <progress id='p0' value='100' max='100'></progress>
                        </div>
                    </li>
                    <li class="beer-description">
                        Bière de type belge. Légérement sucrée et peu amère. Parfaite en hiver au coin du feu entre amis
                        sur une peau de bête... on ira pas dans les details !

                    </li>
                </ul>
            </article>
        </section>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <div class="trademark">
        Coded by Alexandre, Julien and Philippe
    </div>
</body>

</html>