function GetCharachter(done) {
    const results = fetch("https://rickandmortyapi.com/api/character");
    results
        .then(Response => Response.json())
        .then(data => {
            done(data)
        });
}

GetCharachter(data => {
    data.results.forEach(personaje => {
        const article = document.createRange().createContextualFragment(/*HTML*/`
            <article>

                <div class="image_container">
                    <img src="${personaje.image}" alt="Personaje">
                </div>

                <h2>${personaje.name}</h2>
                <span>${personaje.status}</span>

            </article>
            `);

        const main = document.querySelector("main");
        main.append(article);
    });
});