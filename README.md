<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Module d'authentification


### Fonctionnalités principales
- Gestion des rôles (admin, gestionnaire, client).
- Redirection basée sur les rôles.
- Vérification des emails pour les nouveaux utilisateurs.
- Gestion de la récupération de mot de passe.
- Middleware pour restreindre l'accès en fonction des rôles.

### Instructions pour tester
1. Clonez le dépôt : `git clone https://github.com/GoldenDev74/commerce.git`.
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

![image](https://github.com/user-attachments/assets/b5c875e2-01d9-4bd3-8c8b-c5191b0ede1e)
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


## ScreenShoot

![image](https://github.com/user-attachments/assets/3566f5ba-0583-4796-b1ca-768753091640)

![image](https://github.com/user-attachments/assets/82978f21-6be4-4d0a-a40d-0ac27cf33c28)

![image](https://github.com/user-attachments/assets/acc6a562-d0c8-445b-8e62-9f908508a011)

![image](https://github.com/user-attachments/assets/c6e8ae3e-7f79-4e21-a1f0-32d34c9d97b5)

![image](https://github.com/user-attachments/assets/68d2fba6-618b-4d25-bf59-4f5e262d5e1e)

![image](https://github.com/user-attachments/assets/0e3ada22-66cb-46f5-ac81-a8fc6693e9c3)

![image](https://github.com/user-attachments/assets/a1702d40-f7b6-43ef-9713-5d7ee676637d)

![image](https://github.com/user-attachments/assets/49501512-a7f6-4d96-8dfb-61fdf325228a)


