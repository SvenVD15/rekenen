## Procenten-rekentool

Dit is een stukje code in HTML/CSS (Bootstrap) en javascript. Met deze tool kun je alle procentsommen oplossen. Het maakt uitrdukkelijk gebruik van het principe dat elke procentsom te koppelen is aan een (vermenigvuldigings)factor.

### Functioneel ontwerp

De gebruiker moet op twee plekken input leveren; op het moment dat die input geleverd is, moet de groene 'Los op'-knop actief worden en na het klikken op de knop moet het antwoord op de derde plek uitgerekend worden.

### Technisch ontwerp

1. de interface wordt gebouwd m.b.v. bootstrap 5.3.3:
    * grid: 1 row, 3 cols
    * links en rechts een card met header en footer
    * midden select (soort), input (percentage) en input disabled (factor); daaronder een plaatje met pijl naar rechts en pijl naar links;
    daaronder input disabled (deelfactor); daaronder 'Los op'-knop
2. het javascript:
    * onder elke input zit een listener `onchange` om te checken of 2 van de 3 inputs er zijn
    * als 2 van de 3 inputs gevuld zijn, moet de 'Los op'-knop actief worden (`disabled` moet weg)
    * als de gebruiker op de 'Los op'-knop klikt, moet de overgebleven input gevuld worden met het juiste antwoord; we onderscheiden 3 gevallen:
        1. inp_oud en select_soort|inp_percentage zijn bekend:  
        eerst inp_factor uitrekenen en daarmee:  
        inp_nieuw = inp_oud * inp_factor
        2. inp_nieuw en select_soort|inp_percentage zijn bekend:  
        eerst inp_factor uitrekenen en daarmee:  
        inp_oud = inp_nieuw / inp_factor
        3. inp_oud en inp_nieuw zijn bekend:  
        eerst inp_factor uitrekenen en daarmee:  
        select_soort|inp_percentage
