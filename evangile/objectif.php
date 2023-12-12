<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Carousel Template · Bootstrap v5.3</title>
    <link rel="stylesheet" href="/projetPcss/page1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/projetPcss/objectif.css">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body class="page">
    <?php include("header.php") ?>;
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
                <img src="/img/planette2.jpg" alt="Description de l'image" width="100%" height="100%">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="/" />
                    </svg> -->
                <div class="container">
                    <div class="carousel-caption ">
                    <h1>Objectifs</h1>
                        <p class=" text-center mb-3">Comme toute chose , se site n'est pas creé sans objectif </p>
                        <p><a class="btn btn-lg btn-primary" href="#page">Cliquez - ici </a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="page"></div>

    <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h2 class="fw-light">Aprenez connaitre nos objectifs</h2>
                    <p class=" text-body-secondary">Notre objectif est simple, faire la volonté de notre Père Céleste. Donné le seigneur Jésus-Christ aux nations, pour vous faire comprendre comment revenir a Dieu, en vous accompagnant à le suivre correctement ! En ayant toutes les connaissances devenir un enfant de Dieu.</p>
                </div>
            </div>
        </section>
    <divc class="evangile">
        <p class="text-center">Vous voyez , au commencement , Dieu creé l'homme , il créa l'homme pour differente raison  , son but principal est que il n'y ai que une seul création, une création parfait,<br/>
        pour accomplire se but il creé des le commencement , un monde parfait. <span class="verset"> ( genése 1 v 31 ) "Dieu vit tout ce qu'il avait fait;et voici, cela était trés bon."</span>
        <br/>Dieu n'est pas un menteur ! il a rendu son verdic en disant " Que c'était trés bon " c'est que cette chose etait reélement bonne dans tous les domaines <br/> 
        toute la création y compris l'homme . L'homme etait donc parfait d'es la création ! le coeur de Dieu fut satisfait.
        </p>
        <h2 class="fw-light text-center">POURQUOI DIEU CREA L'HOMME</h2>
        <p class="text-center"> Les raison sont les suivante :</p>
        <ul class="list-group">
            <li class="list-group-item text-center"> 1 :Une comunion spéciale avec Dieu , ressentire se que Dieu ressent, satisfaire le coeur de Dieu.</li>
            <li class="list-group-item text-center">2 : Pour dominer sur le reste de al création</li>
            <li class="list-group-item text-center">3 : Assujettir la terre, cultiver, et garder le jardin dans lequel il etait ( jardin d'Eden ) </li>
            <li class="list-group-item text-center">4 :l'homme devais obeir a Dieu en toute chose </li>
        </ul>
    </div>
    <div class="evangile2">
        <p class="text-center">Enfaite Dieu n'avais pas crée l'homme sans but ! Quand adam fut creé il avais une comunion avec Dieu ! il etait bien au jardin , <br/> il n'avais pas la connaissance du bien et du mal , il ne connaissait pas le péché , Adam etait pur ! 
            Dieu avais placé 2 arbre au millieu du jardin ! <br/> l'abre de vie et l'arbre de la connaisssance du bien et du mal ! Dieu  avait interdi a adam d'un commandement simple , 
            tu ne mangeras pas le fuit de l'abre de la connaissance du bien et du mal : <br/> <span class="verset"> ( genése 2 v 17 : "Tu pourras mangers tout les fruits de tous les arbres du jardin; mais tu ne mangeras pas de l'abre de la connaissance du bien et du mal" ) </span><br/>
            l'homme avais la liberté de mangers tout les fruit , il avais la liberté de mangers nimporte quel fruit,de tout les arbes du jardin ,<br/>  on ne connais pas le nombre exacte du nombre d'abre mais se qui est sur ses qu'il en avais pas que un, je pence meme que le nombre etait ilimité.<br/>
            IL avais devant lui un large choix, le commandement de Dieu et strick , trés strick : Dieu dit , "le jour où tu mangeras, tu mourra."l'homme n'etait pas affamé pour désobeir.
            
        </p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
