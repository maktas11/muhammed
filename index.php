<?php
require 'dbconnectie.php';
require 'Modules/portfolio.php';
$portofolio = getportfolio();
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <link rel='stylesheet' href='css/style.css' />
  <link rel='shortcut icon' href='img/favicon.svg' type='image/x-icon'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'
  integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous' />
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet' />
  <link rel='preconnect' href='https://fonts.googleapis.com'><link rel='preconnect' href='https://fonts.gstatic.com' crossorigin><link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap' rel='stylesheet'>
  <title>portfolio</title>
  </head>
<body>
  <nav class='navbar navbar-expand-lg fixed-top'>
    <div class='nav navbar mx-auto text-center'>
      <div class='mx-auto'>
        <a class='navbar-brand me-3' href='#'>muhammed aktas</a>
        <button class='navbar-toggler' style='border: 1px solid #a0a0a0;' type=' button' data-bs-toggle='collapse'
          data-bs-target='#navbarContent' aria-controls='navbarContent' aria-expanded='false'
          aria-label='Toggle navigation'>
          <span><i class='bx bx-menu'></i></span>
        </button>
      </div>
      <div class='collapse navbar-collapse' id='navbarContent'>
        <ul class='navbar-nav'>
          <li class='nav-item'>
            <a class='nav-link' aria-current='page' href='#'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#me'>About me</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#exp'> My Experience</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#proj'>Projects</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#cont'>Contact</a>
          </li>
          <div class='darkmode'>
            <button class='bx1'>
              <i class='bx bxs-bulb'></i>
            </button>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  ";
  $portofolio = getportfolio();
    echo"
    <main class='toggle'>
      <div class='background mx-auto '>
      ";
      foreach ($portofolio as &$data){
        echo"
        <img class='background-img w-100 h-auto'src='" . $data->image . "'  alt=''>
        ";}
        echo"
      </div>
    <div id='me' class='about-me mt-3'>
      <h1>About me</h1>
    </div>
    <div class='experience-info mx-auto text-center d-md-flex d-block pt-md-4'>
      <div class='experience-tab w-100 ms-auto pt-3 pt-md-0 mb-auto btn-group-vertical'>
        <button class='button-info'>
          <span>
            Personal info
          </span>
        </button>
        <button class='button-hobby'>
          <span>
            Hobby's
          </span>
        </button>
        <button class='button-points'>
          <span>
            Weak/strong points
          </span>
        </button>
      </div>
      <div class='experience-text mx-md-0 mx-auto me-md-auto p-2'>
        <div class='experience-tab-text'>
          <p class='text'>
            Mijn naam is Muhammed Aktas en ik ben 18 jaar oud.
            Mijn geboorte datum is 7 november 2003. Ik leef met een 
            broertje zus moeder en vader.
          </p>
        </div>
        </div>
    </div>
    <div  id='exp' class='Experience mt-3'>
      <h1>My Experience</h1>
    </div>
    <div class='d-lg-flex pt-5'>
      <div class='xp mx-auto mx-sm-auto mx-md-auto me-lg-5'>
        <p>Ik ben gegaan naar de basischool willemdrees gegaan en heb daar vaak de leraren geholpen met de computers. Op de middelbare school heb ik minder met de computer gewerkt maar 
          ik heb wel met wat mensen games gemaakt met c++. Ik was niet heel veel bezig met c++ dus ik weet er niet veel meer van. Ik ben nu op de mbo opleiding software development 2de
          jaar. Op mijn eerste jaar software delevopment heb ik 2 soorte codeer talen geleert c# en javascript. Ik heb ook html, css en bootstrap geleerd
        </p>
      </div>
      <div class='pt-4 mx-auto mx-sm-auto ms-lg-5 mx-md-auto p-lg-0 text-center '>
        <img src='img/experience.jpg' class='me-auto' alt='' height='350px' width='350px'>
      </div>
    </div>

    <div class='projects mt-4'>
      <h1>Projects</h1>
    </div>
    <div id='proj' class='project-img text-center'>
      <img src='img/interaction-design.png' alt='' class='myBtn' width='300px'>
      <img src='img/Icoon_rekentool.png' alt='' class='myBtn1 px-5' width='300px'>
      <img src='img/Logo-Health-One.png' alt='' class='myBtn2' width='300px' height='200px'>
      <img src='img/tictactoe.png' alt='' class='myBtn3' width='300px' height='200px'>
      <a href='zuzu/index.php'>  <img src='img/sushi.png' alt='' class='myBtn4' width='300px' height='200px'></a>
      <div class='myModal modal '>
        <div class='modal-content'>
          <span class='close'>&times;</span>
          <h1>Interaction-design</h1>
          <p class='inside'>Voor interaction-design moesten we een pagina maken met javascript dat je gemotiveerd maakt. Wij hebben een carousel website gemaakt met memes and motivational quotes</p>
          <div class='pt-4 mx-auto mx-sm-auto ms-lg-5 mx-md-auto p-lg-0 text-center'>
            <img src='img/interaction-desgin-page.png' class='inter mx-auto w-100 h-auto' alt='' >
            <img src='img/interaction-desgin-quotes.png'  class='inter mx-auto w-100 h-auto' height='500px' width='700px' alt=''>
            <img src='img/carousel.png' height='500px'  class='inter mx-auto w-100 h-auto' width='700px'  alt=''>
          </div>
        </div>
      </div>
        <div class='myModal1 modal'>
          <div class='modal-content'>
            <span class='close1'>&times;</span>
            <h1>rekentool</h1>
            <p class='inside'>Voor ons project moesten we een rekentool maken. We mochten niet een makkelijke rekentool maken wat alleen 1+1 doet, ik had dus een celsius naar farenheit converter gemaakt</p>
            <div class='me'>
              <h2>Fahrenheit Converter</h2>
              <p>
                van Fahrenheit naar Celcius
              </p>
                <p>
                  <label>Fahrenheit</label>
                  <input class='inputFahrenheit' type='number' placeholder='Fahrenheit' oninput='temperatureConverter(this.value)' onchange='temperatureConverter(this.value)'>
                </p>
                <p>Celcius: <span class='outputCelcius'></span></p>
              <h2>Celcius Converter</h2>
              <p>van Celcius naar Fahrenheit</p>
              <p>
                <label>Celcius</label>
                <input class='inputCelcius' type='number' placeholder='Celcius' oninput='temperatureConverter2(this.value)' onchange='temperatureConverter2(this.value)'>
               </p>
              <p>Fahrenheit: <span class='outputFarenheit'></span></p>
             </div>
            </div>
          <script src='js/index.js'></script>
        </body>
        </html>
          </div>
          </div>
          <div class='myModal2 modal'>
            <div class='modal-content'>
              <span class='close2 mx-auto'>&times;</span>
              <h1>healthone</h1>
              <p class='inside text-center'>
                Wij moesten voor een 'client' een website maken dat healthone heette. De pagina gaat over een gym. Tijdens het maken van de pagina moesten we veel dingen
                oproepen uit een database zoals: namen, plaatjes, descriptions en id's.
              </p>
              <div class='pt-4 mx-auto mx-sm-auto ms-lg-5 mx-md-auto p-lg-0 text-center'>
                <img src='img/front.PNG' alt='' class='inter mx-auto w-100 h-auto'   height='500px' width='900px'>
                <img src='img/cata.PNG' alt='' class='inter mx-auto w-100 h-auto'   height='500px' width='900px'>
                <img src='img/contact.PNG' alt='' class='inter mx-auto w-100 h-auto'   height='500px' width='900px'>
                <img src='img/local.PNG' alt=''class='inter mx-auto w-100 h-auto'   height='500px' width='900px'>
              </div>
            </div>
          </div>
      </div>
    </div>
  <div class='myModal3 modal'>
      <div class='modal-content'>
        <span class='close3 mx-auto'>&times;</span>
        <h1>Boter kaas en eiren</h1>
        <p class='inside text-center'>
          In de eerste klas moesten wij een game maken en wat wij als klas gekozen hadden was boter kaas en eiren.
        </p>
      <div class='tictac pt-4 mx-auto mx-sm-auto mx-md-auto p-lg-0 text-center'>
        <header>
          <h1>Tic Tac Toe</h1>
          <span>ofwel boter kaas en eieren</span>
        </header>
      <main class='text-center mx-auto'>
        <div>
          <p>Player 1</p>
          <p>Symbol: X</p>
        </div>
        <div class='board'>
          <section class='field field1'></section>
          <section class='field field2'></section>
          <section class='field field3'></section>
          <section class='field field4'></section>
          <section class='field field5'></section>
          <section class='field field6'></section>
          <section class='field field7'></section>
          <section class='field field8'></section>
          <section class='field field9'></section>
        </div>
        <div>
          <p>player 2</p>
          <p>Symbol: O</p>
        </div>
      </main>
      <button class='reset-btn'>reset</button>
      </div>
    </div>
  </div>
  </div>
  </div>
    <div class='contact-every'>
      <div id='cont' class='contact'>
        <h1>contact</h1>
      </div>
      <div class='fcf-body mx-auto'>
        <div id='fcf-form'>
        <form id='fcf-form-id' class='fcf-form-class' method='post' action='https://formsubmit.co/2f423aa614e99827401a7abdc05df089'>
            <div class='fcf-form-group'>
                <label for='Name' class='fcf-label'>Your name</label>
                <div class='fcf-input-group'>
                    <input type='text' id='Name' name='Name' class='fcf-form-control' required>
                </div>
            </div>
            <div class='fcf-form-group'>
                <label for='Email' class='fcf-label'>Your email address</label>
                <div class='fcf-input-group'>
                    <input type='email' id='Email' name='Email' class='fcf-form-control' required>
                </div>
            </div>
            <div class='fcf-form-group'>
                <label for='Message' class='fcf-label'>Your message</label>
                <div class='fcf-input-group'>
                    <textarea id='Message' name='Message' class='fcf-form-control' rows='6' maxlength='3000' required></textarea>
                </div>
            </div>
            <div class='fcf-form-group'>
                <button type='submit' id='fcf-button' formtarget='_blank' class='fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block'>Send Message</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</main>
";
echo"
<footer class='footer'>
    <ul class='text-center links my-0'>
      <li>
        <a target='blank' href='https://www.linkedin.com/in/muhammed-aktas-487510225/'><i class='bx bxl-linkedin'></i></a>
        <a target='blank' href='https://twitter.com/aktamuhammed734'><i class='bx bxl-twitter' ></i></a>
        <a target='blank' href='https://www.instagram.com/aktasmuhammed734/'><i class='bx bxl-instagram' ></i></a>
      </li>
    </ul>
</footer>
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js'
    integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB'
    crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js'
    integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13'
    crossorigin='anonymous'></script>
    <script type='module' src='js/main.js'></script>
</body>
</html>
";
?>