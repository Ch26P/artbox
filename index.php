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
        <div id="liste-oeuvres">
            <?php foreach($oeuvres as $element ):?>

                <?php if (array_key_exists('enabled', $element) && $element['enabled']): ?>
            
                    <article class="oeuvre">
                        <a href= 'oeuvres.php?id=<?php echo $element['id'];?>'>
                            <img src=<?php echo $element['image'];?> alt=<?php echo $element['alt'];?>>
                            <h2><?php echo $element['titre'];?></h2>
                            <p class="description"><?php echo $element['author'];?></p>
                        </a>
                    </article>
                <?php endif; ?>
            <?php endforeach ?>
        </div>  
        
    </main>

    <?php include('include/footer.php');?>

</body>
</html>
