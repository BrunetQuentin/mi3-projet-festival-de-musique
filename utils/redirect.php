<?php

    /**
     * Envois une en-tête de redirection vers une URL.
     * @param string $url URL cible.
     */
    function redirect(string $url): void {
        header('Location: '.$url);
        die();
    }

?>