<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

<!--    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
</style>-->
<style>
        table {
            height:   100% ;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            color: black;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #11c833;
        }

        tr:nth-child(even) {
            background-color: #6dd780;
        }

        tr:hover {
            background-color: black;
            color: white;
        }
    </style>

  </head>
  <body>
    <div class=" container-scroller">

      
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="" href="index.html"><i class="fa fa-user-edit fa-2x me-2"></i></a>
          <a class="" href="index.html"><h3 style="color: #ffffff;">E-School</h3></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" id="searchInput" placeholder="Rechercher">
                <ul id="searchResults"></ul>
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Notifications </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>


      

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <!-- <li class="nav-item nav-category">Main</li> -->
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">Tableau de bord</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                  <span class="menu-title">Notes</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="evaluation.html">Consultation des évaluations</a></li>
                    <li class="nav-item"> <a class="nav-link" href="moyenne.html">Consultation des moyennes</a></li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li> -->
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="matiere.php">
                  <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                  <span class="menu-title">Matières</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classe.html">
                  <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                  <span class="menu-title">Classes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="professeur.html">
                  <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                  <span class="menu-title">Professeurs</span>
                </a>
              </li> 
              </li>
            </ul>
          </nav>
        <!--  <h2>Liste des Utilisateurs</h2>-->
    <table border="1">
        <tr>
            <th>#</th>
            <th>Matières</th>
        </tr>
          <?php
              // Connexion à la base de données
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "e-école";

              // Création de la connexion
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Vérifier la connexion
              if ($conn->connect_error) {
                  die("La connexion a échoué : " . $conn->connect_error);
              }

              // Insérer une nouvelle ligne dans la base de données (juste pour illustrer)
             /* $sql_insert = "INSERT INTO ma_table (colonne1, colonne2, colonne3)
                            VALUES ('valeur1', 'valeur2', 'valeur3')";
              if ($conn->query($sql_insert) === TRUE) {
                  echo "Nouvelle ligne insérée avec succès.<br>";
              } else {
                  echo "Erreur lors de l'insertion : " . $conn->error;
              }*/

              // Récupérer les données de la base de données
              $sql_select = "SELECT ID_matières,Nom_matières FROM matières";
              $result = $conn->query($sql_select);

              if ($result->num_rows > 0){
                  // Afficher les données sous forme de tableau
                 // echo "<table border='1'>";
                 $nbut=$result->num_rows;
                  //tableau de nom des colonnes issus de la requête
                  $titres=$result->fetch_fields();
                  //echo "<h3>Liste de toutes les matières </h3>";
                 // echo "<h4>Il y a $nbut matières dans l'école</h4> <button><a href=\"inscription.html\">Ajouter une matières</a></button>"; 
                 // echo "<tr><th>#</th><th>Nom des matières</th></tr>";
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["ID_matières"]. "</td><td>" . $row["Nom_matières"]. "</td></tr>";
                  }
                 // echo "</table>";
                 // echo "<h4>Il y a $nbut matières dans l'école</h4> <button><a href=\"inscription.html\">Ajouter une matières</a></button>"; 
              } else {
                  echo "Aucun résultat trouvé.";
              }

              // Fermer la connexion
              $conn->close(); 
          ?>
    </table>
   <!-- <h4>Total matières: $nbut</h4>-->
        
          <!-- partial -->
        </div>
      </div>

      <!--debut projet-->
    </div>
    <script>
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');

        searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        searchResults.innerHTML = '';
        if (query.length > 0) {
            // Requête AJAX ou autre méthode de recherche
            // Supposons ici que nous avons une liste de résultats prédéfinie
            const results = ['Résultat 1', 'Résultat 2', 'Résultat 3'];
            results.forEach(result => {
                if (result.toLowerCase().includes(query)) {
                    const li = document.createElement('li');
                    li.textContent = result;
                    searchResults.appendChild(li);
                }
            });
        }
    });
</script>
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>