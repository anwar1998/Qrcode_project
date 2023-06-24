<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://th.bing.com/th/id/R.6f9d43bfa9d53235a7b6bc310fb5448b?rik=xUE6OknSO1WYUg&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f2%2fQR-Code-PNG-Images.png&ehk=HPmT%2bF4%2ftU1Kn0R5oF8b%2ffA4ks46kTqApdr3kn7DzIg%3d&risl=&pid=ImgRaw&r=0" alt="Total Downloads"></a>

</p>
<h1>Projet Laravel - Qrcode</h1>

<p>Le projet Qrcode est développé en utilisant le framework Laravel de PHP. Son principe est de permettre aux utilisateurs de se connecter à une plateforme et de créer des QR codes à partir d'URL de sites web, de pages Facebook/Instagram ou même de numéros de téléphone depuis leur téléphone.</p>

<h2>Installation</h2>

<ol>
  <li>Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :</li>
</ol>

<pre><code>https://github.com/anwar1998/Qrcode_project.git</code></pre>

<ol start="2">
  <li>Accédez au répertoire du projet :</li>
</ol>

<pre><code>cd Qrcode_project.git</code></pre>

<ol start="3">
  <li>Installez les dépendances en utilisant Composer :</li>
</ol>

<pre><code>composer install</code></pre>

<ol start="4">
  <li>Copiez le fichier <code>.env.example</code> et renommez-le en <code>.env</code>. Configurez les paramètres de la base de données dans le fichier <code>.env</code>.</li>
</ol>

<ol start="5">
  <li>Générez une clé d'application Laravel :</li>
</ol>

<pre><code>php artisan key:generate</code></pre>

<ol start="6">
  <li>Exécutez les migrations pour créer les tables de base de données :</li>
</ol>

<pre><code>php artisan migrate</code></pre>

<ol start="7">
  <li>Lancez le serveur de développement :</li>
</ol>

<pre><code>php artisan serve</code></pre>

<ol start="8">
  <li>Accédez à l'application dans votre navigateur à l'adresse <code>http://localhost:8000</code>.</li>
</ol>



<h2>Structure du projet</h2>

<ul>
  <li>Le dossier <code>app</code> contient les modèles, les contrôleurs et les services de l'application.</li>
  <li>Le dossier <code>database</code> contient les migrations et les seeders pour la base de données.</li>
  <li>Le dossier <code>resources</code> contient les vues, les styles et les scripts de l'application.</li>
  <li>Le dossier <code>routes(web)</code> contient les définitions des routes de l'application.</li>
</ul>

<h2>Contribuer</h2>

<p>Les contributions à ce projet sont les bienvenues. Si vous souhaitez proposer des améliorations, des corrections de bugs ou de nouvelles fonctionnalités, n'hésitez pas à soumettre une demande de fusion (pull request).</p>

<h2>Auteurs</h2>

<ul>
  <li>Gmili anouar</li>
</ul>
