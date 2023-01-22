<?php 
    include 'header.php';
?>
<!-- <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Listes des participants</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Prenom</th>
                                            <th class="border-top-0">Gmail</th>
                                            <th class="border-top-0">Telephone</th>
                                        </tr>
                                    </thead> -->
<div class="home-content">
    <div class="overview-boxes">
        <div class="white-box" style="margin-top: -30%">
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <tr class="table_head">
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Non</th>
                        <th class="border-top-0">Prénom</th>
                        <th class="border-top-0">Téléphone</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Action</th>
                    </tr>
                    <?php 
                        $participants = getparticipant();
                        if(!empty($participants) && is_array($participants)){
                            foreach ($participants as $key => $value) {
                            
                    ?>
                        <tr class="tr">
                            <td><?= $value["date"]?></td>
                            <td><?= $value["nom"]?></td>
                            <td><?= $value["prenom"]?></td>
                            <td><?= $value["telephone"]?></td>
                            <td><?= $value["gmail"]?></td>
                            <td>
                                <a href="ajout_participant.php?id=<?=$value['id']?>"><i class="bx bx-edit-alt"></i></a>
                            </td>
                        </tr>
                    <?php 
                        }
                        }
                    ?>
                </table>
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