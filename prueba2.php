<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Carousel</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

</style>
</head>
<body>
    <div class="carousel-container">
        <div class="card-carousel">
            <div class="card">Card 1</div>
            <div class="card">Card 2</div>
            <div class="card">Card 3</div>
            <div class="card">Card 4</div>
            <div class="card">Card 2</div>
            <div class="card">Card 3</div>
            <!-- Agrega más tarjetas según sea necesario -->
        </div>
        <button id="prevBtn">Anterior</button>
        <button id="nextBtn">Siguiente</button>
    </div>

    <script>
const cardCarousel = document.querySelector(".card-carousel");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

const cards = document.querySelectorAll(".card");
let cardIndex = 0;

prevBtn.addEventListener("click", () => {
    cardIndex = (cardIndex - 1 + cards.length) % cards.length;
    updateCardVisibility();
});

nextBtn.addEventListener("click", () => {
    cardIndex = (cardIndex + 1) % cards.length;
    updateCardVisibility();
});

function updateCardVisibility() {
    cards.forEach((card, index) => {
        card.style.display = index === cardIndex ? "block" : "none";
    });
}

// Mostrar la primera tarjeta al cargar la página
updateCardVisibility();

    </script>


<!--Pie de pagina-->
        
<footer style="background-color: #CA0403; " >
        <br>
        <h4 style="color:#fff" >SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.instagram.com/ferreteriajotta.r/?hl=es-la" target="_blank" rel="noopener">
        <i class="fa-brands fa-instagram fa-beat" style="color: #f7f7f8;"></i></a>
        </li>
        <a href="https://www.facebook.com/ferreteriajotta.r" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook fa-beat" style="color: #fafafa;"></i>
      </a>
          <div class="container" style="color:#fff" >
            

          <hr>
              &copy; 2023 - <b> Ferreteria Jotta-R </b> - Todos los Derechos Reservados
            </a>

            

              
             
            </div>
          </nav>
              
          </div>
          
      </footer>



    
</body>
</html>
