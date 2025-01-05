## Contrôles

### Liste des contrôles <a name="list"></a>

Cet écran permet d’afficher la liste des contrôles et de les filtrer par :

* Domaine,

* Périmètre,

* Attribut,

* la période de planification,

* état du contrôle : tous, fait et à faire,

[![Screenshot](images/c1.fr.png)](images/c1.fr.png)

Lorsque vous cliquez sur :

* Le domaine, vous arrivez à l'écran d'[affichage du domaine de sécurité](config.fr.md/#domains)

* La clause, vous arrivez à l'écran d'[affichage de la mesure de sécurité](measures.fr.md/#show).

* La date de réalisation, de planification ou la date du contrôle suivant, vous arrivez l'écran d'[affichage du contrôle de sécurité](#show).

### Afficher un contrôle <a name="show"></a>

Cet écran contient les informations d’un contrôle :

* Le nom du contrôle ;

* L’objectif du contrôle ;

* Les attributs ;

* Les données ;

* Le modèle ;

* La dates de planification, de réalisation et la date du contrôle suivant ;

* La note attribuée au contrôle ; et

* Le score attribué au contrôle (vert, orange ou rouge).

Les boutons « Faire » et « Planifier » sont présents si ce contrôle n’a pas encore été réalisé.

Les boutons « Modifier » et « Supprimer » sont présents si l'utilisateur est administrateur.

 [![Screenshot](images/c2.fr.png)](images/c2.fr.png)

Lorsque vous cliquez sur :

* « Faire », vous êtes envoyé vers l’[écran de réalisation d’un contrôle](#make)

* « Planifier », vous êtes envoyé vers l’[écran de planification d’un contrôle](#plan)

* « Modifier », vous êtes envoyé vers l’[écran de modification du contrôle](#edit)

* « Supprimer », le contrôle est supprimé et vous êtes envoyé vers la [liste des contrôles](#list)

* « Annuler », vous êtes envoyé vers la [liste des contrôles](#list)

### Planifier un contrôle<a name="plan"></a>

Cet écran permet de planifier un contrôle.

Cet écran contient les informations d’un contrôle :

* Le nom du contrôle ;

* L’objectif du contrôle ;

* La date de planification ;

* La périodicité ; et

* Les responsables de la réalisation du contrôle.

[![Screenshot](images/c5.fr.png)](images/c5.fr.png)

Lorsque vous cliquez sur :

* « Plan », la date de planification, la récurrence et les responsables sont mis à jour et vous êtes renvoyés vers l’[écran d'affichage du contrôle](#show)

* « Annuler », vous êtes renvoyés vers l’[écran d'affichage du contrôle](#show)


### Réaliser un contrôle <a name="make"></a>

Cet écran permet de réaliser un contrôle de sécurité.

Cet écran contient :

* Le ou les clauses,

* Le nom du contrôle,

* L’objectif,

* Les données,

* La date de réalisation, la date de planification,

* Les observations du contrôle,

* Une zone pour sauvegarder les preuves (**CTRL+V** permet de coller un fichier ou une capture d'écran),

* Un lien permettant de télécharger la fiche de contrôles,

* Le modèle de calcul appliqué,

* La note,

* Le score,

* Le plan d’action,

* La date du prochaine contrôle

[![Screenshot](images/c3.fr.png)](images/c3.fr.png)
[![Screenshot](images/c4.fr.png)](images/c4.fr.png)

Lorsque vous cliquez sur :

* « Faire », le contrôle est sauvé et un nouveau contrôle est créé à la date planifiée

* « Sauver », le contrôle est sauvé


et vous revenez vers la [liste des contrôles](#list).


### Fiche de contrôle <a name="sheet"></a>


La fiche de contrôle est un document Word généré par l'application sur base des données du contrôle.

Cette fiche permet de décrire les observations réalisées, d'ajouter des captures d'écran ou des tableaux et de __signer électroniquement__ les observations.

[![Screenshot](images/report3.png)](images/report3.png)

La fiche de contrôle peut être [adaptée](config.fr.md/#documents) afin de respecter le modèle de document de votre organisation.
