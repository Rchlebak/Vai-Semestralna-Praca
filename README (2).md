# Webová aplikácia pre útulok

Richard Chlebak

Študijná skupina 5ZYI35

## Stručný opis projektu
Aplikácia slúži útulku  na evidenciu zvierat, spracovanie žiadostí o adopciu a rezervovanie návštev. Návštevníci si môžu pozrieť zvieratá, ktoré hľadajú nový domov, požiadať o adopciu alebo si rezervovať termín návštevy.

Zamestnanci útulku cez administráciu spravujú zvieratá, schvaľujú adopcie a prehľadne vidia všetky rezervácie. 

## Role v projekte
- **Návštevník** – bez prihlásenia si môže prezerať zvieratá a ich detaily.
- **Registrovaný používateľ** – môže podávať žiadosti o adopciu, rezervovať návštevy a sledovať ich stav.
- **Správca (zamestnanec útulku)** – spravuje zvieratá, vybavuje žiadosti o adopciu a rezervácie, spravuje používateľov.

## Prípady použitia podľa rolí
**Návštevník**
- prezrie si zoznam zvierat
- vyhľadá zviera podľa druhu, veku alebo pohlavia
- pozrie si detail zvieraťa
- zaregistruje sa a prihlási

**Registrovaný používateľ**
- podá žiadosť o adopciu zvieraťa
- rezervuje si návštevu útulku
- zruší rezerváciu
- pozrie si stav svojich žiadostí a rezervácií
- upraví svoj profil

**Správca**
- pridá, upraví alebo zmaže zviera
- schváli alebo zamietne žiadosť o adopciu
- potvrdí alebo zruší rezerváciu návštevy
- zmení stav zvieraťa (dostupné, rezervované, adoptované)
- pozrie si zoznam používateľov

## Plánované entity
- **Používateľ** 
- **Zviera** 
- **Adopcia** 
- **Rezervácia** 

## Vzťahy medzi entitami
- Používateľ – Adopcia: 1:N (jeden používateľ môže podať viac žiadostí)
- Zviera – Adopcia: 1:N (na jedno zviera môže prísť viac žiadostí, schválená môže byť len jedna)
- Používateľ – Rezervácia: 1:N
- Zviera – Rezervácia: 1:N 
- Používateľ – Zviera (obľúbené): N:M 

## Hlavné stránky aplikácie
1. **Úvodná stránka** – krátke predstavenie útulku a vybrané zvieratá
2. **Zoznam zvierat** – prehľad s filtrovaním a vyhľadávaním
3. **Detail zvieraťa** – informácie, fotka a tlačidlá na adopciu a rezerváciu
4. **Prihlásenie a registrácia** – vytvorenie konta a prihlásenie
5. **Moje konto** – moje žiadosti o adopciu a rezervácie
6. **Rezervácia návštevy** – výber termínu a odoslanie
7. **Administrácia zvierat** – pridávanie, úprava a mazanie zvierat a použivateľov


## Rozdelenie funkcionality
**Základné funkcie**
- registrácia a prihlásenie, rozdelenie rolí
- evidencia zvierat (pridanie, úprava, zmazanie, zobrazenie)
- žiadosť o adopciu a jej schválenie správcom
- rezervácia návštevy a jej potvrdenie správcom
- vyhľadávanie a filtrovanie zvierat

**Rozširujúce funkcie**
- nahrávanie viacerých fotiek k zvieraťu
- obľúbené zvieratá používateľa

