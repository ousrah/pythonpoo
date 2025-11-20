<!-- =================================================================== -->
<!-- PARTIE 1 : LES FONDAMENTAUX DE LA POO -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 1 : Les Fondamentaux de la POO</h2>

<!-- ========== CHAPITRE 1 : POURQUOI LA POO ? ========== -->
<section id="accueil" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : Pourquoi la POO ? De la procédure à l'objet</h3>
    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
        Jusqu'à présent, vous avez programmé de manière <strong>procédurale</strong> : une suite d'instructions et de fonctions qui manipulent des données. Cette approche fonctionne bien pour des scripts simples, mais devient difficile à maintenir lorsque les programmes grandissent. La Programmation Orientée Objet (POO) propose une nouvelle façon de penser : au lieu de séparer les données des fonctions qui les traitent, on les regroupe dans des entités logiques appelées <strong>objets</strong>.
    </p>

     <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/concepts_POO.png" class="m-auto" />
        </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
            <h3 class="text-2xl font-bold mb-2">Organisation du Code</h3>
            <p class="text-gray-700">La POO permet de structurer le code en "boîtes" logiques et autonomes. Un objet "Voiture" contient ses propres données (couleur, marque) et ses propres actions (démarrer, accélérer). C'est plus clair et plus facile à gérer.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
            <h3 class="text-2xl font-bold mb-2">Réutilisabilité</h3>
            <p class="text-gray-700">Une fois qu'un "moule" à objet (une classe) est créé, on peut l'utiliser pour fabriquer autant d'objets que l'on veut. On peut aussi créer de nouveaux moules basés sur les anciens, en héritant de leurs fonctionnalités sans avoir à tout réécrire.</p>
        </div>


    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>



<!-- ========== CHAPITRE 2 : LES CLASSES ET LES OBJETS ========== -->
<section id="classes-objets" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : Les Classes et les Objets</h3>
    <p class="text-gray-700 mb-4">Les deux concepts centraux de la POO sont la classe et l'objet.</p>
    <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-8">
        <li><strong>La Classe :</strong> C'est le <strong>plan de construction</strong>, le moule. Elle définit la structure commune à tous les objets d'un certain type : les données qu'ils contiendront (les attributs) et les actions qu'ils pourront effectuer (les méthodes).</li>
        <li><strong>L'Objet :</strong> C'est une <strong>instance</strong> de la classe. C'est le produit fini, créé à partir du plan. Si `Voiture` est la classe, alors ma voiture bleue et votre voiture rouge sont deux objets distincts de la même classe.</li>
    </ul>
   <h4 class="text-2xl font-semibold mb-3">Illustration 1</h4>
 
    <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/class_objects.png" class="m-auto" />
        </div>

   <h4 class="text-2xl font-semibold mb-3">Illustration 2</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/class_object.png" class="m-auto" />
        </div>


    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2.1. Déclarer une classe et créer un objet</h4>
        <p class="text-gray-700 mb-4">En Python, on utilise le mot-clé `class` pour définir une classe. Par convention, les noms de classes commencent par une majuscule. Pour créer un objet (instancier la classe), on appelle la classe comme une fonction.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Définition de la classe (le plan)</span>
<span class="py-keyword">class</span> <span class="py-function">Chien</span>:
    <span class="py-keyword">pass</span>  <span class="py-comment"># 'pass' signifie que la classe est vide pour l'instant</span>

<span class="py-comment"># 2. Création des objets (les instances)</span>
<span class="py-variable">mon_chien</span> = <span class="py-function">Chien</span>()
<span class="py-variable">autre_chien</span> = <span class="py-function">Chien</span>()

<span class="py-comment"># On peut vérifier le type de nos objets</span>
<span class="py-builtin">print</span>(<span class="py-builtin">type</span>(<span class="py-variable">mon_chien</span>))
<span class="py-builtin">print</span>(<span class="py-builtin">type</span>(<span class="py-variable">autre_chien</span>))</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== CHAPITRE 3 : LE CONSTRUCTEUR ET LES ATTRIBUTS D'INSTANCE ========== -->
<section id="constructeur-attributs" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 3 : Le Constructeur et les Attributs d'instance</h3>
    <p class="text-gray-700 mb-6">Nos objets sont pour l'instant des coquilles vides. Pour qu'ils aient leurs propres données (un nom, une couleur, un âge...), nous devons définir des <strong>attributs d'instance</strong>. Cela se fait généralement dans une méthode spéciale appelée le <strong>constructeur</strong>.</p>
    
       <h4 class="text-2xl font-semibold mb-3">Illustration 3</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/attributs_methodes.png" class="m-auto" />
        </div>
    
    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">3.1. La méthode `__init__` et le paramètre `self`</h4>
            <p class="text-gray-700 mb-4">Le constructeur en Python est une méthode qui s'appelle `__init__` (avec deux tirets bas avant et après). Elle est exécutée automatiquement chaque fois qu'un nouvel objet est créé. Son premier paramètre est toujours `self`.</p>
            <p class="text-gray-700 mb-4">Le mot-clé `self` représente <strong>l'objet lui-même</strong>. Il permet, à l'intérieur de la classe, de faire référence à l'instance en cours de création ou d'utilisation. On l'utilise pour attacher des données à l'objet. On parle alors d'attributs d'instance (ex: `self.nom`).</p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Voiture</span>:
    <span class="py-comment"># Le constructeur</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">marque_voiture</span>, <span class="py-variable">couleur_voiture</span>):
        <span class="py-comment"># On crée les attributs d'instance en les attachant à 'self'</span>
        <span class="py-builtin">self</span>.marque = <span class="py-variable">marque_voiture</span>
        <span class="py-builtin">self</span>.couleur = <span class="py-variable">couleur_voiture</span>
        <span class="py-builtin">print</span>(<span class="py-string">f"Une voiture {<span class="py-builtin">self</span>.marque} de couleur {<span class="py-builtin">self</span>.couleur} a été créée !"</span>)

<span class="py-comment"># On crée des objets en passant les arguments attendus par __init__ (sauf self)</span>
<span class="py-variable">voiture_1</span> = <span class="py-function">Voiture</span>(<span class="py-string">"Renault"</span>, <span class="py-string">"bleue"</span>)
<span class="py-variable">voiture_2</span> = <span class="py-function">Voiture</span>(<span class="py-string">"Peugeot"</span>, <span class="py-string">"rouge"</span>)

<span class="py-comment"># On peut accéder aux attributs de chaque objet avec la notation pointée</span>
<span class="py-builtin">print</span>(<span class="py-string">f"La première voiture est une {<span class="py-variable">voiture_1</span>.marque}."</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"La seconde voiture est de couleur {<span class="py-variable">voiture_2</span>.couleur}."</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== CHAPITRE 4 : LES MÉTHODES, COMPORTEMENT DES OBJETS ========== -->
<section id="methodes" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 4 : Les Méthodes, le comportement des objets</h3>
    <p class="text-gray-700 mb-6">Les <strong>méthodes</strong> sont des fonctions définies à l'intérieur d'une classe. Elles définissent les actions que les objets de cette classe peuvent effectuer. Tout comme le constructeur, leur premier paramètre est toujours `self`, ce qui leur donne accès aux attributs et aux autres méthodes de l'objet.</p>
    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-xl font-bold text-gray-800 mb-2">4.1. Définir et appeler une méthode</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Personne</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>, <span class="py-variable">age</span>):
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
        <span class="py-builtin">self</span>.age = <span class="py-variable">age</span>

    <span class="py-comment"># Une méthode d'instance simple</span>
    <span class="py-keyword">def</span> <span class="py-function">se_presenter</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"Bonjour, je m'appelle {<span class="py-builtin">self</span>.nom} et j'ai {<span class="py-builtin">self</span>.age} ans."</span>)

    <span class="py-comment"># Une méthode qui modifie un attribut de l'instance</span>
    <span class="py-keyword">def</span> <span class="py-function">vieillir</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">self</span>.age += <span class="py-number">1</span>
        <span class="py-builtin">print</span>(<span class="py-string">f"Joyeux anniversaire ! {<span class="py-builtin">self</span>.nom} a maintenant {<span class="py-builtin">self</span>.age} ans."</span>)


<span class="py-comment"># Création d'un objet</span>
<span class="py-variable">p1</span> = <span class="py-function">Personne</span>(<span class="py-string">"Ali"</span>, <span class="py-number">30</span>)

<span class="py-comment"># Appel des méthodes sur l'objet</span>
<span class="py-variable">p1</span>.<span class="py-function">se_presenter</span>()  <span class="py-comment"># Affiche: Bonjour, je m'appelle Ali et j'ai 30 ans.</span>
<span class="py-variable">p1</span>.<span class="py-function">vieillir</span>()      <span class="py-comment"># Affiche: Joyeux anniversaire ! Ali a maintenant 31 ans.</span>
<span class="py-variable">p1</span>.<span class="py-function">se_presenter</span>()  <span class="py-comment"># Affiche: Bonjour, je m'appelle Ali et j'ai 31 ans.</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== ATELIERS PRATIQUES DE LA PARTIE 1 ========== -->
<section id="exercices-partie1" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Ateliers Pratiques : Vos premières classes</h3>
    <p class="text-gray-700 mb-8">Il est temps de mettre en pratique ces concepts fondamentaux en créant vos propres classes.</p>
    
    <div class="space-y-10">
        <!-- Exercice 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Exercice 1 : La classe `Point`</h4>
            <p class="text-gray-700 mb-4">
                1. Créez une classe `Point` qui prend deux coordonnées `x` et `y` lors de sa création.<br>
                2. Ajoutez une méthode `afficher()` qui affiche les coordonnées sous la forme `(x, y)`.<br>
                3. Créez deux instances de `Point` avec des coordonnées différentes et appelez leur méthode `afficher()`.
            </p>
            <button class="solution-toggle">Voir la solution</button>
            <div class="solution-content">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Point</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">x</span>, <span class="py-variable">y</span>):
        <span class="py-builtin">self</span>.x = <span class="py-variable">x</span>
        <span class="py-builtin">self</span>.y = <span class="py-variable">y</span>
    
    <span class="py-keyword">def</span> <span class="py-function">afficher</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"({<span class="py-builtin">self</span>.x}, {<span class="py-builtin">self</span>.y})"</span>)

<span class="py-comment"># Création et utilisation des objets</span>
<span class="py-variable">p1</span> = <span class="py-function">Point</span>(<span class="py-number">2</span>, <span class="py-number">3</span>)
<span class="py-variable">p2</span> = <span class="py-function">Point</span>(-<span class="py-number">4</span>, <span class="py-number">10</span>)

<span class="py-builtin">print</span>(<span class="py-string">"Coordonnées du point 1 :"</span>)
<span class="py-variable">p1</span>.<span class="py-function">afficher</span>() <span class="py-comment"># Affiche (2, 3)</span>

<span class="py-builtin">print</span>(<span class="py-string">"Coordonnées du point 2 :"</span>)
<span class="py-variable">p2</span>.<span class="py-function">afficher</span>() <span class="py-comment"># Affiche (-4, 10)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Exercice 2 : La classe `Livre`</h4>
            <p class="text-gray-700 mb-4">
                1. Créez une classe `Livre` avec les attributs `titre`, `auteur` et `nb_pages`.<br>
                2. Ajoutez une méthode `description()` qui retourne une chaîne de caractères décrivant le livre : `"Le livre '[titre]' par [auteur] contient [nb_pages] pages."`.<br>
                3. Créez un objet de type `Livre` et affichez sa description.
            </p>
            <button class="solution-toggle">Voir la solution</button>
            <div class="solution-content">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Livre</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">titre</span>, <span class="py-variable">auteur</span>, <span class="py-variable">nb_pages</span>):
        <span class="py-builtin">self</span>.titre = <span class="py-variable">titre</span>
        <span class="py-builtin">self</span>.auteur = <span class="py-variable">auteur</span>
        <span class="py-builtin">self</span>.nb_pages = <span class="py-variable">nb_pages</span>
    
    <span class="py-keyword">def</span> <span class="py-function">description</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">f"Le livre '{<span class="py-builtin">self</span>.titre}' par {<span class="py-builtin">self</span>.auteur} contient {<span class="py-builtin">self</span>.nb_pages} pages."</span>

<span class="py-comment"># Création et utilisation</span>
<span class="py-variable">livre_python</span> = <span class="py-function">Livre</span>(<span class="py-string">"Python pour les Nuls"</span>, <span class="py-string">"John Paul Mueller"</span>, <span class="py-number">432</span>)
<span class="py-variable">description_livre</span> = <span class="py-variable">livre_python</span>.<span class="py-function">description</span>()
<span class="py-builtin">print</span>(<span class="py-variable">description_livre</span>)</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>
</section>