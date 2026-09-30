fetch("../backend/index.php")
    .then(r => r.json())
    .then(films => {

        let html = "";

        films.forEach(f => {
            html += `
                <tr>
                    <td class="del">${f.id}</td>
                    <td class="del">${f.type_de_film}</td>
                    <td class="del">${f.titre}</td>
                    <td class="del">${f.acteur_pr}</td>
                    <td class="del">${f.histoire}</td>
                    <td class="del">${f.date_de_sortie}</td>
                </tr>
            `;
        });

        document.getElementById("resultat").innerHTML = html;
    });
