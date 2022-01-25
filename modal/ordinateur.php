<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$marque_ordinateur = $conn->prepare("SELECT * FROM t_marque_ordinateur");
$marque_ordinateur->execute();
$modele_ordinateur = $conn->prepare("SELECT * FROM t_modele");
$modele_ordinateur->execute();
$couleur_ordinateur = $conn->prepare("SELECT * FROM t_couleur");
$couleur_ordinateur->execute();
$garantie_ordinateur = $conn->prepare("SELECT * FROM t_garantie");
$garantie_ordinateur->execute();
$etat_ordinateur = $conn->prepare("SELECT * FROM t_etat_materiel");
$etat_ordinateur->execute();
$type_hdd = $conn->prepare("SELECT * FROM t_type_hdd");
$type_hdd->execute();
$nombre_hdd = $conn->prepare("SELECT * FROM t_nombre_hdd");
$nombre_hdd->execute();
$capacite_hdd = $conn->prepare("SELECT * FROM t_capacite_hdd");
$capacite_hdd->execute();
$type_ordinateur = $conn->prepare("SELECT * FROM t_type_ordinateur");
$type_ordinateur->execute();
$type_clavier = $conn->prepare("SELECT * FROM t_type_clavier");
$type_clavier->execute();
$os = $conn->prepare("SELECT * FROM t_os");
$os->execute();
$taille_ecran = $conn->prepare("SELECT * FROM t_taille_ecran");
$taille_ecran->execute();
$type_port_projecteur = $conn->prepare("SELECT * FROM t_type_port_projecteur");
$type_port_projecteur->execute();
$tension_batterie = $conn->prepare("SELECT * FROM t_tension_batterie");
$tension_batterie->execute();
$marque_cadenat = $conn->prepare("SELECT * FROM t_marque_cadenat");
$marque_cadenat->execute();
$affectation = $conn->prepare("SELECT * FROM t_affectation ORDER BY Affectation");
$affectation->execute();
$fournisseur = $conn->prepare("SELECT * FROM t_fournisseur");
$fournisseur->execute();
$type_ram = $conn->prepare("SELECT * FROM t_type_ram");
$type_ram->execute();
		
$pdo->close();
?>
<!-- Add -->
<div class="modal fade" id="addordinateur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Enregistrer un ordinateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_ordinateur.php" enctype="multipart/form-data">
                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Marque</label>

                            <div class="col-sm-4">
                                <select class="form-control" name="marque" id="marque">
                                    <?php
                                    foreach($marque_ordinateur as $marque){
                                        ?>
                                        <option value="<?php echo $marque['CodeMarque']; ?>"><?php echo $marque['Valeur']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Modele</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="modele" id="modele">
                            <?php
                                foreach($modele_ordinateur as $modele){
                                    ?>
                                    <option value="<?php echo $modele['CodeModele']; ?>"><?php echo $modele['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                            
                        </div>
                </div>
                


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="user" name="user">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Etiquette</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="etiquette" name="etiquette"required>
                           
                            </div>
                        </div>
                </div>



                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Couleur</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="couleur" id="couleur">
                            <?php
                                foreach($couleur_ordinateur as $couleur){
                                    ?>
                                    <option value="<?php echo $couleur['CodeCouleur']; ?>"><?php echo $couleur['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Garantie</label>

                            <div class="col-sm-3">
                                <select class="form-control" name="garantie" id="garantie">
                                <?php
                                    foreach($garantie_ordinateur as $garantie){
                                        ?>
                                        <option value="<?php echo $garantie['CodeGarantie']; ?>"><?php echo $garantie['Valeur']; ?> ans</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                </div>



                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Etat</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="etat" id="etat">
                                <?php
                                    foreach($etat_ordinateur as $etat){
                                        ?>
                                        <option value="<?php echo $etat['CodeEtat']; ?>"><?php echo $etat['Valeur']; ?></option>
                                        <?php
                                    }
                                    ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Type HDD</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="typehdd" id="typehdd">
                                <?php
                                foreach($type_hdd as $type_hdd){
                                    ?>
                                    <option value="<?php echo $type_hdd['CodeTypeHDD']; ?>"><?php echo $type_hdd['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Nombre HDD</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="nombrehdd" id="nombrehdd">
                            <?php
                                foreach($nombre_hdd as $nombre_hdd){
                                    ?>
                                    <option value="<?php echo $nombre_hdd['CodeNombreHDD']; ?>"><?php echo $nombre_hdd['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Capacite HDD</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="capacitehdd" id="capacitehdd">
                            <?php
                                foreach($capacite_hdd as $capacite_hdd){
                                    ?>
                                    <option value="<?php echo $capacite_hdd['CodeCapaciteHDD']; ?>"><?php echo $capacite_hdd['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Type Ordinateur</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="typeordinateur" id="typeordinateur">
                                <?php
                                foreach($type_ordinateur as $type_ordinateur){
                                    ?>
                                    <option value="<?php echo $type_ordinateur['CodeTypeOrdinateur']; ?>"><?php echo $type_ordinateur['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Type clavier</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="typeclavier" id="typeclavier">
                                <?php
                                foreach($type_clavier as $type_clavier){
                                    ?>
                                    <option value="<?php echo $type_clavier['CodeTypeClavier']; ?>"><?php echo $type_clavier['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>



                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Système d'expl.</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="systeme" id="systeme">
                                <?php
                                foreach($os as $os){
                                    ?>
                                    <option value="<?php echo $os['CodeOS']; ?>"><?php echo $os['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Taille ecran</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="tailleecran" id="tailleecran">
                                <?php
                                foreach($taille_ecran as $capacite_hdd){
                                    ?>
                                    <option value="<?php echo $capacite_hdd['CodeTailleEcran']; ?>"><?php echo $capacite_hdd['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>



                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Port à projecteur</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="typeport" id="typeport">
                                <?php
                                foreach($type_port_projecteur as $type_port_projecteur){
                                    ?>
                                    <option value="<?php echo $type_port_projecteur['CodeTypePortProjecteur']; ?>"><?php echo $type_port_projecteur['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Tension Batterie</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="tensionbatterie" id="tensionbatterie">
                                <?php
                                foreach($tension_batterie as $tension_batterie){
                                    ?>
                                    <option value="<?php echo $tension_batterie['CodeTensionBatterie']; ?>"><?php echo $tension_batterie['Value']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Type de cadenat</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="typecadenat" id="typecadenat">
                                <?php
                                foreach($marque_cadenat as $marque_cadenat){
                                    ?>
                                    <option value="<?php echo $marque_cadenat['CodeMarqueCadenat']; ?>"><?php echo $marque_cadenat['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Affectation</label>

                            <div class="col-sm-3">
                            <select class="form-control" name="affectation" id="affectation">
                                <?php
                                foreach($affectation as $affectation){
                                    ?>
                                    <option value="<?php echo $affectation['CodeAffectation']; ?>"><?php echo $affectation['Affectation']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                </div>



                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Fournisseur</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="fournisseur" id="fournisseur">
                                <?php
                                foreach($fournisseur as $fournisseur){
                                    ?>
                                    <option value="<?php echo $fournisseur['CodeFournisseur']; ?>"><?php echo $fournisseur['NomFournisseur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Numero clé</label>

                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="cle" name="cle">
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Date Acquisition</label>

                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="dateacquisition" name="dateacquisition">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Poids</label>

                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="poid" name="poid">
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Mac LAN</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="lan" name="lan">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Mac WIFI</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="wifi" name="wifi">
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Type RAM</label>

                            <div class="col-sm-4">
                            <select class="form-control" name="typeram" id="typeram">
                                <?php
                                foreach($type_ram as $type_ram){
                                    ?>
                                    <option value="<?php echo $type_ram['CodeTypeRAM']; ?>"><?php echo $type_ram['Valeur']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Capacite RAM</label>

                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="capaciteram" name="capaciteram">
                            </div>
                        </div>
                </div>


                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Capacité processeur</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="capaciteprocesseur" name="capaciteprocesseur">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Nombre de coeur processeur</label>

                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="nombrecoeur" name="nombrecoeur">
                            </div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Photo 1</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="photo1" name="photo1">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Photo 2</label>

                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="photo2" name="photo2">
                            </div>
                        </div>
                </div>

                <div class="form-group">
                        <div class="row">
                            <label for="marque" class="col-sm-2 control-label">Photo 3</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="photo3" name="photo3">
                            </div>


                            <label for="marque" class="col-sm-2 control-label">Observation</label>

                            <div class="col-sm-3">
                                <textarea name="observation" id="observation" class="form-control" cols="10" rows="2"></textarea>
                            </div>
                        </div>
                </div>
                <!-- <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Etiquette</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="etiquette" name="etiquette">
                    </div>
                </div> -->
                
                <!-- <div class="form-group">
                    <label for="user" class="col-sm-3 control-label">Nom d'utilisateur</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                </div>
                <div class="form-group">
                    <label for="modele" class="col-sm-3 control-label">Modele</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="modele" id="modele">
                        <?php
                            foreach($modele_ordinateur as $modele){
                                ?>
                                <option value="<?php echo $modele['CodeModele']; ?>"><?php echo $modele['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="couleur" class="col-sm-3 control-label">Couleur</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="couleur" id="couleur">
                        <?php
                            foreach($couleur_ordinateur as $couleur){
                                ?>
                                <option value="<?php echo $couleur['CodeCouleur']; ?>"><?php echo $couleur['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="garantie" class="col-sm-3 control-label">Garantie</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="garantie" id="garantie">
                        <?php
                            foreach($garantie_ordinateur as $garantie){
                                ?>
                                <option value="<?php echo $garantie['CodeGarantie']; ?>"><?php echo $garantie['Valeur']; ?> ans</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="etat" class="col-sm-3 control-label">Etat</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="etat" id="etat">
                        <?php
                            foreach($etat_ordinateur as $etat){
                                ?>
                                <option value="<?php echo $etat['CodeEtat']; ?>"><?php echo $etat['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="typehdd" class="col-sm-3 control-label">Type HDD</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typehdd" id="typehdd">
                        <?php
                            foreach($type_hdd as $type_hdd){
                                ?>
                                <option value="<?php echo $type_hdd['CodeTypeHDD']; ?>"><?php echo $type_hdd['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="nombrehdd" class="col-sm-3 control-label">Nombre HDD</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="nombrehdd" id="nombrehdd">
                        <?php
                            foreach($nombre_hdd as $nombre_hdd){
                                ?>
                                <option value="<?php echo $nombre_hdd['CodeNombreHDD']; ?>"><?php echo $nombre_hdd['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="capacitehdd" class="col-sm-3 control-label">Capacite HDD</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="capacitehdd" id="capacitehdd">
                        <?php
                            foreach($capacite_hdd as $capacite_hdd){
                                ?>
                                <option value="<?php echo $capacite_hdd['CodeCapaciteHDD']; ?>"><?php echo $capacite_hdd['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="typeordinateur" class="col-sm-3 control-label">Type Ordinateur</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typeordinateur" id="typeordinateur">
                        <?php
                            foreach($type_ordinateur as $type_ordinateur){
                                ?>
                                <option value="<?php echo $type_ordinateur['CodeTypeOrdinateur']; ?>"><?php echo $type_ordinateur['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="typeclavier" class="col-sm-3 control-label">Type clavier</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typeclavier" id="typeclavier">
                        <?php
                            foreach($type_clavier as $type_clavier){
                                ?>
                                <option value="<?php echo $type_clavier['CodeTypeClavier']; ?>"><?php echo $type_clavier['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="systeme" class="col-sm-3 control-label">Système d'exploitation</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="systeme" id="systeme">
                        <?php
                            foreach($os as $os){
                                ?>
                                <option value="<?php echo $os['CodeOS']; ?>"><?php echo $os['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tailleecran" class="col-sm-3 control-label">Taille ecran</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="tailleecran" id="tailleecran">
                        <?php
                            foreach($taille_ecran as $capacite_hdd){
                                ?>
                                <option value="<?php echo $capacite_hdd['CodeTailleEcran']; ?>"><?php echo $capacite_hdd['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="typeport" class="col-sm-3 control-label">Type de port à projecteur</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typeport" id="typeport">
                        <?php
                            foreach($type_port_projecteur as $type_port_projecteur){
                                ?>
                                <option value="<?php echo $type_port_projecteur['CodeTypePortProjecteur']; ?>"><?php echo $type_port_projecteur['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tensionbatterie" class="col-sm-3 control-label">Tension Batterie</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="tensionbatterie" id="tensionbatterie">
                        <?php
                            foreach($tension_batterie as $tension_batterie){
                                ?>
                                <option value="<?php echo $tension_batterie['CodeTensionBatterie']; ?>"><?php echo $tension_batterie['Value']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="typecadenat" class="col-sm-3 control-label">Type de cadenat</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typecadenat" id="typecadenat">
                        <?php
                            foreach($marque_cadenat as $marque_cadenat){
                                ?>
                                <option value="<?php echo $marque_cadenat['CodeMarqueCadenat']; ?>"><?php echo $marque_cadenat['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="affectation" class="col-sm-3 control-label">Affectation</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="affectation" id="affectation">
                        <?php
                            foreach($affectation as $affectation){
                                ?>
                                <option value="<?php echo $affectation['CodeAffectation']; ?>"><?php echo $affectation['Affectation']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="fournisseur" class="col-sm-3 control-label">Fournisseur</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="fournisseur" id="fournisseur">
                        <?php
                            foreach($fournisseur as $fournisseur){
                                ?>
                                <option value="<?php echo $fournisseur['CodeFournisseur']; ?>"><?php echo $fournisseur['NomFournisseur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cle" class="col-sm-3 control-label">Numero clé</label>

                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="cle" name="cle">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="dateacquisition" class="col-sm-3 control-label">Date Acquisition</label>

                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="dateacquisition" name="dateacquisition">
                    </div>
                </div>
                <div class="form-group">
                    <label for="poid" class="col-sm-3 control-label">Poids</label>

                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="poid" name="poid">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="lan" class="col-sm-3 control-label">Mac LAN</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lan" name="lan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="wifi" class="col-sm-3 control-label">Mac WIFI</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="wifi" name="wifi">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="typeram" class="col-sm-3 control-label">Type RAM</label>

                    <div class="col-sm-9">
                        <select class="form-control" name="typeram" id="typeram">
                        <?php
                            foreach($type_ram as $type_ram){
                                ?>
                                <option value="<?php echo $type_ram['CodeTypeRAM']; ?>"><?php echo $type_ram['Valeur']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="capaciteram" class="col-sm-3 control-label">Capacite RAM</label>

                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="capaciteram" name="capaciteram">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="capaciteprocesseur" class="col-sm-3 control-label">Capacité processeur</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="capaciteprocesseur" name="capaciteprocesseur">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombrecoeur" class="col-sm-3 control-label">Nombre de coeur processeur</label>

                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="nombrecoeur" name="nombrecoeur">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="photo1" class="col-sm-3 control-label">Photo 1</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="photo1" name="photo1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo2" class="col-sm-3 control-label">Photo 2</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="photo2" name="photo2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo3" class="col-sm-3 control-label">Photo 3</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="photo3" name="photo3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="observation" class="col-sm-3 control-label">Observation</label>

                    <div class="col-sm-9">
                        <textarea name="observation" id="observation" class="form-control" cols="10" rows="2"></textarea>
                    </div>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enregistrer</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- end add -->
<?php
$conn = $pdo->open();

$marque_ordinateur2 = $conn->prepare("SELECT * FROM t_marque_ordinateur");
$marque_ordinateur2->execute();
$modele_ordinateur2 = $conn->prepare("SELECT * FROM t_modele");
$modele_ordinateur2->execute();
$couleur_ordinateur2 = $conn->prepare("SELECT * FROM t_couleur");
$couleur_ordinateur2->execute();
$garantie_ordinateur2 = $conn->prepare("SELECT * FROM t_garantie");
$garantie_ordinateur2->execute();
$etat_ordinateur2 = $conn->prepare("SELECT * FROM t_etat_materiel");
$etat_ordinateur2->execute();
$type_hdd2 = $conn->prepare("SELECT * FROM t_type_hdd");
$type_hdd2->execute();
$nombre_hdd2 = $conn->prepare("SELECT * FROM t_nombre_hdd");
$nombre_hdd2->execute();
$capacite_hdd2 = $conn->prepare("SELECT * FROM t_capacite_hdd");
$capacite_hdd2->execute();
$type_ordinateur2 = $conn->prepare("SELECT * FROM t_type_ordinateur");
$type_ordinateur2->execute();
$type_clavier2 = $conn->prepare("SELECT * FROM t_type_clavier");
$type_clavier2->execute();
$os2 = $conn->prepare("SELECT * FROM t_os");
$os2->execute();
$taille_ecran2 = $conn->prepare("SELECT * FROM t_taille_ecran");
$taille_ecran2->execute();
$type_port_projecteur2 = $conn->prepare("SELECT * FROM t_type_port_projecteur");
$type_port_projecteur2->execute();
$tension_batterie2 = $conn->prepare("SELECT * FROM t_tension_batterie");
$tension_batterie2->execute();
$marque_cadenat2 = $conn->prepare("SELECT * FROM t_marque_cadenat");
$marque_cadenat2->execute();
$affectation2 = $conn->prepare("SELECT * FROM t_affectation");
$affectation2->execute();
$fournisseur2 = $conn->prepare("SELECT * FROM t_fournisseur");
$fournisseur2->execute();
$type_ram2 = $conn->prepare("SELECT * FROM t_type_ram");
$type_ram2->execute();
$adapt = $conn->prepare("SELECT * FROM t_adaptateur WHERE CodeService=?");
$adapt->execute(array($service));
		
$pdo->close();
?>
<!-- user -->

<!-- <div class="modal fade" id="affecter_utilisateur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Modifier Nom Utilisateur</b></h4>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="POST" action="operation/affecter_user.php" enctype="multipart/form-data">
                <input type="hidden" class="user" name="id">
                <div class="form-group">
                    <label for="utilisateur_update" class="col-sm-3 control-label">Utilisateur</label>
                    <div class="col-sm-9">
                      <input type="text" name="utilisateur_update" id="utilisateur_update" class="form-control">
                    </div>
                </div>
                
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Modifier</button>
              </form>
            </div>
        </div>
    </div>
</div> -->




<!-- affecter adaptateur -->
<div class="modal fade" id="affecter_adaptateur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Affecter adaptateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/affecter_adapt.php" enctype="multipart/form-data">
                <input type="hidden" class="adaptateur" name="id">
                <div class="form-group">
                    <label for="modele" class="col-sm-3 control-label">Adaptateur</label>

                    <div class="col-sm-9">
                      <select name="adapt" id="adapt" class="form-control">
                        <?php
                        foreach($adapt as $row)
                        {
                            ?>
                            <option value="<?php echo $row['CodeAdaptateur']; ?>"><?php echo $row['Etiquette']; ?></option>
                            <?php

                        }
                        ?>
                        
                      </select>
                    </div>
                </div>
                
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-danger btn-flat" name="remove"><i class="fa fa-save"></i> Debrancher</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Brancher</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- affecter utilisateur -->
<!-- <div class="modal fade" id="affecter_utilisateur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Affecter Nom Utilisateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/affecter_user.php" enctype="multipart/form-data">
                <input type="hidden" class="user" name="id">
                <div class="form-group">
                    <label for="utilisateur_update" class="col-sm-3 control-label">Utilisateur</label>
                    <div class="col-sm-9">
                      <input type="text" name="utilisateur_update" id="utilisateur_update" class="form-control">
                    </div>
                </div>
                
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Brancher</button>
              </form>
            </div>
        </div>
    </div>
</div> -->
