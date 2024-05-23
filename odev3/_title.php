<?php

    $ozet = count(getData()["categories"]).' kategoride '.count(getData()["movies"]).'  film listelenmiştir';
    const baslik = "Popüler Filmler";
?>

<?php  foreach(getData()["movies"] as $id => $film): ?> 

    <?php if($film["is-active"]):?>
        <h1 class="mb-4"><?php echo baslik?></h1>
        <p class="text-muted">
            <?php echo $ozet?>
        </p>
    <?php endif;?>
<?php endforeach; ?>