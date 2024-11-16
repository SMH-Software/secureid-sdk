# SecureIDSDK

Description
SecureIDSDK est un kit de développement logiciel (SDK) conçu pour simplifier l'intégration d'une API dédiée à la gestion des identifiants dans un projet Laravel. Ce SDK offre une interface intuitive pour effectuer des opérations CRUD sur une API SecureID. L'API SecureID est construite avec Node.js et le framework ExpressJS, et repose sur une base de données NoSQL MongoDB via le package Mongoose.

# Installation

Pour installer le package via Composer, exécutez la commande suivante :
```bash
composer require secureid/secureidsdk
```

# Utilisation
1. Importer le SDK
   
Ajoutez le namespace du SDK dans votre contrôleur ou votre script PHP :
use Secureid\Secureidsdk\SecureID;

2. Créer une instance du SDK
   
Initialisez une instance de SecureID :
$secureidsdk = new SecureID();

3. Utiliser les fonctionnalités du SDK
Voici les principales fonctionnalités offertes par le SDK :

- Récupérer tous les enregistrements
$response = $secureidsdk->getAll();

- Récupérer un enregistrement par son ID
$id = 'exemple-id';
$response = $secureidsdk->getById($id);

- Créer un nouvel enregistrement
  
$data = [
    'title' => 'My Title',
    'username' => 'my_username',
    'password' => 'my_password',
];
$response = $secureidsdk->create($data);

- Mettre à jour un enregistrement par son ID

$id = 'exemple-id';
$data = [
    'title' => 'Updated Title',
    'username' => 'updated_username',
    'password' => 'updated_password',
];
$response = $secureidsdk->update($id, $data);

- Supprimer un enregistrement par son ID

$id = 'exemple-id';
$response = $secureidsdk->delete($id);
