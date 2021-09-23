## PRG05 - Kimono Dating - Todo list

-   ERD Diagram maken

## Beveiliging

Inloggen:
Bepaalde functionaliteit is afgeschermd voor alleen ingelogde gebruikers, maakt niet uit welke gebruiker, als je maar bent ingelogd als rol ‘gebruiker’

Validatie:
Bij invoervelden wordt gebruik gemaakt van verplichte velden, en/of velden met controle op inhoud (denk aan een postcode of emailadres), gebruiker krijgt foutmeldingen te zien (deze zijn NIET te omzeilen door bijv. javascript uit te zetten…)

## Verschillende rollen (dus meerdere soorten gebruikers):

-- Admin rol
-- Gebruiker rol

## Verschillende rechten:

-- Admin gedeelte alleen toegankelijk voor ingelogde admin.
-- Gebruiker heeft eigen afgeschermde deel waarin hij zijn gegevens kan aanpassen. Een andere gebruiker kan hier niet bij (door er bijvoorbeeld naar te dieplinken).

## Zoeken & Filteren:

--

## Vrije tekst:

-- Zoekveld met vrije tekst, zoekt in meerdere kolommen (bijvoorbeeld in naam
en ‘bericht’), hoeft niet in het hele systeem te zoeken, mag ook voor een specifieke lijst met
data (bijv. nieuwsberichten).

Filtermogelijkheid:
-- dmv dropdownlist. Bijvoorbeeld alle nieuwsberichten van categorie 1 of 2 zien.
-- combinatie van zoeken en filteren, of filteren op meerdere categorieën levert een extra punt op.

Beveiliging:
-- OWASP top 10

Schakelen van status met button in lijst bijvoorbeeld aan/uit, actief/niet actief:
-- MOET via een post
-- MOET naar aparte action in een controller
-- Mag ook via Ajax

Diepere validatie:
-- Voer voor een actie naar keuze een extra validatie toe, waarbij de gebruiker deze actie pas mag uitvoeren nadat hij iets anders een x aantal keer heeft gedaan.
-- Als een gebruiker 5 andere profielen heeft geliked dan kan hij of zij een top 5 animelist op haar profiel wijzigen.
