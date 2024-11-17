# SecureIDSDK

`SecureIDSDK` est un **kit de développement logiciel (SDK)** conçu pour simplifier l'intégration d'une API dédiée à la gestion des identifiants dans un projet Laravel. Ce SDK offre une interface intuitive pour effectuer des opérations CRUD sur une API SecureID. L'API SecureID est construite avec Node.js et le framework ExpressJS, et repose sur une base de données NoSQL MongoDB via le package Mongoose.

# Installation

Pour installer le package via Composer, exécutez la commande suivante :
```bash
composer require secureid/secureidsdk
```

# Utilisation
**1. Importer le SDK**

Ajoutez le namespace du SDK dans votre contrôleur ou votre script PHP :
```bash
use Secureid\Secureidsdk\SecureID;
```

**2. Créer une instance du SDK**
   
Initialisez une instance de SecureID :
```bash
$secureidsdk = new SecureID();
```
**3. Utiliser les fonctionnalités du SDK**

Voici les principales fonctionnalités offertes par le SDK :

**- Récupérer tous les enregistrements**
```bash
$response = $secureidsdk->getAll();
```

**- Récupérer un enregistrement par son ID**
```bash
$id = 'exemple-id';
$response = $secureidsdk->getById($id);
```

**- Créer un nouvel enregistrement**
```bash  
$data = [
    'title' => 'My Title',
    'username' => 'my_username',
    'password' => 'my_password',
];
$response = $secureidsdk->create($data);
```
**- Mettre à jour un enregistrement par son ID**
```bash 
$id = 'exemple-id';
$data = [
    'title' => 'Updated Title',
    'username' => 'updated_username',
    'password' => 'updated_password',
];
$response = $secureidsdk->update($id, $data);
```

**- Supprimer un enregistrement par son ID**
```bash 
$id = 'exemple-id';
$response = $secureidsdk->delete($id);
```

# Exemple

```bash
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Secureid\Secureidsdk\SecureID;

class SecureIDSDKController extends Controller
{

    /**
    * Récupère tous les enregistrements de l'API.
    */ 
    public function readAll(SecureID $secureidsdk){
        $response = $secureidsdk->getAll();

        return $response;
    }

    
    /**
    * Récupère un enregistrement par son ID.
    */
    public function readOne(SecureID $secureidsdk, string $id){
        $response = $secureidsdk->getById($id);
        
        return $response;
    }

    /**
    * Crée un nouvel enregistrement dans l'API.
    */
    public function create(SecureID $secureidsdk){
       
        $data = [
            'title' => 'Updated Title',
            'username' => 'updated_username',
            'password' => 'updated_password',
        ];
        
        $response = $secureidsdk->create($data);
        
        return $response;
    }

    /**
    * Met à jour un enregistrement par son ID.
    */
    public function update(SecureID $secureidsdk, string $id){
       
        $data = [
            'title' => 'Updated Title',
            'username' => 'updated_username',
            'password' => 'updated_password',
            'website' => 'updated_website',
        ];
        
        $response = $secureidsdk->update($id, $data);
        
        return $response;
    }

    /**
    * Supprime un enregistrement par son ID.
    */
    public function delete(SecureID $secureidsdk, string $id){
       
        $response = $secureidsdk->delete($id);
        
        return $response;
    }
}

```
