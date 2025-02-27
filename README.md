# PRPYECTO-TRANSVERSAL
# He creado las diferentes ramas para cada una
            -Abril
            -Angelo
            -Albora
            -Mary-ann

# -------------------------------------
# Autor: ALBORA IZQUIERDO HERNÁNDEZ 
# Date: 24/05/2025

HTML.HOME

 <section class="hero">
        <!--Parte inicial (imagen de fondo)-->
        <div>
            <h1>Dojo Search</h1>
            <a href="/Home html/IMG/foto-inicio.jpg" class="btn">SIENTE LAS ARTES MARCIALES</a>
        </div>
    </section>

CSS.HOME

-- I have to modify the html and css of the HEADER since it is poorly structured, it is not optimal to directly make the NAVBAR in the HEADER.

-- Make the main image always the same size and not change

.hero {
    background-image: url("/Home html/IMG/foto-inicio.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 80vh; /* Ajusta la altura */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
}

.hero h1 {
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 5px;
    padding: 5px 15px;
    color: white;
    font-size: 4em;
    margin-bottom: 20px;
}

/* Botón dentro del hero */
.hero .btn {
    display: inline-block;
    background-color: #7e0000;
    color: #fff;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.hero .btn:hover {
    background-color: #5e0000;
}
# -------------------------------------