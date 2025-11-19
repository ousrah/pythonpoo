<!-- =================================================================== -->
<!-- PARTIE 2 : LES PILIERS DE LA POO -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 2 : Les Piliers de la POO</h2>

<!-- ========== CHAPITRE 5 : L'ENCAPSULATION ========== -->
<section id="encapsulation" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 5 : L'Encapsulation et la visibilité des attributs</h3>
    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
        L'encapsulation est le premier pilier de la POO. C'est l'idée de regrouper les données (attributs) et les méthodes qui les manipulent au sein d'un même objet. Mais cela va plus loin : l'encapsulation vise aussi à <strong>protéger les données</strong> d'un accès ou d'une modification non contrôlée depuis l'extérieur de l'objet. On parle de "cacher les données" (data hiding).
    </p>



           <h4 class="text-2xl font-semibold mb-3">Illustration 4</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/access1.png" class="m-auto" />
        </div>

        
           <h4 class="text-2xl font-semibold mb-3">Illustration 5</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/access2.png" class="m-auto" />
        </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-8">
        <div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">5.1. Attributs publics, protégés et privés</h4>
            <p class="text-gray-700 mb-4">En Python, la visibilité est une convention :</p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-4">
                <li><strong>Public :</strong> `nom_attribut`. Accessible de partout. C'est le comportement par défaut.</li>
        
                   <h4 class="text-2xl font-semibold mb-3">Illustration 6</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/access3.png" class="m-auto" />
        </div>  
              <li><strong>Protégé :</strong> `_nom_attribut` (un seul underscore). Indique que l'attribut ne devrait pas être modifié depuis l'extérieur, mais est destiné aux classes filles (voir héritage).</li>
                   <h4 class="text-2xl font-semibold mb-3">Illustration 7</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/access4.png" class="m-auto" />
        </div>
              <li><strong>Privé :</strong> `__nom_attribut` (deux underscores). Python "mutile" le nom de cet attribut pour le rendre très difficile d'accès depuis l'extérieur, le réservant à un usage strictement interne à la classe.</li>
          
                     <h4 class="text-2xl font-semibold mb-3">Illustration 8</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/access5.png" class="m-auto" />
        </div>
            </ul>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">CompteBancaire</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">titulaire</span>, <span class="py-variable">solde_initial</span>):
        <span class="py-builtin">self</span>.titulaire = <span class="py-variable">titulaire</span>  <span class="py-comment"># Attribut public</span>
        <span class="py-builtin">self</span>.__solde = <span class="py-variable">solde_initial</span>  <span class="py-comment"># Attribut privé</span>

    <span class="py-comment"># Méthode publique pour déposer de l'argent (contrôle l'accès à __solde)</span>
    <span class="py-keyword">def</span> <span class="py-function">deposer</span>(<span class="py-builtin">self</span>, <span class="py-variable">montant</span>):
        <span class="py-keyword">if</span> <span class="py-variable">montant</span> > <span class="py-number">0</span>:
            <span class="py-builtin">self</span>.__solde += <span class="py-variable">montant</span>
            <span class="py-builtin">print</span>(<span class="py-string">f"{<span class="py-variable">montant</span>} DH déposés. Nouveau solde : {<span class="py-builtin">self</span>.__solde} DH."</span>)
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">"Le montant du dépôt doit être positif."</span>)

    <span class="py-comment"># Méthode publique pour consulter le solde (un "getter")</span>
    <span class="py-keyword">def</span> <span class="py-function">get_solde</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-builtin">self</span>.__solde

<span class="py-variable">compte</span> = <span class="py-function">CompteBancaire</span>(<span class="py-string">"Fatima"</span>, <span class="py-number">1000</span>)

<span class="py-comment"># On peut accéder à l'attribut public</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Titulaire : {<span class="py-variable">compte</span>.titulaire}"</span>)

<span class="py-comment"># On NE PEUT PAS accéder directement à l'attribut privé</span>
<span class="py-comment"># print(compte.__solde)  # -> Ceci lèvera une AttributeError</span>

<span class="py-comment"># On utilise les méthodes publiques pour interagir avec le solde</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Solde initial : {<span class="py-variable">compte</span>.<span class="py-function">get_solde</span>()} DH."</span>)
<span class="py-variable">compte</span>.<span class="py-function">deposer</span>(<span class="py-number">500</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== CHAPITRE 6 : L'HÉRITAGE ========== -->
<section id="heritage" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 6 : L'Héritage, réutiliser et étendre</h3>
    <p class="text-gray-700 mb-6">L'héritage est le deuxième pilier de la POO. Il permet de créer une nouvelle classe (la <strong>classe fille</strong> ou sous-classe) qui hérite des attributs et méthodes d'une classe existante (la <strong>classe mère</strong> ou super-classe). C'est le principe de la relation "est un" : un `Chien` <strong>est un</strong> `Animal`.</p>
    
               <h4 class="text-2xl font-semibold mb-3">Illustration 9</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/heritageChat.png" class="m-auto" />
        </div>
    
       <h4 class="text-2xl font-semibold mb-3">Illustration 10</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/heritageAnimaux.png" class="m-auto" />
        </div>
    
       <h4 class="text-2xl font-semibold mb-3">Illustration 11</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/attributs_methodes_heritage.png" class="m-auto" />
        </div>

    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">6.1. Héritage simple et `super()`</h4>
            <p class="text-gray-700 mb-4">Pour faire hériter une classe, on indique le nom de la classe mère entre parenthèses. La classe fille a alors accès à toutes les méthodes de sa mère. Pour appeler une méthode de la classe mère (notamment le constructeur) depuis la classe fille, on utilise la fonction `super()`.</p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-comment"># Classe Mère</span>
<span class="py-keyword">class</span> <span class="py-function">Animal</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>):
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
    
    <span class="py-keyword">def</span> <span class="py-function">manger</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"{<span class="py-builtin">self</span>.nom} est en train de manger."</span>)

<span class="py-comment"># Classe Fille qui hérite de Animal</span>
<span class="py-keyword">class</span> <span class="py-function">Chien</span>(<span class="py-function">Animal</span>):
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>, <span class="py-variable">race</span>):
        <span class="py-comment"># On appelle le constructeur de la classe mère (Animal) pour initialiser 'nom'</span>
        <span class="py-builtin">super</span>().<span class="py-function">__init__</span>(<span class="py-variable">nom</span>)
        <span class="py-builtin">self</span>.race = <span class="py-variable">race</span>
    
    <span class="py-comment"># Méthode spécifique à la classe Chien</span>
    <span class="py-keyword">def</span> <span class="py-function">aboyer</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">"Wouaf ! Wouaf !"</span>)

<span class="py-variable">mon_animal</span> = <span class="py-function">Animal</span>(<span class="py-string">"Générique"</span>)
<span class="py-variable">mon_chien</span> = <span class="py-function">Chien</span>(<span class="py-string">"Rex"</span>, <span class="py-string">"Berger Allemand"</span>)

<span class="py-comment"># Le chien peut manger, car il a hérité cette méthode de Animal</span>
<span class="py-variable">mon_chien</span>.<span class="py-function">manger</span>()

<span class="py-comment"># Le chien peut aboyer, car c'est sa propre méthode</span>
<span class="py-variable">mon_chien</span>.<span class="py-function">aboyer</span>()

<span class="py-comment"># L'animal générique ne peut pas aboyer</span>
<span class="py-comment"># mon_animal.aboyer() # -> AttributeError</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== CHAPITRE 7 : LE POLYMORPHISME ========== -->
<section id="polymorphisme" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 7 : Le Polymorphisme, un nom pour plusieurs formes</h3>
    <p class="text-gray-700 mb-6">Le polymorphisme (du grec "plusieurs formes") est la capacité pour des objets de classes différentes de répondre à un même message (un même appel de méthode) de manière spécifique. Concrètement, si les classes `Chien` et `Chat` héritent toutes deux de `Animal` et ont toutes deux une méthode `crier()`, l'appel à cette méthode produira un son différent pour chaque objet.</p>
 
                <h4 class="text-2xl font-semibold mb-3">Illustration 12</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/catdogcow1.png" class="m-auto" />
        </div>
    
       <h4 class="text-2xl font-semibold mb-3">Illustration 13</h4>
  <div class="bg-white p-6 items-center rounded-lg ">
           <img src = "img/catdogcow2.png" class="m-auto" />
        </div>
    
 
    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-xl font-bold text-gray-800 mb-2">7.1. Surcharge de méthode (Overriding)</h4>
        <p class="text-gray-700 mb-4">On implémente le polymorphisme en <strong>surchargeant</strong> les méthodes de la classe mère. Cela signifie qu'on redéfinit dans la classe fille une méthode qui existe déjà dans la classe mère.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Animal</span>:
    <span class="py-keyword">def</span> <span class="py-function">crier</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">"L'animal crie..."</span>)

<span class="py-keyword">class</span> <span class="py-function">Chien</span>(<span class="py-function">Animal</span>):
    <span class="py-comment"># On surcharge la méthode crier() de la classe Animal</span>
    <span class="py-keyword">def</span> <span class="py-function">crier</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">"Wouaf !"</span>)

<span class="py-keyword">class</span> <span class="py-function">Chat</span>(<span class="py-function">Animal</span>):
    <span class="py-comment"># On surcharge aussi la méthode crier()</span>
    <span class="py-keyword">def</span> <span class="py-function">crier</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">"Miaou !"</span>)

<span class="py-variable">chien</span> = <span class="py-function">Chien</span>()
<span class="py-variable">chat</span> = <span class="py-function">Chat</span>()

<span class="py-comment"># Le même appel de méthode 'crier()' produit un résultat différent</span>
<span class="py-variable">chien</span>.<span class="py-function">crier</span>()  <span class="py-comment"># Affiche "Wouaf !"</span>
<span class="py-variable">chat</span>.<span class="py-function">crier</span>()   <span class="py-comment"># Affiche "Miaou !"</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- ========== ATELIERS PRATIQUES DE LA PARTIE 2 ========== -->
<section id="exercices-partie2" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Ateliers Pratiques : Les Piliers de la POO</h3>
    <p class="text-gray-700 mb-8">Appliquons ces trois piliers pour construire des hiérarchies de classes logiques et robustes.</p>

    <div class="space-y-10">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Exercice : Véhicules et Héritage</h4>
            <p class="text-gray-700 mb-4">
                1. Créez une classe mère `Vehicule` avec un constructeur qui initialise `marque` et `annee`. Elle doit aussi avoir une méthode `decrire()` qui affiche ces informations.<br>
                2. Créez une classe fille `Voiture` qui hérite de `Vehicule`. Son constructeur doit prendre en plus un `nombre_portes`. La méthode `decrire()` de la voiture doit aussi afficher le nombre de portes.<br>
                3. Créez une classe fille `Moto` qui hérite de `Vehicule`. Son constructeur doit prendre en plus un booléen `side_car`. La méthode `decrire()` de la moto doit indiquer si elle a un side-car ou non.
            </p>
            <button class="solution-toggle">Voir la solution</button>
            <div class="solution-content">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Vehicule</span>:
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">marque</span>, <span class="py-variable">annee</span>):
        <span class="py-builtin">self</span>.marque = <span class="py-variable">marque</span>
        <span class="py-builtin">self</span>.annee = <span class="py-variable">annee</span>
    
    <span class="py-keyword">def</span> <span class="py-function">decrire</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"Véhicule de marque {<span class="py-builtin">self</span>.marque}, année {<span class="py-builtin">self</span>.annee}."</span>, end=<span class="py-string">" "</span>)

<span class="py-keyword">class</span> <span class="py-function">Voiture</span>(<span class="py-function">Vehicule</span>):
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">marque</span>, <span class="py-variable">annee</span>, <span class="py-variable">nombre_portes</span>):
        <span class="py-builtin">super</span>().<span class="py-function">__init__</span>(<span class="py-variable">marque</span>, <span class="py-variable">annee</span>)
        <span class="py-builtin">self</span>.nombre_portes = <span class="py-variable">nombre_portes</span>
        
    <span class="py-comment"># Surcharge de la méthode decrire()</span>
    <span class="py-keyword">def</span> <span class="py-function">decrire</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">super</span>().<span class="py-function">decrire</span>()
        <span class="py-builtin">print</span>(<span class="py-string">f"C'est une voiture avec {<span class="py-builtin">self</span>.nombre_portes} portes."</span>)

<span class="py-keyword">class</span> <span class="py-function">Moto</span>(<span class="py-function">Vehicule</span>):
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">marque</span>, <span class="py-variable">annee</span>, <span class="py-variable">side_car</span>):
        <span class="py-builtin">super</span>().<span class="py-function">__init__</span>(<span class="py-variable">marque</span>, <span class="py-variable">annee</span>)
        <span class="py-builtin">self</span>.side_car = <span class="py-variable">side_car</span>

    <span class="py-keyword">def</span> <span class="py-function">decrire</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">super</span>().<span class="py-function">decrire</span>()
        <span class="py-keyword">if</span> <span class="py-builtin">self</span>.side_car:
            <span class="py-builtin">print</span>(<span class="py-string">"C'est une moto avec un side-car."</span>)
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">"C'est une moto sans side-car."</span>)

<span class="py-variable">ma_voiture</span> = <span class="py-function">Voiture</span>(<span class="py-string">"Dacia"</span>, <span class="py-number">2021</span>, <span class="py-number">5</span>)
<span class="py-variable">ma_moto</span> = <span class="py-function">Moto</span>(<span class="py-string">"Yamaha"</span>, <span class="py-number">2019</span>, <span class="py-builtin">False</span>)

<span class="py-variable">ma_voiture</span>.<span class="py-function">decrire</span>()
<span class="py-variable">ma_moto</span>.<span class="py-function">decrire</span>()</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>
</section>