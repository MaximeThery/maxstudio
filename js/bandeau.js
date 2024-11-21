document.addEventListener("DOMContentLoaded", function () {
    const texteDefilant = document.querySelector(".texte-defilant");
    const parent = texteDefilant.parentElement;

    // Définir le texte à répéter
    const texte = "Créer ton flash";

    // Fonction pour créer un clone du texte
    function createTextElement(content) {
        const newText = document.createElement("p");
        newText.className = "texte-defilant";
        newText.textContent = content;
        return newText;
    }

    // Injecter 6 instances initialement
    for (let i = 0; i < 5; i++) {
        const newText = createTextElement(texte);
        parent.appendChild(newText);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const texteDefilant = document.querySelector(".texte-defilant-reverse");
    const parent = texteDefilant.parentElement;

    // Définir le texte à répéter
    const texte = "Créer ton flash";

    // Fonction pour créer un clone du texte
    function createTextElement(content) {
        const newText = document.createElement("p");
        newText.className = "texte-defilant-reverse";
        newText.textContent = content;
        return newText;
    }

    // Injecter 6 instances initialement
    for (let i = 0; i < 5; i++) {
        const newText = createTextElement(texte);
        parent.appendChild(newText);
    }
});

