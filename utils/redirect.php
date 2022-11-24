<?php

    /**
     * Envois une en-tête de redirection vers une URL.
     * @param string $url URL cible.
     * @return void
     */
    function redirect(string $url): void {
        header('Location: '.$url);
        die(); // D'après https://stackoverflow.com/questions/51846659/is-it-possible-to-redirect-using-php#comment90646980_51846757 cela permet de s'assurer qu'aucun autre code n'est en cours d'exécution pendant que la redirection est en cours.
    }

?>