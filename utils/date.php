
<?php

    /**
     * @param string $date Date au format YYYY-MM-DD
     * @param string $format Format de la date à retourner
     * @return string date au format français
     */
    function dateToFrench($date, $pattern) {
        $dateObj = new DateTime($date);

        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        $formatter->setPattern($pattern);
        
        return $formatter->format($dateObj);
    }

?>