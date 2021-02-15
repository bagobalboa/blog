<?php
$titre = 'Mes supers articles | Mon super Blog';
include 'layout/header.php'; ?>

<h1>Mes super articles</h1>
<div class="list-group my-4">


    <?php
    include 'fonctions/fonctions_bdd.php';

    include 'fonctions/mes_fonctions.php';

    $variable_article = getArticle();


    foreach ($variable_article as $article) {
        affichage($article);
    }

    ?>


</div>

<?php include 'layout/footer.php'; ?>