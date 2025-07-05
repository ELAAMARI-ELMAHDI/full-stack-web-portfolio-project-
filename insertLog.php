<?php 
include 'cnx.php';
session_start();



$name=$_POST['name'] ;
$email = $_POST['email'] ;
$MDP = $_POST['psw'];
$CMDP = $_POST['cpsw'];
$encrypt = crypt($MDP,'encrypt');

$_SESSION['name']=$name;







if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($MDP == $CMDP){

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {                               

        // Récupère le nom original du fichier envoyé par l'utilisateur
        $image_name = $_FILES['image']['name'];    
        
        // Récupère le chemin temporaire du fichier stocké sur le serveur
        $image_tmp_name = $_FILES['image']['tmp_name'];
        
        // Définit le chemin final où stocker le fichier dans le dossier "uploads/"
        // La fonction basename() est utilisée pour s'assurer que seul le nom du fichier est pris en compte (sécurité)
        $image_path = 'uploads/' . basename($image_name);
        $_SESSION['image']=$image_path;

        // Déplace le fichier depuis son emplacement temporaire vers le dossier "uploads/"
        if (move_uploaded_file($image_tmp_name, $image_path)) {

            // Prépare la requête SQL pour insérer les informations de l'image dans la base de données
            $stmt = $db->prepare("INSERT INTO login (Full_name,Email,image_name, image_path,Password) VALUES ('$name','$email',:image_name,:image_path,'$encrypt')");

            // Exécute la requête SQL en liant les valeurs de manière sécurisée pour éviter les injections SQL
            $stmt->execute([
                ':image_name' => $image_name,  // Nom du fichier
                ':image_path' => $image_path   // Chemin où est stocké le fichier
                // ':uploaded_at' => $uploaded_at
            ]);

            // Affiche un message en vert pour informer l'utilisateur que l'upload a réussi
            header("location:login.php");
        } else {
            // Affiche un message en rouge si le déplacement du fichier a échoué
            echo "<p style='color: red;margin-left:500px;'>Erreur lors du déplacement du fichier uploadé.</p>";
        }
    }
}else{
    echo '  <p style="color: red;margin-left:460px;font-size:20px;">Passwords are not the same,Go back and check.</p><br><br>  ';

    

    
}}


 
// Vérifie si le formulaire a été soumis avec la méthode POST
