JSON Tiedosto muutettiin csv tiedostoksi ja nimettiin ja asetettiin tyypi columneille oikein (tähän on netissä työkaluja).

Tämän jälkeen csv tuotiin phpmyadminiin jolloin kaikki data oli yhdessä taulussa nimeltään Laitekanta.

HUOM. tehtävällä ei ollut aikaa luoda kunnollista tietokantaa jossa esim. akuilla olisi ollut oma taulu yms.

Sen jälkeen käytettiin PHP:ta /API hakemistossa hakemaan tiedot kannasta ja muuttamaan ne JSON:ksi. 

Sen jälkeen Laitelista ja Laite sivuilla hakea JQuery:n ajax toiminnallisuudella data näkymään jossa JQueryn avulla voitiin asettaa se oikeisiin kenttiin.

Laite sivulle haettiin vain MAC osiitteet, Laitteen valmistaja, Laitteen malli, Sarjanumero, Käytössä oleva työpöytäkuva, Kernel-versio ja Kernel-parametrit, sillä testilaitteet_pieni.json tiedostossa ei ollut muille kentille arvoja.