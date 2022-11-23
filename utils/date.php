<?php

    /**
     * Convertis une date en format français.
     * @param string $date Date au format YYYY-MM-DD
     * @param string $pattern Format de la date à retourner
     * @return string date au format français
     */
    function dateToFrench(string $date, string $pattern): string {
        $dateObj = new DateTime($date);

        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        $formatter->setPattern($pattern);
        
        return $formatter->format($dateObj);
    }

?>