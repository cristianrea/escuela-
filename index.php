<!DOCTYPE html>
 
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CCPM</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
     <link rel="stylesheet" href="style\style.css">
     <script src="js/script.js" defer></script>
 </head>
 <body>
     <header>
         <nav class="navbar">
             <span class="hamburger-btn material-symbols-rounded">menu</span>
             <a href="#" class="logo">
                 <img src="img/logo.jpg" alt="logo">
                 <h2>CCPM</h2>
             </a>
             <ul class="links">
                 <span class="close-btn material-symbols-rounded">x</span>
                 <li><a href="#">INICIO</a></li>
                 <li><a href="#">Blog</a></li>
                 <li><a href="#">Sobre nostros</a></li>
                 <li><a href="#">Contacto</a></li>
             </ul>
             <button class="login-btn">Iniciar sesion</button>
         </nav>
     </header>
  
     <div class="blur-bg-overlay"></div>
     <div class="form-popup">
         <span class="close-btn material-symbols-rounded">x</span>
         <div class="form-box login">
             <div class="form-details">
                 <h2>Bienvenido de nuevo</h2>
                 <p>Porfavor iniciar session</p>
             </div>
             <div class="form-content">
                 <h2>LOGIN</h2>
                 <form action="#">
                     <div class="input-field">
                         <input type="text" required>
                         <label>Correo</label>
                     </div>
                     <div class="input-field">
                         <input type="password" required>
                         <label>Contraseña</label>
                     </div>
                     <a href="#" class="forgot-pass-link">¿olvidaste tu contraseña?</a>
                     <button type="submit">Iniciar sesion</button>
                 </form>
                 <div class="bottom-link">
                     ¿No tienes una cuenta?
                     <a href="#" id="signup-link">Registrate</a>
                 </div>
             </div>
         </div>
         <div class="form-box signup">
             <div class="form-details">
                 <h2>Crear una cuenta</h2>
                 <p> Por favor registrate aqui</p>
             </div>
             <div class="form-content">
                 <h2>REGISTRATE</h2>
                 <form action="#">
                     <div class="input-field">
                         <input type="text" required>
                         <label>Ingresa tu correo electronico</label>
                     </div>
                     <div class="input-field">
                         <input type="password" required>
                         <label>Crear contraseña</label>
                     </div>
                     <div class="policy-text">
                         <input type="checkbox" id="policy">
                         <label for="policy">
                            Estoy de acuerdo con los
                             <a href="#" class="option">Terminos y condiciones</a>
                         </label>
                     </div>
                     <button type="submit">REGISTRATE</button>
                 </form>
                 <div class="bottom-link">
                     ¿Ya tienes una cuenta?
                     <a href="#" id="login-link">INICIAR SECION</a>
                 </div>
             </div>
         </div>
     </div>
 </body>
 </html>