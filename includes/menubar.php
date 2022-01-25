<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['Photo'])) ? 'img/'.$user['Photo'] : 'img/user.png'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php //echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Enline</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">RAPPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <?php if($user['CodeService']==1 || $user['CodeService']==2)
      {
        ?>
        
      <li><a href="ordinateur.php"><i class="fa fa-desktop"></i> <span>Ordinateur</span></a></li>
      <li><a href="adaptateur.php"><i class="fa fa-dashboard"></i> <span>Adaptateur</span></a></li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-list"></i>
          <span>Autres équipements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php
          $conn = $pdo->open();

          $categ2 = $conn->prepare("SELECT * FROM t_categorie_materiel WHERE CodeService=? AND Status=1 ORDER BY Designation");
          $categ2->execute(array($service));
          
          $pdo->close();
          foreach($categ2 as $row)
          {
            if($row['Designation'] == 'Ordinateur' || $row['Designation'] == 'ORDINATEUR')
            {
              
            }
            else{
              ?>
              <li><a href="equipement.php?id=<?php echo $row['CodeCategorie']; ?>"><i class="fa fa-circle-o"></i> <?php echo $row['Designation']; ?></a></li>
              <?php
            }
              ?>
              <!-- <li><a href="materiel.php?id=<?php echo $row['CodeCategorie']; ?>"><i class="fa fa-circle-o"></i> <?php echo $row['Designation']; ?></a></li> -->
              <?php
          }
          ?>
        </ul>
      </li>
      <?php
      }elseif($user['CodeService']==3){
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Nos équipements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="ecran.php"><i class="fa fa-circle-o"></i> Ecrans</a></li>
          </ul>
        </li>
        <?php
      } ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Frequantant</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="frequantantEtudiant.php"><i class="fa fa-circle-o"></i> Etudiant</a></li>
          <?php if($user['CodeService']==1 || $user['CodeService']==2)
          {
            ?>
             <li><a href="frequantantPromotion.php"><i class="fa fa-circle-o"></i> promotion</a></li>
            <?php
          } ?>
         
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-print"></i>
          <span>Rapports</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <?php if($user['CodeService']==1 || $user['CodeService']==2)
        {
          ?>
          <li><a href="RapportMateriel.php"><i class="fa fa-circle-o"></i> Materiel</a></li>
          <?php
        } ?>
          
          <li><a href="RapportFrequantation.php"><i class="fa fa-circle-o"></i> Frequantation</a></li>
        </ul>
      </li>
      <li class="header">GESTION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Accès Labo</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <?php if($user['CodeService']==1 || $user['CodeService']==2)
        {
          ?>
          <li><a href="accesMateriel.php"><i class="fa fa-circle-o"></i> Materiel de l'ISIG</a></li>
          <li><a href="accesLabo.php"><i class="fa fa-circle-o"></i> Equipement Externe</a></li>
          <li><a href="accesAuditoire.php"><i class="fa fa-circle-o"></i> Auditoire</a></li>
          <?php
        }elseif($user['CodeService']==3)
        {
          ?>
          <li><a href="accesCyber.php"><i class="fa fa-circle-o"></i> Acces cyber</a></li>
          <?php
        } ?>
          
        </ul>
      </li>
      
      <li class="header">AUTRES</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cogs"></i>
          <span>Paramètres</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <?php if($user['CodeService']==1 || $user['CodeService']==2){
          ?>
          <li><a href="categoriemateriel.php"><i class="fa fa-plus"></i> AJOUTER UN MATERIEL</a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i>
              <span>NOS MATERIELS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php
                  $conn = $pdo->open();

                  $categ = $conn->prepare("SELECT * FROM t_categorie_materiel WHERE CodeService=? AND Status=1 ORDER BY Designation");
                  $categ->execute(array($service));
                  
                  $pdo->close();
                  foreach($categ as $row)
                  {
                    ?>
                    <li class="treeview">
                    <a href="#">
                          <i class="fa fa-eye"></i>
                          <span> <?php echo $row['Designation']; ?></span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="marque.php?id=<?php echo $row['CodeCategorie']; ?>"><i class="fa fa-circle-o"></i> Marque</a></li>
                          <li><a href="modele.php?id=<?php echo $row['CodeCategorie']; ?>"><i class="fa fa-circle-o"></i> Modele</a></li>
                        </ul>



                      </li>
                    <?php
                   }
              ?>
            </ul>
          </li>
          <li><a href="cours.php"><i class="fa fa-plus"></i> COURS</a></li>
          <?php
        } ?>
          
          <li><a href="siege.php"><i class="fa fa-plus"></i> SIEGE</a></li>
        </ul>
      </li>
      <?php
      if($user['CodeService']==1)
      {
        ?>
        <li><a href="user.php"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="service.php"><i class="fa fa-user"></i> <span>Services</span></a></li>
        <?php
      }
      ?>
      
      <!-- <li><a href="chart.php"><i class="fa fa-comment"></i> <span>Chart</span></a></li> -->

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
