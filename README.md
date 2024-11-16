#SecureIDSDK

#Description

Ce kit de développement logiciel (Software Development Kit ou SDK) est un SDK dédié à l'API, conçu pour faciliter la communication et l'intégration d'une API de gestion des sauvegardes d'identifiants dans un projet Laravel, nommé SecureID. Cette API repose sur la technologie Node.js, en particulier le framework ExpressJS, et utilise une base de données NoSQL, MongoDB, avec le package Mongoose.

#Installation

Exécutez la commande suite : composer require secureid/secureidsdk

#Utilisation

1 - Charger le package à l'aide de la syntaxe suivante dans le controller: 
use Secureid\Secureidsdk\SecureID

2 - Créer une instance à l'aide de la syntaxe suivante : 
$secureidsdk = new SecureID()

3 - Utiliser cette instance pour appeler les différente fonction disponible comme suit :

-   Récupère tous les enregistrements de l'API
    $secureidsdk->getAll() 
    
-   Récupère un enregistrement par son ID
    /**
    * @param string $id
    */
    $secureidsdk->getById($id)

-   Crée un nouvel enregistrement dans l'API
    /**
    * @param array $data
    */

    $data = [
        'title' => '',
        'username' => '',
        'password' => '',
        'title' => ''
    ];

    $secureidsdk->update($data);
    
-   Met à jour un enregistrement par son ID

    /**
    * @param string $id
    * @param array $data
    */

    $data = [
        'title' => '',
        'username' => '',
        'password' => '',
        'title' => ''
    ];

    $secureidsdk->update($id, $data);
   
-   Supprime un enregistrement par son ID.
    /**
    * @param string $id
    */
    $secureidsdk->getAll($id) 



