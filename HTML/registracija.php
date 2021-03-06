<?php
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
        <meta name="description" content="Free web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../CSS/Naslovna.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/form.css" rel="stylesheet" type="text/css"/>
        
        <title>
           CUBES ŠKOLA - Grupa QA6
        </title>
        
        <link href="../FOTO/logo.png"  rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <!-- Header -->
    <header>
        <a href="https://cubes.edu.rs/" target="_blank"> <img src="../FOTO/cubes-logo.png" width="200" height="100" title="cubes.edu.rs"> </a>
    </header>
    
    <!-- Navigation Bar --> 
    <nav>
        <div class="container">
            
        </div>
    </nav>

          <div class="container">
            <aside class="list">
                
             <br> <br> 
            <h2 style="text-align: center">Logo grupe</h2>
            <img src="../FOTO/QA-logo.png" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto;">    
            </aside>
              
            <section>
                <h1>Registracija za kurs</h1>
                <form method="get" action="../HTML/index.html">
                    <fieldset>
                        <legend>Osnovni podaci</legend>
                        <div>
                            <label for="name">Ime *</label><br>
                            <input id="name" type="text" name="name" value="" placeholder="Oliver" required="">
                        </div>
                        <div>
                            <label for="password">Šifra *</label><br>
                            <input id="password" type="password" name="password" value="" required="">
                        </div>
                        <div>
                            <label for="email">Email *</label><br>
                            <input id="email" type="email" name="email" value="" required="" placeholder="example@mail.com">
                        </div>
                        <div>
                            <label>Telefon</label><br>
                            <input type="tel" name="phone" value="" placeholder="+381 658077801">
                        </div>
                        <div>
                            <label for="cv">Curiculum Vitae</label><br>
                            <input type="file" name="file" id="cv">
                        </div>
                        <div>
                            <label for="message">Motivaciono pismo</label><br>
                            <textarea id="message" name="message" placeholder="Poruka"  rows="7" cols="50"></textarea>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Željena oblast učenja</legend>

                        <div>
                            <h5>Selektujte oblasti u kojima imate predznanje</h5>
                            <label>
                                <input type="checkbox" name="previous_knowledge[]" value="html">HTML
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="previous_knowledge[]" value="css">CSS
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="previous_knowledge[]" value="database">Baze podataka
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="previous_knowledge[]" value="selenium">Selenium
                            </label>
                        </div>


                        <div>
                            <h5>Šta želite da učite?</h5>
                            <label>
                                <input type="radio" name="wish" value="frontend">FrontEnd
                            </label>
                            <label>
                                <input type="radio" name="wish" value="backend">BackEnd
                            </label>
                            <label>
                                <input type="radio" name="wish" value="QA">QA
                            </label>
                        </div>
                        <div>
                            <button name="send" type="submit" value="yes">Pošalji</button>
                            <button name="reset" type="reset" value="yes">Resetuj formu</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </div>

        <!-- Footer -->
    <footer>
        <h2>QA kurs 2020 - Grupa QA6 </h2>
        <p>Cubes škola je mesto Vaših prvih koraka u IT karijeri. </p>
        
        <a href="https://www.facebook.com/CubesSchool/" target="_blank"> <img src="../FOTO/fb-foto.png" alt="Facebook" width="30" height="30"> </a>
        <a href="https://www.instagram.com/cubesschool/" target="_blank"> <img src="../FOTO/instagram-foto.jpg" alt="Instagram" width="30" height="30"> </a>
        <a href="https://www.linkedin.com/company/cubes-doo/" target="_blank"> <img src="../FOTO/linkedin-foto.jpg" alt="Linkedin" width="30" height="30"> </a>
  
        
        <hr>
    <div>
        Copyright © Sva prava su zadržana.
    </div>
        
    </footer>

  </body>
</html>



