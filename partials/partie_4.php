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



<!-- ========== TITRE EXAMEN ========== -->
<div class="mt-16 mb-10 border-t-4 border-indigo-100 pt-10 text-center">
    <span class="inline-block py-1 px-3 rounded-full bg-indigo-100 text-indigo-700 text-sm font-semibold tracking-wide uppercase mb-2">Évaluation Finale</span>
    <h2 class="text-4xl font-extrabold text-gray-900">Examen Régional 2024/2025</h2>
    <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Mettez en pratique vos connaissances en Programmation Orientée Objet avec ces sujets d'examen.</p>
</div>

<!-- ========== EXAMEN 2025 : ÉTUDE DE CAS ========== -->
<section id="examen-2025" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Variante 1 : Système de gestion de notes pour une école (15 pts)</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Vous êtes chargé de développer un système pour aider les professeurs d'une école à suivre les notes de leurs étudiants. Le programme doit permettre d'ajouter des étudiants, d'enregistrer leurs notes dans différentes matières, et de calculer des statistiques.
    </p>
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Énoncé :</h4>
        <div class="space-y-4">
            <div>
                <h5 class="font-semibold text-gray-800">1. Créer une classe Etudiant : (7 pts)</h5>
                <ul class="list-disc ml-6 text-gray-700 space-y-1">
                    <li><strong>Attributs :</strong> nom, prenom, niveau, notes (dictionnaire avec les matières comme clés et les notes comme valeurs). (2 pts)</li>
                    <li><strong>Méthodes :</strong>
                        <ul class="list-circle ml-6 mt-1">
                            <li><code>ajouter_note(matiere, note)</code> : ajoute une note pour une matière donnée. (2 pts)</li>
                            <li><code>calculer_moyenne()</code> : retourne la moyenne des notes de l'étudiant. (3 pts)</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-gray-800">2. Créer une classe Classe : (8 pts)</h5>
                <ul class="list-disc ml-6 text-gray-700 space-y-1">
                    <li><strong>Attributs :</strong> nom_classe, liste_etudiants. (1 pt)</li>
                    <li><strong>Méthodes :</strong>
                        <ul class="list-circle ml-6 mt-1">
                            <li><code>ajouter_etudiant(etudiant)</code> : ajoute un étudiant à la classe. (2 pts)</li>
                            <li><code>moyenne_classe()</code> : calcule la moyenne des moyennes de tous les étudiants. (3 pts)</li>
                            <li><code>meilleur_etudiant()</code> : affiche l'étudiant avec la meilleure moyenne. (2 pts)</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <button class="solution-toggle">Voir la correction</button>
        <div class="solution-content">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Etudiant</span>:
    <span class="py-comment">"""
    Représente un étudiant avec ses notes.
    """</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>, <span class="py-variable">prenom</span>, <span class="py-variable">niveau</span>):
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
        <span class="py-builtin">self</span>.prenom = <span class="py-variable">prenom</span>
        <span class="py-builtin">self</span>.niveau = <span class="py-variable">niveau</span>
        <span class="py-builtin">self</span>.notes = {} <span class="py-comment"># {matiere: note}</span>

    <span class="py-keyword">def</span> <span class="py-function">ajouter_note</span>(<span class="py-builtin">self</span>, <span class="py-variable">matiere</span>, <span class="py-variable">note</span>):
        <span class="py-comment">"""
        Ajoute ou met à jour la note pour une matière donnée.
        """</span>
        <span class="py-keyword">if</span> <span class="py-function">isinstance</span>(<span class="py-variable">note</span>, (<span class="py-builtin">int</span>, <span class="py-builtin">float</span>)) <span class="py-keyword">and</span> 0 <= <span class="py-variable">note</span> <= 20:
            <span class="py-builtin">self</span>.notes[<span class="py-variable">matiere</span>] = <span class="py-variable">note</span>
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">f"Note invalide: {<span class="py-variable">note</span>} doit être entre 0 et 20."</span>)

    <span class="py-keyword">def</span> <span class="py-function">calculer_moyenne</span>(<span class="py-builtin">self</span>):
        <span class="py-comment">"""
        Retourne la moyenne des notes de l'étudiant.
        """</span>
        <span class="py-keyword">if</span> <span class="py-keyword">not</span> <span class="py-builtin">self</span>.notes:
            <span class="py-keyword">return</span> 0.0
        
        <span class="py-comment"># Accumulation sans listes de compréhension</span>
        <span class="py-variable">somme_notes</span> = 0
        <span class="py-variable">nombre_notes</span> = 0
        
        <span class="py-keyword">for</span> <span class="py-variable">note</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.notes.<span class="py-function">values</span>():
            <span class="py-variable">somme_notes</span> += <span class="py-variable">note</span>
            <span class="py-variable">nombre_notes</span> += 1
            
        <span class="py-keyword">return</span> <span class="py-variable">somme_notes</span> / <span class="py-variable">nombre_notes</span>

    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-variable">moyenne</span> = <span class="py-builtin">self</span>.<span class="py-function">calculer_moyenne</span>()
        <span class="py-keyword">return</span> <span class="py-string">f"Etudiant: {<span class="py-builtin">self</span>.prenom} {<span class="py-builtin">self</span>.nom}, Niveau: {<span class="py-builtin">self</span>.niveau}, Moyenne: {<span class="py-variable">moyenne</span>:.2f}"</span>
    
<span class="py-keyword">class</span> <span class="py-function">Classe</span>:
    <span class="py-comment">"""
    Gère un groupe d'étudiants.
    """</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom_classe</span>):
        <span class="py-builtin">self</span>.nom_classe = <span class="py-variable">nom_classe</span>
        <span class="py-builtin">self</span>.liste_etudiants = [] <span class="py-comment"># Liste d'objets Etudiant</span>

    <span class="py-keyword">def</span> <span class="py-function">ajouter_etudiant</span>(<span class="py-builtin">self</span>, <span class="py-variable">etudiant</span>):
        <span class="py-comment">"""
        Ajoute un objet Etudiant à la liste de la classe.
        """</span>
        <span class="py-keyword">if</span> <span class="py-function">isinstance</span>(<span class="py-variable">etudiant</span>, <span class="py-function">Etudiant</span>):
            <span class="py-builtin">self</span>.liste_etudiants.<span class="py-function">append</span>(<span class="py-variable">etudiant</span>)
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">"Erreur: L'objet ajouté n'est pas un Etudiant valide."</span>)

    <span class="py-keyword">def</span> <span class="py-function">moyenne_classe</span>(<span class="py-builtin">self</span>):
        <span class="py-comment">"""
        Calcule la moyenne des moyennes de tous les étudiants.
        """</span>
        <span class="py-keyword">if</span> <span class="py-keyword">not</span> <span class="py-builtin">self</span>.liste_etudiants:
            <span class="py-keyword">return</span> 0.0
        
        <span class="py-comment"># Accumulation sans listes de compréhension</span>
        <span class="py-variable">somme_moyennes</span> = 0.0
        <span class="py-variable">nombre_etudiants</span> = 0
        
        <span class="py-keyword">for</span> <span class="py-variable">etudiant</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.liste_etudiants:
            <span class="py-variable">somme_moyennes</span> += <span class="py-variable">etudiant</span>.<span class="py-function">calculer_moyenne</span>()
            <span class="py-variable">nombre_etudiants</span> += 1
            
        <span class="py-keyword">return</span> <span class="py-variable">somme_moyennes</span> / <span class="py-variable">nombre_etudiants</span>

    <span class="py-keyword">def</span> <span class="py-function">meilleur_etudiant</span>(<span class="py-builtin">self</span>):
        <span class="py-comment">"""
        Affiche l'étudiant avec la meilleure moyenne.
        """</span>
        <span class="py-keyword">if</span> <span class="py-keyword">not</span> <span class="py-builtin">self</span>.liste_etudiants:
            <span class="py-builtin">print</span>(<span class="py-string">f"La classe {<span class="py-builtin">self</span>.nom_classe} est vide."</span>)
            <span class="py-keyword">return</span> <span class="py-builtin">None</span>
        
        <span class="py-variable">meilleur_etudiant</span> = <span class="py-builtin">None</span>
        <span class="py-variable">meilleure_moyenne</span> = -1 <span class="py-comment"># Initialisation à une valeur impossible</span>

        <span class="py-comment"># Itération et comparaison explicite</span>
        <span class="py-keyword">for</span> <span class="py-variable">etudiant</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.liste_etudiants:
            <span class="py-variable">moyenne_actuelle</span> = <span class="py-variable">etudiant</span>.<span class="py-function">calculer_moyenne</span>()
            
            <span class="py-keyword">if</span> <span class="py-variable">moyenne_actuelle</span> > <span class="py-variable">meilleure_moyenne</span>:
                <span class="py-variable">meilleure_moyenne</span> = <span class="py-variable">moyenne_actuelle</span>
                <span class="py-variable">meilleur_etudiant</span> = <span class="py-variable">etudiant</span>
        
        <span class="py-builtin">print</span>(<span class="py-string">f"\n--- Meilleur étudiant de la classe {<span class="py-builtin">self</span>.nom_classe} ---"</span>)
        <span class="py-builtin">print</span>(<span class="py-variable">meilleur_etudiant</span>)
        <span class="py-builtin">print</span>(<span class="py-string">"-----------------------------------------------------"</span>)
        <span class="py-keyword">return</span> <span class="py-variable">meilleur_etudiant</span>
    

<span class="py-comment"># Création des étudiants</span>
<span class="py-variable">e1</span> = <span class="py-function">Etudiant</span>(<span class="py-string">"Hassani"</span>, <span class="py-string">"youssef"</span>, <span class="py-string">"TS"</span>)
<span class="py-variable">e2</span> = <span class="py-function">Etudiant</span>(<span class="py-string">"karimi"</span>, <span class="py-string">"Amal"</span>, <span class="py-string">"TS"</span>)

<span class="py-comment"># Ajout des notes</span>
<span class="py-variable">e1</span>.<span class="py-function">ajouter_note</span>(<span class="py-string">"Maths"</span>, 15.5)
<span class="py-variable">e1</span>.<span class="py-function">ajouter_note</span>(<span class="py-string">"Physique"</span>, 17.0)
<span class="py-variable">e2</span>.<span class="py-function">ajouter_note</span>(<span class="py-string">"Maths"</span>, 10.0)
<span class="py-variable">e2</span>.<span class="py-function">ajouter_note</span>(<span class="py-string">"Physique"</span>, 12.5)

<span class="py-comment"># Test des moyennes individuelles</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Moyenne de Youssef: {<span class="py-variable">e1</span>.<span class="py-function">calculer_moyenne</span>():.2f}"</span>) 
<span class="py-builtin">print</span>(<span class="py-string">f"Moyenne de Amal: {<span class="py-variable">e2</span>.<span class="py-function">calculer_moyenne</span>():.2f}"</span>) 

<span class="py-comment"># Création et gestion de la classe</span>
<span class="py-variable">classe_TS</span> = <span class="py-function">Classe</span>(<span class="py-string">"Terminale S - A"</span>)
<span class="py-variable">classe_TS</span>.<span class="py-function">ajouter_etudiant</span>(<span class="py-variable">e1</span>)
<span class="py-variable">classe_TS</span>.<span class="py-function">ajouter_etudiant</span>(<span class="py-variable">e2</span>)

<span class="py-comment"># Test des statistiques de classe</span>
<span class="py-builtin">print</span>(<span class="py-string">f"\nMoyenne générale de la classe : {<span class="py-variable">classe_TS</span>.<span class="py-function">moyenne_classe</span>():.2f}"</span>)

<span class="py-variable">classe_TS</span>.<span class="py-function">meilleur_etudiant</span>()</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== EXAMEN 2025 : VARIANTE 2 ========== -->
<section id="examen-2025-v2" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Variante 2 : Calculateur de gestion de stock pour un magasin (15 pts)</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Un magasin souhaite automatiser la gestion de son inventaire. Le programme doit pouvoir ajouter de nouveaux produits, mettre à jour les quantités en stock, et générer des rapports sur l'état des stocks.
    </p>
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Énoncé :</h4>
        <div class="space-y-4">
            <div>
                <h5 class="font-semibold text-gray-800">1. Créer une classe Produit : (7 pts)</h5>
                <ul class="list-disc ml-6 text-gray-700 space-y-1">
                    <li><strong>Attributs :</strong> nom, prix, quantite_en_stock. (2 pts)</li>
                    <li><strong>Méthodes :</strong>
                        <ul class="list-circle ml-6 mt-1">
                            <li><code>approvisionner(quantite)</code> : ajoute une quantité au stock existant. (2 pts)</li>
                            <li><code>vendre(quantite)</code> : réduit le stock en fonction de la quantité vendue, en vérifiant qu'il y a suffisamment de stock. (3 pts)</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-gray-800">2. Créer une classe Magasin : (8 pts)</h5>
                <ul class="list-disc ml-6 text-gray-700 space-y-1">
                    <li><strong>Attributs :</strong> nom, adresse, catalogue (liste des produits). (1 pt)</li>
                    <li><strong>Méthodes :</strong>
                        <ul class="list-circle ml-6 mt-1">
                            <li><code>ajouter_produit(produit)</code> : ajoute un produit au catalogue. (2 pts)</li>
                            <li><code>rechercher_produit(nom)</code> : recherche un produit dans le catalogue. (2 pts)</li>
                            <li><code>generer_rapport_stock()</code> : affiche un rapport avec tous les produits en stock et leur quantité. (3 pts)</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <button class="solution-toggle">Voir la correction</button>
        <div class="solution-content">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">class</span> <span class="py-function">Produit</span>:
    <span class="py-comment">"""
    Représente un produit avec son nom, son prix unitaire et sa quantité en stock.
    """</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>, <span class="py-variable">prix</span>, <span class="py-variable">quantite_en_stock</span>):
        <span class="py-comment">"""Initialise les attributs du produit."""</span>
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
        <span class="py-builtin">self</span>.prix = <span class="py-variable">prix</span>
        <span class="py-comment"># Assure que le stock initial est non négatif</span>
        <span class="py-builtin">self</span>.quantite_en_stock = <span class="py-function">max</span>(0, <span class="py-variable">quantite_en_stock</span>) 

    <span class="py-keyword">def</span> <span class="py-function">approvisionner</span>(<span class="py-builtin">self</span>, <span class="py-variable">quantite</span>):
        <span class="py-comment">"""
        Ajoute la quantité spécifiée au stock.
        """</span>
        <span class="py-keyword">if</span> <span class="py-variable">quantite</span> > 0:
            <span class="py-builtin">self</span>.quantite_en_stock += <span class="py-variable">quantite</span>
            <span class="py-builtin">print</span>(<span class="py-string">f"Stock de {<span class="py-builtin">self</span>.nom} mis à jour : +{<span class="py-variable">quantite</span>}. Nouveau stock : {<span class="py-builtin">self</span>.quantite_en_stock}"</span>)
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">"Erreur : La quantité d'approvisionnement doit être positive."</span>)

    <span class="py-keyword">def</span> <span class="py-function">vendre</span>(<span class="py-builtin">self</span>, <span class="py-variable">quantite</span>):
        <span class="py-comment">"""
        Réduit le stock si la quantité est disponible.
        Retourne True si la vente est réussie, False sinon.
        """</span>
        <span class="py-keyword">if</span> <span class="py-variable">quantite</span> <= 0:
            <span class="py-builtin">print</span>(<span class="py-string">"Erreur : La quantité vendue doit être positive."</span>)
            <span class="py-keyword">return</span> <span class="py-builtin">False</span>
            
        <span class="py-keyword">if</span> <span class="py-builtin">self</span>.quantite_en_stock >= <span class="py-variable">quantite</span>:
            <span class="py-builtin">self</span>.quantite_en_stock -= <span class="py-variable">quantite</span>
            <span class="py-variable">montant_vente</span> = <span class="py-variable">quantite</span> * <span class="py-builtin">self</span>.prix
            <span class="py-builtin">print</span>(<span class="py-string">f"Vente de {<span class="py-variable">quantite</span>} unités de {<span class="py-builtin">self</span>.nom} réussie. Montant : {<span class="py-variable">montant_vente</span>:.2f}€. Stock restant : {<span class="py-builtin">self</span>.quantite_en_stock}"</span>)
            <span class="py-keyword">return</span> <span class="py-builtin">True</span>
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">f"Vente échouée pour {<span class="py-builtin">self</span>.nom} : stock insuffisant ({<span class="py-builtin">self</span>.quantite_en_stock} disponibles, {<span class="py-variable">quantite</span>} demandés)."</span>)
            <span class="py-keyword">return</span> <span class="py-builtin">False</span>

    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-comment">"""Permet un affichage lisible du produit."""</span>
        <span class="py-keyword">return</span> <span class="py-string">f"Produit: {<span class="py-builtin">self</span>.nom} | Prix: {<span class="py-builtin">self</span>.prix:.2f}€ | Stock: {<span class="py-builtin">self</span>.quantite_en_stock}"</span>
    

<span class="py-keyword">class</span> <span class="py-function">Magasin</span>:
    <span class="py-comment">"""
    Représente un magasin gérant un catalogue de produits.
    """</span>
    <span class="py-keyword">def</span> <span class="py-function">__init__</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>, <span class="py-variable">adresse</span>):
        <span class="py-comment">"""Initialise le magasin."""</span>
        <span class="py-builtin">self</span>.nom = <span class="py-variable">nom</span>
        <span class="py-builtin">self</span>.adresse = <span class="py-variable">adresse</span>
        <span class="py-builtin">self</span>.catalogue = [] <span class="py-comment"># Liste d'objets Produit</span>

    <span class="py-keyword">def</span> <span class="py-function">ajouter_produit</span>(<span class="py-builtin">self</span>, <span class="py-variable">produit</span>):
        <span class="py-comment">"""
        Ajoute un objet Produit au catalogue du magasin.
        """</span>
        <span class="py-keyword">if</span> <span class="py-function">isinstance</span>(<span class="py-variable">produit</span>, <span class="py-function">Produit</span>):
            <span class="py-builtin">self</span>.catalogue.<span class="py-function">append</span>(<span class="py-variable">produit</span>)
            <span class="py-builtin">print</span>(<span class="py-string">f"Produit '{<span class="py-variable">produit</span>.nom}' ajouté au catalogue de {<span class="py-builtin">self</span>.nom}."</span>)
        <span class="py-keyword">else</span>:
            <span class="py-builtin">print</span>(<span class="py-string">"Erreur : L'objet à ajouter n'est pas un Produit valide."</span>)

    <span class="py-keyword">def</span> <span class="py-function">rechercher_produit</span>(<span class="py-builtin">self</span>, <span class="py-variable">nom</span>):
        <span class="py-comment">"""
        Recherche un produit par son nom dans le catalogue.
        Utilise une boucle 'for' simple.
        Retourne l'objet Produit s'il est trouvé, None sinon.
        """</span>
        <span class="py-variable">nom_recherche</span> = <span class="py-variable">nom</span>.<span class="py-function">lower</span>()
        
        <span class="py-comment"># Parcours du catalogue avec une boucle ordinaire</span>
        <span class="py-keyword">for</span> <span class="py-variable">produit</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.catalogue:
            <span class="py-keyword">if</span> <span class="py-variable">produit</span>.nom.<span class="py-function">lower</span>() == <span class="py-variable">nom_recherche</span>:
                <span class="py-builtin">print</span>(<span class="py-string">f"Produit trouvé : {<span class="py-variable">produit</span>}"</span>)
                <span class="py-keyword">return</span> <span class="py-variable">produit</span>
                
        <span class="py-builtin">print</span>(<span class="py-string">f"Produit '{<span class="py-variable">nom</span>}' non trouvé dans le catalogue."</span>)
        <span class="py-keyword">return</span> <span class="py-builtin">None</span>

    <span class="py-keyword">def</span> <span class="py-function">generer_rapport_stock</span>(<span class="py-builtin">self</span>):
        <span class="py-comment">"""
        Affiche un rapport détaillé sur l'état des stocks.
        Utilise une boucle 'for' simple pour l'affichage.
        """</span>
        <span class="py-builtin">print</span>(<span class="py-string">f"\n======== RAPPORT DE STOCK POUR {<span class="py-builtin">self</span>.nom.<span class="py-function">upper</span>()} ========"</span>)
        <span class="py-builtin">print</span>(<span class="py-string">f"Localisation : {<span class="py-builtin">self</span>.adresse}"</span>)
        
        <span class="py-comment"># Variables pour le résumé (calculé avec une boucle)</span>
        <span class="py-variable">nombre_total_produits</span> = 0
        <span class="py-variable">valeur_totale_stock</span> = 0.0

        <span class="py-comment"># Boucle ordinaire pour itérer sur le catalogue et générer le rapport</span>
        <span class="py-keyword">for</span> <span class="py-variable">produit</span> <span class="py-keyword">in</span> <span class="py-builtin">self</span>.catalogue:
            <span class="py-comment"># Affichage du détail</span>
            <span class="py-builtin">print</span>(<span class="py-string">f"* {<span class="py-variable">produit</span>.nom.<span class="py-function">ljust</span>(20)} | Quantité: {<span class="py-variable">produit</span>.quantite_en_stock} | Prix: {<span class="py-variable">produit</span>.prix:.2f}€"</span>)
            
            <span class="py-comment"># Calcul du résumé</span>
            <span class="py-variable">nombre_total_produits</span> += 1
            <span class="py-variable">valeur_totale_stock</span> += <span class="py-variable">produit</span>.quantite_en_stock * <span class="py-variable">produit</span>.prix
            
        <span class="py-builtin">print</span>(<span class="py-string">"--------------------------------------------------"</span>)
        <span class="py-builtin">print</span>(<span class="py-string">f"Total de produits différents : {<span class="py-variable">nombre_total_produits</span>}"</span>)
        <span class="py-builtin">print</span>(<span class="py-string">f"Valeur totale estimée du stock : {<span class="py-variable">valeur_totale_stock</span>:.2f}€"</span>)
        <span class="py-builtin">print</span>(<span class="py-string">"==================================================\n"</span>)

    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-builtin">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">f"Magasin : {<span class="py-builtin">self</span>.nom} situé à {<span class="py-builtin">self</span>.adresse}. Catalogue contient {<span class="py-function">len</span>(<span class="py-builtin">self</span>.catalogue)} produits différents."</span>


<span class="py-comment"># 1. Création et gestion des produits</span>
<span class="py-variable">pomme</span> = <span class="py-function">Produit</span>(<span class="py-string">"Pomme"</span>, 0.50, 100)
<span class="py-variable">lait</span> = <span class="py-function">Produit</span>(<span class="py-string">"Lait"</span>, 1.20, 50)
<span class="py-variable">pain</span> = <span class="py-function">Produit</span>(<span class="py-string">"Pain"</span>, 2.00, 20)

<span class="py-builtin">print</span>(<span class="py-string">"--- Tests de la classe Produit ---"</span>)
<span class="py-variable">pomme</span>.<span class="py-function">vendre</span>(10)      <span class="py-comment"># Vente réussie</span>
<span class="py-variable">lait</span>.<span class="py-function">vendre</span>(60)       <span class="py-comment"># Vente échouée (stock insuffisant)</span>
<span class="py-variable">pomme</span>.<span class="py-function">approvisionner</span>(20)
<span class="py-builtin">print</span>(<span class="py-variable">pomme</span>)          <span class="py-comment"># Affichage du stock mis à jour</span>

<span class="py-builtin">print</span>(<span class="py-string">"\n--- Tests de la classe Magasin ---"</span>)
<span class="py-comment"># 2. Création et gestion du magasin</span>
<span class="py-variable">mon_magasin</span> = <span class="py-function">Magasin</span>(<span class="py-string">"Epicerie du Coin"</span>, <span class="py-string">"12 Rue Principale"</span>)
<span class="py-variable">mon_magasin</span>.<span class="py-function">ajouter_produit</span>(<span class="py-variable">pomme</span>)
<span class="py-variable">mon_magasin</span>.<span class="py-function">ajouter_produit</span>(<span class="py-variable">lait</span>)
<span class="py-variable">mon_magasin</span>.<span class="py-function">ajouter_produit</span>(<span class="py-variable">pain</span>)

<span class="py-comment"># 3. Recherche de produit</span>
<span class="py-variable">produit_trouve</span> = <span class="py-variable">mon_magasin</span>.<span class="py-function">rechercher_produit</span>(<span class="py-string">"Lait"</span>)
<span class="py-variable">produit_introuvable</span> = <span class="py-variable">mon_magasin</span>.<span class="py-function">rechercher_produit</span>(<span class="py-string">"Pâtes"</span>)

<span class="py-comment"># 4. Génération du rapport</span>
<span class="py-variable">mon_magasin</span>.<span class="py-function">generer_rapport_stock</span>()</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>
