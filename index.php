<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">Escuela</a></div>
            <ul class="links">
                <li><a href="hero">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="service">Services</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>

            <a href="#" class ="action_btn">Iniciar Sesion</a>
            <div class=toggle_btn>
                <i class ="fa-regular fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
        <li><a href="hero">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="service">Services</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="#" class ="action_btn">Iniciar Sesion</a></li>
        </div>
    </header>
    <main>
        <section id="hero">
            <h1>
                bienvenido
            </h1>
            <p>
                Lorem, ipsum dolor sit amet ttates ducimus? <br>Tempora sequi quam voluptatibus delectus minus sed! Fugit voluptates.
            </p>
        </section>
    </main>
    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const dropdownMenu = document.querySelector(".dropdown_menu");
        const toggleBtnIcon= document.querySelector(".toggle_btn i");
        toggleBtn.onclick=function(){
            dropdownMenu.classList.toggle('open')
            const isOpen =dropdownMenu.classList.contains('open')

            toggleBtnIcon.classList=isOpen
            ?'fa-solid fa-xmark':'fa-regular fa-bars';
        }
    </script>
</body>
</html>