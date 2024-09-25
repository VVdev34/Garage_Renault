<?php
$stmt = $pdo->prepare('SELECT * FROM vehicule');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<?=template_header('Véhicules')?>
    <main>
        <div id="vehicules"></div>
        <section class="vehicules">
             <?php foreach ($products as $product): ?>
                    <article class="voitures">
                    <img src="<?=$product['img_veh']?>" alt="">
                    <h1 class="titre"><?=$product['nom']?></h1>
                    <p>Prix à partir de <span><?=$product['prix']?> €</span></p>
                    <p><?=$product['descr']?></p>
                    <p>Kilometrage : <?=$product['km']?></p>
                    <p>Année : <?=$product['annee']?></p>
                    <p class="classeEnerg"><?=$product['energie']?></p>
                    </article>
                <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <div id="contact">
            <p class="tel"  itemprop="telephone"><span>Télephone</span><a href="tel : 04 67 44 00 53"> : 04 67 44 00 53</a></p>
            <p class="adresse"><span>Adresse</span> : 356 Av. Général de Gaulle, 34700 Lodève</p>
            <p  class="droit"><a href="adminpage.html">Tous droits réservés</a></p> 
        </div>
        <div class="horaires">
            <ul>
                <li><span>Lundi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Mardi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Mercredi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Jeudi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Vendredi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Samedi</span> : Fermé</li>
                <li><span>Dimanche</span> : Fermé</li>
            </ul>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>