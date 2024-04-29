<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />


  <!-- <style>
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
<!--<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #dd3a3a;
        }

        tr:hover {
            background-color: #24ce49;
        }
    </style>-->

</head>
<body>
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
                  echo "<div class='col-lg-12 stretch-card'>";
                  echo "<div class='card'>";
                  echo "<div class='card-body'>";
                  echo "<table class='table table-striped'>";
                  echo "<thead><tr><th>#</th><th>Matières</th></tr></thead>";
                  while($row = $result->fetch_assoc()) {
                      echo "<tr class='table-info'><td>" . $row["ID_matières"]. "</td><td class='table-warning'>" . $row["Nom_matières"]. "</td></tr>";
                  }
                  echo "</table>";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";

              } else {
                  echo "Aucun résultat trouvé.";
              }

              // Fermer la connexion
              $conn->close();
          ?>
</body>
</html>