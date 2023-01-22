<?php 
    include 'header.php';
    $participant=getparticipant($_GET['id']);
?>
<div class="col-lg-8 col-xlg-9 col-md-12 " width="80">
    <div class="home-content">
        <div>
            <div class="row">
                <div class="overview-boxes justify-content-center">
                    <form class="form-horizontal form-material" action="<?= !empty($_GET['id']) ? "../model/modifier_participant.php" : "../model/ajout_participant.php"?>" method="post">
                        <label for="nom_participant">Nom</label>
                        <input value="<?= !empty($_GET['id']) ? $participant['nom'] : ""?>" type="text" name="nom_participant" id="nom_participant" placeholder="">
                        <input value="<?= !empty($_GET['id']) ? $participant['id'] : ""?>" type="hidden" name="id" id="id">
                        
                        <div>
                            <label for="prenom_participant">Prénon</label>
                            <input value="<?= !empty($_GET['id']) ? $participant['prenom'] : ""?>" type="text" name="prenom_participant" id="prenom_participant" placeholder="">
                        </div>
                        <div>

                            <label for="numero_participant">Téléphone</label>
                            <input value="<?= !empty($_GET['id']) ? $participant['telephone'] : ""?>" type="text" name="numero_participant" id="numero_participant" placeholder="">
                            
                        </div>
                        <div>

                            <label for="email_participant">Email</label>
                            <input value="<?= !empty($_GET['id']) ? $participant['gmail'] : ""?>" type="email" name="email_participant" id="email_participant" placeholder="">
                            
                        </div>
                        
                        <button type="submit"><?= !empty($_GET['id']) ? 'Modifier' : "Valider"?></button>
                        <?php 
                            if(!empty($_SESSION['message']['text'])){
                        ?>
                            <div class="alert <?= $_SESSION['message']['type']?>">
                            <?=$_SESSION['message']['text'];?>
                            </div>
                        <?php 
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
    include 'footer.php';
?>


<script>
    function annuleVente(id_vente, id_participant, prenom_participant){
        if(confirm("Voulez-vous vraiment annnuler cette vente ?")){
            window.location.href = "../model/annuleVente.php?id_vente="+ id_vente + "&id_participant="+ id_participant + "&prenom_participant="+prenom_participant
        }
    }
</script>