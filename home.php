<?php
$stmt = $pdo->prepare('SELECT * FROM vehicule LIMIT 6');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<?=template_header('Acceuil')?>
    <main>
        <section class="garagePicture">
            <figure>
            <img src="https://images.midilibre.fr/api/v1/images/view/604451ae3e4546063c597e2b/large/image.jpg?v=3" alt="" srcset="">
            <figcaption>1960,"Renault-Saint-Fulcran" prospère sur l'avenue de Fumel. / MIDI LIBRE -  ALAIN MENDEZ</figcaption>
            </figure>
        </section>
        <div id="vehicules"></div>
        <div class="cate"><h2>Véhicules</h2><a href="index.php?page=vehicules"><span class="slide-link slide-line">plus de véhicules</span></a><div class="separation"></div></div>
        <section class="vehicules">
             <?php foreach ($products as $product): ?>
                    <article class="voitures">
                    <a href="index.php?page=vehicules"><img src="<?=$product['img_veh']?>" alt=""></a>
                    <h1 class="titre"><?=$product['nom']?></h1>
                    <p>Prix à partir de <span><?=$product['prix']?> €</span></p>
                    <p><?=$product['descr']?></p>
                    <p>Kilometrage : <?=$product['km']?></p>
                    <p>Année : <?=$product['annee']?></p>
                    <p class="classeEnerg"><?=$product['energie']?></p>
                    </article>
                <?php endforeach; ?>
            
        </section>
        <div id="e&s"></div>
        <div class="cate"><h2>Entretien & Service</h2><div class="separation"></div></div>
        <div class="entretiens">
            <a href="#" class="slide-link slide-line"><span>Entretiens</span><span>Entretiens</span></a>
            <a href="control_technique.html" class="slide-link slide-line"><span>Contrôle Technique</span><span>Contrôle Technique</span></a>
            <a href="#" class="slide-link slide-line"><span>Diagnostics</span><span>Diagnostics</span></a>
            <a href="#" class="slide-link slide-line"><span>Vidange</span><span>Vidange</span></a>
            <a href="carrosserie.html" class="slide-link slide-line"><span>Carrosserie</span><span>Carrosserie</span></a>
            <a href="#" class="slide-link slide-line"><span>Pare-Brise</span><span>Pare-Brise</span></a>
        </div>
    </main>
    <?=template_footer()?>
