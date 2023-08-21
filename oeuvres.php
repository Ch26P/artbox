<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php include('include/header.php'); ?>
    <main>

        <?php include_once('include/variables.php');?>
        <?php

            $lastElement=end($oeuvres);

            if (
                (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT))
                && $_GET['id'] <= $lastElement['id'] && $_GET['id']>0   ) :?>
                <?php $oeuvre=$oeuvres[$_GET['id']-1];?>
                    <?php
                        if (
                                (isset($oeuvre['id']) ) &&
                                    array_key_exists('id', $oeuvre) &&
                                    array_key_exists('enabled', $oeuvre) && $oeuvre['enabled'] 
                            ):?>
                            <article id="detail-oeuvre">
                                <div id="img-oeuvre">
                                    <img src=<?php echo $oeuvre['image'];?> alt=<?php echo $oeuvre['alt'];?>>
                                </div>
                                <div id="contenu-oeuvre">
                                    <h1><?php echo $oeuvre['titre'];?></h1>
                                    <p class="description"><?php echo $oeuvre['author'];?></p>
                                    <p class="description-complete">
                                      <?php echo $oeuvre['texte'];?>
                                    </p>
                                </div>
                            </article>

                        <?php else: ?>
                            <article class="erreur">
                                <P class="essai">Cette oeuvre n'est pas visible pour le moment </br></p>
                                <div>   
                                    <a href="index.php">Acceuil</a> 
                                </div>
                            </article>    
                        <?php endif; ?>

            <?php else: ?>
                <article class="erreur">
                    <p>Un probleme est survenue</br>
                    Veuillez retourner à l'acceuil </br>
                    </p>  
                    <div>
                        <a href="index.php">Acceuil</a>
                    </div> 
                </article>       
            <?php endif; ?> 

    </main>

   
    <?php include('include/footer.php');?>

</body>
</html>