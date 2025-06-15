# 🛠️ Symfony Project – Gestion de Produits, Utilisateurs et Notifications

## 📚 Description

Ce projet est une application Symfony permettant :

- La gestion de produits avec un système de points.
- L’achat de produits par les utilisateurs s’ils sont actifs et disposent de suffisamment de points.
- L’envoi automatique de notifications à l’admin lors de diverses actions (achat, création, suppression…).
- Un back-office sécurisé réservé aux administrateurs.
- Une API REST sécurisée avec authentification JWT.

---

## 📦 Fonctionnalités principales

### 🔐 Authentification & Sécurité
- Connexion / déconnexion
- Rôles (`ROLE_USER`, `ROLE_ADMIN`)
- Restrictions d’accès aux pages admin
- Blocage des comptes utilisateurs désactivés

### 🛍️ Utilisateurs
- Création, affichage, édition des utilisateurs
- Ajout de 1000 points à tous les utilisateurs actifs par bouton dédié
- Restrictions si l’utilisateur est inactif ou n’a pas assez de points

### 📦 Produits
- CRUD complet (admin uniquement)
- Achat de produits si l’utilisateur est actif et a assez de points
- Chaque produit appartient à un utilisateur
- Affichage dans une page dédiée

### 🔔 Notifications
- Créées automatiquement à chaque ajout, suppression, ou modification
- Contiennent le type d’action, le nom concerné et la date
- Visibles dans une page réservée à l’admin

### 🛒 Panier
- Possibilité d’ajouter un produit au panier
- Affichage des produits en panier avec total de points
- Vérification des conditions avant achat

### ⚙️ API Platform
- API exposée sur `/api`
- Accès sécurisé aux routes `GET`/`GET Collection` pour les produits
- Seuls les administrateurs peuvent consulter les produits créés
- Affichage limité à certains champs avec `normalizationContext`
- Groupes de serialization personnalisés (`produit:read`, `produit:write`)

---

## 🚀 Lancer le projet

```bash
# 1. Installer les dépendances
composer install

# 2. Lancer le serveur de développement
symfony server:start

# 3. Lancer le watcher Webpack pour le CSS/JS
yarn encore dev --watch

---

## 🔐 Authentification API via Authorize

# 1. 🛡️ Cliquer sur "Authorize"
- Aller sur `/api`
- Cliquer sur le bouton **"Authorize"**
- Entrer dans le champ le token précédé de `Bearer ` :

```
Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6...
```

- Cliquer sur **"Authorize"**, puis **"Close"**
- Tu peux maintenant utiliser toutes les routes protégées

### 2. Se déconnecter de Swagger UI

- Cliquer à nouveau sur le bouton **"Authorize"**
- Cliquer sur **"Logout"**
- Puis fermer la modale


