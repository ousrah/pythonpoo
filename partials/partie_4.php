<!-- =================================================================== -->
<!-- PARTIE 4 : ATELIERS DE SYNTHÈSE -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 4 : Ateliers de Synthèse</h2>

<!-- ========== CHAPITRE 10 : PROJET PRATIQUE ========== -->
<section id="projet-pratique" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 10 : Projet Pratique - Mini-système de gestion de bibliothèque</h3>
    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
        Il est temps de rassembler toutes les compétences que vous avez acquises. Nous allons créer un petit programme en POO pour gérer une bibliothèque. Ce projet utilisera des classes, des objets, des méthodes, des attributs privés et des interactions entre objets.
    </p>
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Objectifs du projet :</h4>
        <ul class="list-disc ml-6 text-gray-700 space-y-2">
            <li>Créer une classe `Livre` avec un titre, un auteur et un statut (disponible/emprunté).</li>
            <li>Créer une classe `Bibliotheque` qui contient une collection de livres.</li>
            <li>La `Bibliotheque` doit permettre d'ajouter un livre, d'emprunter un livre (en vérifiant sa disponibilité), de retourner un livre et de lister tous les livres avec leur statut.</li>
            <li>Utiliser la méthode spéciale `__str__` pour afficher joliment les informations d'un livre.</li>
        </ul>
        <button class="solution-toggle">Voir la solution complète</button>
        <div class="solution-content">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Livre</span>:
    <span class="py-comment">"""Représente un livre avec un titre, un auteur et un statut."""</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">titre</span>, <span class="py-variable">auteur</span>):
        <span class="py-builtin">self</span>.titre = <span class="py-variable">titre</span>
        <span class="py-builtin">self</span>.auteur = <span class="py-variable">auteur</span>
        <span class="py-builtin">self</span>.est_emprunte = <span class="py-builtin">False</span>
        
    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-variable">statut</span> = <span class="py-string">"Emprunté"</span> <span class="py-keyword">if</span> <span class="py-builtin">self</span>.est_emprunte <span class="py-keyword">else</span> <span class="py-string">"Disponible"</span>
        <span class="py-keyword">return</span> <span class="py-string">f"'{<span class="py-builtin">self</span>.titre}' par {<span class="py-builtin">self</span>.auteur} - Statut : {<span class="py-variable">statut</span>}"</span>

<span class="py-keyword">class</span> <span class="py-function">Bibliotheque</span>:
    <span class="py-comment">"""Gère une collection de livres."""</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>):
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
        <span class="py-builtin">self</span>.__catalogue = [] <span class="py-comment"># La liste des livres est privée</span>

    <span class="py-keyword">def</span> <span class="py-function">ajouter_livre</span>(<span class="py-builtin">self</span>, <span class="py-variable">livre</span>):
        <span class="py-builtin">self</span>.__catalogue.<span class="py-function">append</span>(<span class="py-variable">livre</span>)
        <span class="py-builtin">print</span>(<span class="py-string">f"'{<span class="py-variable">livre</span>.titre}' a été ajouté au catalogue."</span>)
            
    <span class="py-keyword">def</span> <span class="py-function">lister_livres</span>(<span class="py-builtin">self</span>):
        <span class="py-builtin">print</span>(<span class="py-string">f"\n--- Livres dans la bibliothèque '{<span class="py-builtin">self</span>.nom}' ---"</span>)
        <span class="py-keyword">for</span> <span class="py-variable">livre</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.__catalogue:
            <span class="py-builtin">print</span>(<span class="py-variable">livre</span>)
    
    <span class="py-keyword">def</span> <span class="py-function">emprunter_livre</span>(<span class="py-builtin">self</span>, <span class="py-variable">titre</span>):
        <span class="py-keyword">for</span> <span class="py-variable">livre</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.__catalogue:
            <span class="py-keyword">if</span> <span class="py-variable">livre</span>.titre == <span class="py-variable">titre</span>:
                <span class="py-keyword">if</span> <span class="py-keyword">not</span> <span class="py-variable">livre</span>.est_emprunte:
                    <span class="py-variable">livre</span>.est_emprunte = <span class="py-builtin">True</span>
                    <span class="py-builtin">print</span>(<span class="py-string">f"Vous avez emprunté '{<span class="py-variable">titre</span>}'."</span>)
                <span class="py-keyword">else</span>:
                    <span class="py-builtin">print</span>(<span class="py-string">f"Désolé, '{<span class="py-variable">titre</span>}' est déjà emprunté."</span>)
                <span class="py-keyword">return</span>
        <span class="py-builtin">print</span>(<span class="py-string">f"Le livre '{<span class="py-variable">titre</span>}' n'a pas été trouvé dans notre catalogue."</span>)

    <span class="py-keyword">def</span> <span class="py-function">retourner_livre</span>(<span class="py-builtin">self</span>, <span class="py-variable">titre</span>):
        <span class="py-keyword">for</span> <span class="py-variable">livre</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.__catalogue:
            <span class="py-keyword">if</span> <span class="py-variable">livre</span>.titre == <span class="py-variable">titre</span>:
                <span class="py-variable">livre</span>.est_emprunte = <span class="py-builtin">False</span>
                <span class="py-builtin">print</span>(<span class="py-string">f"Merci d'avoir retourné '{<span class="py-variable">titre</span>}'."</span>)
                <span class="py-keyword">return</span>

<span class="py-comment"># --- Programme principal ---</span>
<span class="py-variable">ma_biblio</span> = <span class="py-function">Bibliotheque</span>(<span class="py-string">"Bibliothèque Municipale"</span>)

<span class="py-variable">ma_biblio</span>.<span class="py-function">ajouter_livre</span>(<span class="py-function">Livre</span>(<span class="py-string">"L'Étranger"</span>, <span class="py-string">"Albert Camus"</span>))
<span class="py-variable">ma_biblio</span>.<span class="py-function">ajouter_livre</span>(<span class="py-function">Livre</span>(<span class="py-string">"1984"</span>, <span class="py-string">"George Orwell"</span>))

<span class="py-variable">ma_biblio</span>.<span class="py-function">lister_livres</span>()

<span class="py-variable">ma_biblio</span>.<span class="py-function">emprunter_livre</span>(<span class="py-string">"1984"</span>)
<span class="py-variable">ma_biblio</span>.<span class="py-function">emprunter_livre</span>(<span class="py-string">"Livre Inconnu"</span>)
<span class="py-variable">ma_biblio</span>.<span class="py-function">emprunter_livre</span>(<span class="py-string">"1984"</span>) <span class="py-comment"># Essayer d'emprunter un livre déjà pris</span>

<span class="py-variable">ma_biblio</span>.<span class="py-function">lister_livres</span>() <span class="py-comment"># Montre le changement de statut</span>

<span class="py-variable">ma_biblio</span>.<span class="py-function">retourner_livre</span>(<span class="py-string">"1984"</span>)
<span class="py-variable">ma_biblio</span>.<span class="py-function">lister_livres</span>() <span class="py-comment"># Le livre est de nouveau disponible</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

