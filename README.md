# Ro-Community

## Beschreibung

Die ist der aktuelle Entwicklungsstand der Ro-Community, aufgeteilt in folgende Branches: 
* master: Aktueller Release (stable)
* development: Entwicklungszweig (beta)
* nightly: Entwicklungszweig (nightly)

## Contributing

Contributing ist gerne gesehen, bitte hierbei folgende Regeln beachten:
* Hotfixes als Branch hotfix-XXX mit upstream master
* Weiterentwicklung von Features als Branch feature-XXX mit upstream nightly
* Überarbeitung der nightly als Branch nightly-XXX

Die nightly wird vom Entwicklungsserver immer um 00:00 gepullt und stellt somit die erste, 
instabile alpha dar (Versionsnummer 0.0.X). Beim Erreichen von Milestones wird dieser in den 
development-Branch gemerged und erreicht damit beta-Status (Versionsnummer 0.X.X). Ist dieser merge erfolgt,
erhöht sich auch die Versionsnummer der nightly (z.B. 0.1.X).