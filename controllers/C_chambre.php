<?php
require '../models/M_Chambres.php';

class C_Chambres {
    private $model;

    public function __construct() {
        $this->model = new M_Chambres();
    }

    // Affiche la liste des chambres disponibles
    public function afficherChambres() {
        $chambres = $this->model->getChambresDisponibles();
        require '../views/page_chambres.php'; // Charger la vue
    }

    // Affiche le formulaire de réservation pour une chambre spécifique
    public function reserverChambre($idChambre) {
        $chambre = $this->model->getChambreById($idChambre);

        if (!$chambre) {
            die("Chambre non trouvée.");
        }

        // Démarrer la session et vérifier les données de l'utilisateur
        session_start();

        $nom = $_SESSION['nom'] ?? '';
        $prenom = $_SESSION['prenom'] ?? '';
        $email = $_SESSION['email'] ?? '';

        // Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
        if (!$nom || !$prenom || !$email) {
            header("Location: login.php"); // Redirection vers la page de connexion
            exit();
        }

        require '../views/reservation.php'; // Charger la vue de réservation
    }
}

// Vérifier l'action à effectuer
$action = $_GET['action'] ?? 'liste';
$idChambre = $_GET['id'] ?? null;

$controller = new C_Chambres();

if ($action === 'reserver' && $idChambre) {
    $controller->reserverChambre($idChambre);
} else {
    $controller->afficherChambres();
}
?>
