<!-- =================================================================== -->
<!-- PARTIE 3 : CONCEPTS AVANCÉS ET MAGIE PYTHON -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 3 : Concepts Avancés et Magie Python</h2>

<!-- ========== CHAPITRE 8 : LES MÉTHODES SPÉCIALES (DUNDER) ========== -->
<section id="methodes-speciales" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 8 : Les Méthodes Spéciales (Dunder)</h3>
    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
        Vous avez déjà rencontré une méthode spéciale : `__init__`. Python est rempli de ces méthodes, appelées "dunder methods" (pour Double UNDERscore). Elles permettent à nos objets de s'intégrer de manière transparente avec les fonctionnalités natives du langage, comme l'affichage avec `print()`, la comparaison avec `==`, ou l'addition avec `+`. Elles rendent notre code plus "pythonique".
    </p>
    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">8.1. `__str__` et `__repr__` : Représentations de l'objet</h4>
            <p class="text-gray-700 mb-4">Ces deux méthodes permettent de définir comment un objet doit être représenté sous forme de chaîne de caractères :</p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-4">
                <li><code>__str__</code> : Fournit une représentation <strong>lisible pour l'utilisateur final</strong>. C'est elle qui est appelée par `print()` et `str()`.</li>
                <li><code>__repr__</code> : Fournit une représentation <strong>non ambiguë pour le développeur</strong>. L'idée est que cette chaîne puisse, si possible, recréer l'objet.</li>
            </ul>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Livre</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">titre</span>, <span class="py-variable">auteur</span>):
        <span class="py-builtin">self</span>.titre = <span class="py-variable">titre</span>
        <span class="py-builtin">self</span>.auteur = <span class="py-variable">auteur</span>
    
    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">f"'{<span class="py-builtin">self</span>.titre}' par {<span class="py-builtin">self</span>.auteur}"</span>

    <span class="py-keyword">def</span> <span class="py-function">__repr__</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">f"Livre(titre='{<span class="py-builtin">self</span>.titre}', auteur='{<span class="py-builtin">self</span>.auteur}')"</span>

<span class="py-variable">mon_livre</span> = <span class="py-function">Livre</span>(<span class="py-string">"1984"</span>, <span class="py-string">"George Orwell"</span>)

<span class="py-comment"># __str__ est utilisée par print()</span>
<span class="py-builtin">print</span>(<span class="py-variable">mon_livre</span>)

<span class="py-comment"># __repr__ est utilisée quand on affiche l'objet directement</span>
<span class="py-variable">mon_livre</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== CHAPITRE 9 : ATTRIBUTS ET MÉTHODES DE CLASSE/STATIQUES ========== -->
<section id="methodes-classe-statique" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 9 : Attributs et Méthodes de Classe/Statiques</h3>
    <p class="text-gray-700 mb-6">Jusqu'ici, nous n'avons manipulé que des attributs et méthodes d'instance, qui sont propres à chaque objet. Mais il existe aussi des attributs et méthodes qui sont liés à la classe elle-même.</p>
    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">9.1. Attributs de classe</h4>
            <p class="text-gray-700 mb-4">Un attribut de classe est une variable partagée par <strong>toutes</strong> les instances de cette classe. Il est défini directement dans la classe, en dehors de toute méthode. C'est idéal pour des constantes ou des compteurs.</p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Voiture</span>:
    <span class="py-comment"># Attribut de classe : partagé par tous les objets Voiture</span>
    <span class="py-variable">nombre_de_roues</span> = <span class="py-number">4</span>

    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">marque</span>):
        <span class="py-builtin">self</span>.marque = <span class="py-variable">marque</span> <span class="py-comment"># Attribut d'instance</span>

<span class="py-variable">v1</span> = <span class="py-function">Voiture</span>(<span class="py-string">"Renault"</span>)
<span class="py-variable">v2</span> = <span class="py-function">Voiture</span>(<span class="py-string">"Peugeot"</span>)

<span class="py-comment"># On peut y accéder via la classe ou une instance</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Une voiture a {<span class="py-function">Voiture</span>.<span class="py-variable">nombre_de_roues</span>} roues."</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"La voiture v1 a {<span class="py-variable">v1</span>.<span class="py-variable">nombre_de_roues</span>} roues."</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">9.2. Méthodes de classe (`@classmethod`) et statiques (`@staticmethod`)</h4>
            <p class="text-gray-700 mb-4">
                - Une <strong>méthode de classe</strong> est décorée avec `@classmethod`. Son premier paramètre n'est pas `self` mais `cls` (qui représente la classe elle-même). Elle est souvent utilisée pour créer des "usines à objets" (factory methods).<br>
                - Une <strong>méthode statique</strong> est décorée avec `@staticmethod`. Elle ne prend ni `self` ni `cls` en premier paramètre. C'est une simple fonction utilitaire qui a un lien logique avec la classe, mais qui ne dépend ni de la classe, ni d'une instance.
            </p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Calculateur</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">valeur</span>):
        <span class="py-builtin">self</span>.valeur = <span class="py-variable">valeur</span>

    <span class="py-comment"># Méthode d'instance : dépend de l'objet 'self'</span>
    <span class="py-keyword">def</span> <span class="py-function">ajouter</span>(<span class="py-builtin">self</span>, <span class="py-variable">x</span>):
        <span class="py-keyword">return</span> <span class="py-builtin">self</span>.valeur + <span class="py-variable">x</span>
    
    <span class="py-decorator">@classmethod</span>
    <span class="py-keyword">def</span> <span class="py-function">creer_depuis_chaine</span>(<span class="py-variable">cls</span>, <span class="py-variable">chaine_de_valeur</span>):
        <span class="py-comment"># Cette méthode "usine" crée un objet de la classe 'cls'</span>
        <span class="py-variable">valeur</span> = <span class="py-builtin">int</span>(<span class="py-variable">chaine_de_valeur</span>)
        <span class="py-keyword">return</span> <span class="py-variable">cls</span>(<span class="py-variable">valeur</span>)
        
    <span class="py-decorator">@staticmethod</span>
    <span class="py-keyword">def</span> <span class="py-function">info</span>():
        <span class="py-comment"># Fonction utilitaire qui n'a pas besoin de 'self' ou 'cls'</span>
        <span class="py-builtin">print</span>(<span class="py-string">"Ceci est une classe de calcul simple."</span>)

<span class="py-comment"># Utilisation de la méthode de classe comme factory</span>
<span class="py-variable">calc</span> = <span class="py-function">Calculateur</span>.<span class="py-function">creer_depuis_chaine</span>(<span class="py-string">"10"</span>)
<span class="py-builtin">print</span>(<span class="py-variable">calc</span>.<span class="py-function">ajouter</span>(<span class="py-number">5</span>)) <span class="py-comment"># Affiche 15</span>

<span class="py-comment"># Utilisation de la méthode statique</span>
<span class="py-function">Calculateur</span>.<span class="py-function">info</span>()</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== ATELIERS PRATIQUES DE LA PARTIE 3 ========== -->
<section id="exercices-partie3" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Ateliers Pratiques : Concepts Avancés</h3>
    
    <div class="space-y-10">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Exercice : Améliorer la classe `CompteBancaire`</h4>
            <p class="text-gray-700 mb-4">
                Reprenons la classe `CompteBancaire` :<br>
                1. Ajoutez une méthode `__str__` qui retourne une chaîne comme `"Compte de [Titulaire] - Solde : [Solde] DH"`.<br>
                2. Ajoutez un attribut de classe `nombre_comptes` qui s'incrémente à chaque fois qu'un nouveau compte est créé.<br>
                3. Ajoutez une méthode de classe `afficher_nombre_comptes()` qui affiche le nombre total de comptes créés.
            </p>
            <button class="solution-toggle">Voir la solution</button>
            <div class="solution-content">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">CompteBancaire</span>:
    <span class="py-variable">nombre_comptes</span> = <span class="py-number">0</span>

    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">titulaire</span>, <span class="py-variable">solde_initial</span>):
        <span class="py-builtin">self</span>.titulaire = <span class="py-variable">titulaire</span>
        <span class="py-builtin">self</span>.__solde = <span class="py-variable">solde_initial</span>
        <span class="py-function">CompteBancaire</span>.<span class="py-variable">nombre_comptes</span> += <span class="py-number">1</span>

    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">f"Compte de {<span class="py-builtin">self</span>.titulaire} - Solde : {<span class="py-builtin">self</span>.__solde} DH"</span>
    
    <span class="py-decorator">@classmethod</span>
    <span class="py-keyword">def</span> <span class="py-function">afficher_nombre_comptes</span>(<span class="py-variable">cls</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"Nombre total de comptes créés : {<span class="py-variable">cls</span>.<span class="py-variable">nombre_comptes</span>}"</span>)

<span class="py-builtin">print</span>(<span class="py-string">"Création des comptes..."</span>)
<span class="py-variable">c1</span> = <span class="py-function">CompteBancaire</span>(<span class="py-string">"Ali"</span>, <span class="py-number">2000</span>)
<span class="py-variable">c2</span> = <span class="py-function">CompteBancaire</span>(<span class="py-string">"Samira"</span>, <span class="py-number">5000</span>)

<span class="py-builtin">print</span>(<span class="py-variable">c1</span>)
<span class="py-builtin">print</span>(<span class="py-variable">c2</span>)

<span class="py-function">CompteBancaire</span>.<span class="py-function">afficher_nombre_comptes</span>() <span class="py-comment"># Affiche: Nombre total de comptes créés : 2</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>
</section>