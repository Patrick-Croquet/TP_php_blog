<!-- Page d'accueil -->
<div class="container-fluid row w-100 m-0 p-0" >

    <!-- Section gauche avec de text et bouton-->
    <div class="col-lg-5 bgPurple w-100 ">
        <div>
            <h2 class="text-white display-3 mt-5">Un <strong>blog</strong><br />
                dédié à quelques <br />
                petits <i class="textYellow">plaisirs</i> <br />
                de la vie! </h2>
        </div>

        <!-- bouton épinglé aux articles -->
        <div class="text-center mb-2 mt-lg-5">
            <a href="#articles" class="btn btn-dark font-weight-bolder textYellow "> VOIR LES ARTICLES </a>
        </div>
    </div>
    
    <!-- Section centrale avec de images icones-->
    <div class="row flex-lg-column col-lg-2 bgBlack content-fluid w-100 p-2 m-0 p-lg-0 " style="background-color: black;">
        <div class="col row justify-content-center align-items-center iconEat">
            <i class="fa fa-utensils fa-5x text-white"></i>
        </div>
        <div class="col row justify-content-center align-items-center iconTravel">
            <i class="fa fa-passport fa-5x text-white"></i>
        </div>
        <div class="col row justify-content-center align-items-center iconPlay">
            <i class="fa fa-play-circle fa-5x text-white"></i>
        </div>
    </div>

    <!-- Section droite avec un carrousel -->
    <div id="carouselExampleControls" class="carousel slide col-lg-5 p-0" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <img src="images/theme/place.jpg" class="d-block w-100 cover" alt="...">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="images/theme/eat.jpg" class="d-block w-100 cover" alt="...">
            </div>
            <div class="carousel-item" data-interval="3000">
            <img src="images/theme/play.jpg" class="d-block w-100 cover" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Liste des articles du blog -->
<div id="articles" class="container p-4 mt-5">
    <hr>
    <h2 class="text-center mt-5 pt-5">- Articles -</h2>
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach($posts as $post): ?>
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/articles/<?=$post["Image"]?>" alt="image de l\'article">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($post['Title']) ?></h5>
                        <!-- Seul un extrait de l'article du blog est affiché -->
                        <p class="card-text"><?= substr(htmlspecialchars($post['Contents']), 0, 100) ?>&nbsp;[...]</p>
                        <small>
                            Rédigé par <?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?>
                            le <?= htmlspecialchars($post['CreationTimestamp']) ?>
                        </small> <br />                
                        <!-- Lien vers article de blog détaillé avec les commentaires -->
                        <div class="text-center p-3">
                            <a href="show_post.php?id=<?= intval($post['Id']) ?>" class="btn btn-dark textYellow">Consulter l'article</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>   
    </div>
</div>