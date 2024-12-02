<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


### Fonctionnalités principales
- Gestion des rôles (admin, gestionnaire, client).
- Redirection basée sur les rôles.
- Vérification des emails pour les nouveaux utilisateurs.
- Gestion de la récupération de mot de passe.
- Middleware pour restreindre l'accès en fonction des rôles.

### Instructions pour tester
1. Clonez le dépôt : `git clone <URL_DU_DEPOT>`.
2. Installez les dépendances : `composer install`. & `npm install`

4. Configurez l'environnement : `.env`.
5. Ajoute la méthode suivante dans le fichier AppServiceProvider.php dans le répertoire app/Providers :
```
 public function boot()
    {
        // Définit la taille par défaut des colonnes string
        Schema::defaultStringLength(191);
    }
```
4. Exécutez les migrations : `php artisan migrate`.
5. Seed la base de données : `php artisan db:seed --class=UserSeeder`. pour créer l'admin et le gestionnaire
    * Admin :
         . email: admin@gmail.com
         . mot de passe: admin2024
    * Gestionnaire :
        . email: gestionnaire@gmail.com
        . mot de passe : gestion2024
  
7. Lancez le serveur : `php artisan serve`.

## Appendix

pour tester les mails on a utiliser mailtrap. Pour ce faire, ajouter un nouveau compte google à vos compte avec les identifiant suivantes:
 - email : redmoondevs2024@gmail.com
 - mot de passe : redmoon102024
arrivé sur mailtrap

![Capture d'écran 2024-12-01 224735](https://github.com/user-attachments/assets/888b8b36-8f70-4dc7-be78-129a66a40440)
![Capture d’écran 2024-12-01 224909](https://github.com/user-attachments/assets/f386814e-b440-4205-a07b-d3d0c299706c)
![Capture d’écran 2024-12-01 225006](https://github.com/user-attachments/assets/44f85e5b-06ac-4135-be21-d998979b958b)
![Capture d’écran 2024-12-01 225049](https://github.com/user-attachments/assets/3410354f-e98d-4754-9bdc-6efff902267b)
assurer de copier ses configuration suivantes :
![Capture d’écran 2024-12-01 225316](https://github.com/user-attachments/assets/9a7b20af-6930-48bd-8b61-7b9739743a81)
dans vôtres fichier .env comme suit : 
![Capture d’écran 2024-12-01 225339](https://github.com/user-attachments/assets/91d90333-d266-4c27-aea1-5995861fbaf3)

si tout est bien configurer vous deviez reçevoir les mails de vérification pour l'inscription, les mots de passes oublier.

## Contributing
Voici les collaborateurs intervenues !
- GoldenDev74
- Mabel4008
- Steventog
- Antoine 253

  


