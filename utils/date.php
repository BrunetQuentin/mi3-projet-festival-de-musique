<?php

    /**
     * Convertis une date en format français.
     * @param string $date Date au format YYYY-MM-DD.
     * @param string $pattern Format de la date à retourner.
     * @return string|bool Date au format français ou false en cas d'erreur.
     */
    function dateToFrench(string $date, string $pattern): string|bool {
        $dateObj = new DateTime($date);
        if ($dateObj === false) {
            return false;
        }

        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        $formatter->setPattern($pattern);
        
        return $formatter->format($dateObj);
    }

?>