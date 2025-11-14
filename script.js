document.addEventListener('DOMContentLoaded', function () {

    // === SCRIPT POUR AFFICHER/MASQUER LA SOLUTION ===
    document.querySelectorAll('.solution-toggle').forEach(button => {
        button.addEventListener('click', () => {
            // nextElementSibling cible l'élément juste après le bouton, notre <div> de solution
            const solutionContent = button.nextElementSibling;

            if (solutionContent.style.display === 'block') {
                solutionContent.style.display = 'none';
                button.textContent = 'Voir la solution';
            } else {
                solutionContent.style.display = 'block';
                button.textContent = 'Masquer la solution';
            }
        });
    });

    // === SCRIPT POUR LE BOUTON COPIER ===
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', () => {
            const codeBlock = button.previousElementSibling; // Cible le <pre>
            const code = codeBlock.innerText;

            navigator.clipboard.writeText(code).then(() => {
                const originalText = button.textContent;
                button.textContent = 'Copié !';
                setTimeout(() => {
                    button.textContent = originalText;
                }, 2000);
            }).catch(err => {
                console.error('Erreur de copie : ', err);
            });
        });
    });

});