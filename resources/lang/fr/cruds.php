<?php
return [
    'welcome' => [
        'dashboard' => 'Tableau de bord',
        'domains' => 'Domaines',
        'measures' => 'Mesures de sécurité',
        'controls' => 'Contrôles',
        'action_plans' => 'Plans d\'action',
        'next_controls' => 'Contrôles planifiés les 30 prochains jours',
        'control_status' => 'Etat des contrôles',
        'control_planning' => 'Planning des contrôles',
    ],
    'action' => [
        'index' => 'Liste des plans d\'action',
        'show' => 'Plan d\'action',
        'create' => 'Créer un plan d\'action',
        'edit' => 'Modifier un plan d\'action',
        'title' => 'Actions',
        'fields' => [
            'clause' => 'Clause',
            'name' => 'Nom',
            'scope' => 'Périmètre',
            'action' => 'Plan d\'action',
            'plan_date' => 'Date de planification',
            'next_date' => 'Date de revue',
            'note' => 'Score',
            'objective' => 'Objectif',
            'observation' => 'Observation',
            'action_plan' => 'Plan d\'actions',
            'reference' => 'Ref',
            'type' => 'Type',
            'due_date' => 'Date due',
            'choose_type' => 'Choisir un type',
            'choose_scope' => 'Choisir un périmètre',
            'remediation' => 'Remédiation',
            'justification' => 'Justification',
            'criticity' => 'Criticité',
            'cause' => 'Cause',
            'clauses' => 'Clauses',
            'owners' => 'Responsables',
            'status_open' => 'Ouvert',
            'status_closed' => 'Fermé',
            'status_rejected' => 'Rejeté',
            'status_all' => 'Tous',
            'close_date' => 'Date de clôture',
        ],
    ],
    'attribute' => [
       'fields' => [
            'name' => 'Nom',
            'values' => 'Valeurs',
        ],
        'add' => 'Ajouter un attribut',
        'edit' => 'Modifier un attribut',
        'show' => 'Attribut',
        'index' => 'Liste des attributs',
        'choose' => 'Choisir un attribut',
        'title' => 'Attribut'
     ],
    'control' => [
        'description' => '',
        'fields' => [
            'action_plan' => 'Plan d\'actions',
            'attributes' => 'Attributs',
            'input' => 'Données',
            'choose_domain' => 'Choisir un domaine',
            'choose_scope' => 'Choisir un périmètre',
            'choose_period' => 'Choisir une periode',
            'choose_attribute' => 'Choisir un attribut',
            'clause' => 'Clause',
            'clauses' => 'Clauses',
            'domain' => 'Domaine',
            'indicator' => 'Fonction',
            'measure' => 'Mesure',
            'model' => 'Modèle',
            'name' => 'Nom',
            'next' => 'Suivant',
            'note' => 'Note',
            'objective' => 'Objectif',
            'observations' => 'Observations',
            'plan_date' => 'Date de planification',
            'period' => 'Période',
            'periodicity' => 'Périodicité',
            'planned' => 'Planifié',
            'realisation_date' => 'Date de réalisation',
            'realized' => 'Réalisé',
            'evidence' => 'Preuves',
            'scope' => 'Périmètre',
            'score' => 'Score',
            'status' => 'Etat',
            'status_done' => 'Fait',
            'status_todo' => 'A faire',
            'status_all' => 'Tous',
            'owners' => 'Responsables',
        ],
        'error' => [
            'made' => 'Ce contrôle a déjà été réalisé.',
            'duplicate' => 'Ce contrôle existe déjà.',
        ],
        'checklist' => 'Fiche de contrôle',
        'create' => 'Créer un contrôle',
        'list' => 'Liste des contrôles',
        'edit' => 'Modifier un contrôle de sécurité',
        'history' => 'Planning',
        'make' => 'Réaliser un contrôle',
        'plan' => 'Planifier un contrôle',
        'radar' => 'Etat des contrôles de sécurité',
        'title' => 'Contrôles',
        'title_singular' => 'Contrôle',
        'groupBy' => 'Groupé par',
        'create_action' => 'Créer un plan d\'action',
    ],
    'measure' => [
        'title' => 'Mesure',
        'fields' => [
            'domain' => 'Domaine',
            'clause' => 'Clause',
            'name' => 'Nom',
            'objective' => 'Objectif',
            'input' => 'Données',
            'attributes' => 'Attributs',
            'model' => 'Modèle',
            'indicator' => 'Indicateur',
            'action_plan' => 'Plan d\'action',
            'periodicity' => 'Périodicité',
        ],
        'show' => 'Mesure de sécurité',
        'index' => 'Liste des mesures de sécurité',
        'create' => 'Ajouter une mesure de sécurité',
        'edit' => 'Modifier une mesure de sécurité',
        'plan' => 'Planifier un contrôle'
    ],
    'notification' => [
        'subject' => 'Liste des contrôles à réaliser',
    ],
    'domain' => [
        'fields' => [
            'framework' => 'Référentiel',
            'name' => 'Nom',
            'description' => 'Description',
            'measures' => '# Mesures',
        ],
        'add' => 'Ajouter un domaine',
        'edit' => 'Modifier un domaine',
        'show' => 'Domaine',
        'index' => 'Liste des domaines',
        'choose' => 'Choisir un domaine',
        'title' => 'Domaine'
    ],
    'document' => [
        'title' => [
            'storage' => 'Entrepôt de documents',
            'templates' => 'Modèles de documents',
        ],
        'description' => 'Description',
        'list' => 'Liste des documents',
        'index' => 'Documents',
        'fields' => [
            'name' => 'Nom',
            'control' => 'Contrôle',
            'size' => 'Taille',
            'hash' => 'Hash',
        ],
        'model' => [
            'control' => 'Modèle de fiche de contrôle',
            'report' => 'Modèle du rapport de pilotage',
            'custom' => 'Modèle sur mesure',
        ],
        'count' => 'Nombre de documents',
        'total_size' => 'Taille totale',
    ],
    'exports' => [
        'index' => 'Exporter des données',
        'start' => 'Début',
        'end' => 'Fin',
        'report_title' => 'Rapport',
        'steering' => 'Rapport de pilotage du SMSI',
        'data_export_title' => 'Exportation des données',
        'domains_export'=> 'Exportation des domaines',
        'measures_export' => 'Exportation des contrôles',
        'controls_export' => 'Exportation des mesures de sécurité',
        'actions_export' => 'Exporter les plans d\'action',
    ],
    'imports' => [
         'index' => 'Importer',
         'title' => 'Importer des mesures de sécurité',
    ],
    'log' => [
        'index' => 'Liste des logs',
        'title' => 'Log',
        'history' => 'Historique des changements',
        'action' => 'Action',
        'subject_type' => 'Type',
        'subject_id' => 'ID',
        'user' => 'Utilisateur',
        'host' => 'Host',
        'timestamp' => 'Horodatage',
        'properties' => 'Données'
    ],
    'login' => [
        'title' => 'Entrez un mot de passe',
        'identification' => 'Identification',
        'connection' => 'Connexion',
        'connection_with' => 'Connexion avec',
        'error' => [
            'user_not_exist' => 'L\'utilisateur n\'existe pas',
        ],
    ],
    'report' => [
        'action_plan' => [
            'id' => '#',
            'title' => 'Plan d\'action',
            'next' => 'Date de revue'
        ]
    ],
    'soa' => [
        'title' => 'Déclaration d\'applicabilité',
        'generate' => 'Générer le rapport'
    ],
    'user' => [
        'show' => 'Afficher un utilisateur',
        'index' => 'Liste des utilisateurs',
        'edit' => 'Modifier un utilisateur',
        'add' => 'Ajouter un utilisateur',
        'fields' => [
            'login' => 'UserId',
            'name' => 'Nom',
            'title' => 'Titre',
            'role' => 'Role',
            'password' => 'Password',
            'email' => 'eMail',
            'language' => 'Langue',
            'controls' => 'Contrôles de l\'utilisateur'
        ],
        'roles' => [
            'admin' => 'Administrateur',
            'user' => 'Utilisateur',
            'auditor' => 'Auditeur',
            'api' => 'API',
            'auditee' => 'Audité',
        ],
    ],
    'config' => [
        'notifications' => [
            'title' => 'Configuration de l\'envoi de notifications',
            'title_short' => 'Notifications',
            'help' => 'Cet écran permet de configurer les notifications envoyées par mail aux utilisateurs.',
            'message_subject' => 'Sujet du message',
            'message_content' => 'Contenu du message',
            'message_default_content' => '<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<p>Voici la liste des contr&ocirc;les d&ucirc; prochainement :</p>
%table%
<p>Ceci est un mail g&eacute;n&eacute;r&eacute; automatiquement.</p>
<p>Cordialement,<br>Deming</p>
</body>
</html>',
            'sent_from' => 'Envoyé depuis',
            'to' => 'à',
            'delay' => 'Pour les contrôles qui arrivent à échéance dans',
            'recurrence' => 'Envoyer une notification',
            'duration' => [
                'day' => 'jour',
                'days' => 'jours',
                'month' => 'mois',
                'months' => 'mois',
            ],
         ]
    ]
];
