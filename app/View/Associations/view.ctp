<!-- Fichier : /app/View/Associations/view.ctp -->
<?php
//echo $asso['Association']['nom_asso'];
?>
<br/>

<?php
/* A AFFICHER SI C'EST UN DONNEUR QUI CONSULTE LA PAGE */
//echo $this->Html->link("AJOUTER CETTE ASSOCIATION A MES FAVORIS :D", array('controller' => 'favoris','action'=> 'saveFavori', $asso['Association']['id']));
//echo $this->Html->link("AJOUTER CETTE ASSOCIATION A MES FAVORIS :D", array('controller' => 'donneurs','action'=> 'saveFavori', $asso['Association']['id']));

//echo '<br/>';

//echo $this->Html->link("FAIRE UN DON <3", array('controller' => 'dons','action'=> 'donUnique', $asso['Association']['id']));
?>

<?php
//pr($asso);

//if($asso['Association']['photo'] != "") echo $this->Html->image($asso['Association']['photo'], array('alt' => 'photo_profil', 'class' => 'img-circle'));

?>


<br/>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1><?php echo h($asso['User']['username']); ?></h1>

                    <div class="row">
                        <?php if ($asso['Association']['photo'] != "") echo $this->Html->image($asso['Association']['photo'], array('alt' => 'photo_profil', 'class' => 'img-circle')); ?>
                    </div>
                </div>

                <br />

                <div class="panel panel-info col-md-10 col-md-offset-1">
                    <div class="panel-heading col-md-offset-0" >
                        <h3 class="panel-title">Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Nom : </strong><?php echo h($asso['Association']['nom_asso']); ?><br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Mail : </strong><?php echo h($asso['Association']['mail']); ?><br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Adresse postale : </strong><?php echo h($asso['Association']['adresse_postale']); ?>
                                <br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Numéro de téléphone : </strong><?php echo h($asso['Association']['numero_tel']); ?>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-info col-md-10 col-md-offset-1">
                    <div class="panel-heading">
                        <h3 class="panel-title">Description</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo h($asso['Association']['description_longue']); ?>
                    </div>

                </div>

                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo $this->Html->link(
                            'Modifier',
                            array('action' => 'edit', $asso['Association']['id']),
                            array('class' => 'btn btn-lg btn-block btn-warning active')
                        );
                        ?>

                    </div>
                    <!-- end IF -->
                </div>

                <div class="row"><br /></div>

            </div>
        </div>
    </div>
</div>
