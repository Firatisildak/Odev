<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php define("baslik", "Film Listesi"); ?>
    <h1><?php echo baslik; ?></h1>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Macera</li>
                    <li class="list-group-item">Dram</li>
                    <li class="list-group-item">Komedi</li>
                    <li class="list-group-item">Korku</li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <img class="img-fluid" src="img/1.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    $film_baslik = "Paper Lives";
                                    $url = str_replace(" ", "-", strtolower($film_baslik));
                                    echo "<a href='$url'>$film_baslik</a>";
                                    ?>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    $aciklama = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
                                    $ilk_harf = mb_substr($aciklama, 0, 1, 'UTF-8');
                                    $geri_kalan = mb_strtolower(mb_substr($aciklama, 1, mb_strlen($aciklama), 'UTF-8'));
                                    $aciklama_kucuk = $ilk_harf . $geri_kalan;
                                    echo $aciklama_kucuk;
                                    $ilk_50_karakter = substr($aciklama, 0, 50);
                                    $ilk_50_karakter .= "...";
                                    echo $ilk_50_karakter;
                                    ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Viyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <img class="img-fluid" src="img/2.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    $film_baslik = "Walking Dead";
                                    $url = str_replace(" ", "-", strtolower($film_baslik));
                                    echo "<a href='$url'>$film_baslik</a>";
                                    ?>
                                </h5>
                                <p class="card-text">
                                    Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Viyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>