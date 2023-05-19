Le Quai Antique
" Ceci est une application destinée à une évaluation en cours de formation"
Installer l'application
1. Cloner le dépôt git avec la commande
git clone https://github.com/Guilitch7/QuaiAntique.git

2. Installer les dépendances PHP avec la commande
composer install
3. Configurer la base de données avec les commandes
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

Ne pas oubliez au préalable de configurer le fichier .env pour votre propre base de données

4. Lancer le serveur avec la commande
symfony server:start ou
symfony server:start -d  si vous souhaitez reprendre directement la main sur le terminal sans avoir à en changer.
5. Accédez à l'application en utilisant l'URL suivante
http://localhost:8000
6. création d’un administrateur
Pour accéder à l'interface administrateur en local, il faut créer le compte admin, donc installer DoctrineFixturesBundle :
•	composer require --dev orm-fixtures (Symfony 4 et supérieur)
•	php bin/console doctrine:fixtures:load (la base de donnée se purge après cette commande) Le compte administrateur est créé, ainsi que des utilisateurs exemples, il est aussi possible d'en créer avec le formulaire d'inscription.
Il est aussi possible de créer un utilisateur depuis l'interface de l'application (« s’inscrire ») et modifier l'attribut rôle depuis la base de données [] => ["ROLE_ADMIN"].
L’accès aux fonctionnalités d’administration apparait automatiquement en barre de navigation pour l’administrateur connecté
