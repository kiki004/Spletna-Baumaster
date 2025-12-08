<?php 
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $kraj = $_POST['kraj'];
    $email = $_POST['email'];
    $preveri =$_POST['preveri'];
    $zadeva = $_POST['zadeva'];
    $sporocilo = $_POST['sporocilo'];
    
    $servername = "localhost";
    $username = "sgradsi_user1";
    $password = "gRtXFip}~Sq,";
    $databaseName = "sgradsi_obrazec";

    //povezava
    
    $povezava = new mysqli($servername,	$username,$password, $databaseName);
    if($povezava->connect_error){
        die('Connection Failed : '.$povezava->connect_error);
        
    }
    else{
        $vnos = $povezava->prepare("insert into obrazec (ime, priimek, kraj,email, spam, zadeva, sporocilo)
        values(?,?,?,?,?,?,?)");
        $vnos->bind_param("sssssss", $firstName, $lastName, $kraj, $email,$preveri, $zadeva,$sporocilo);
        $vnos->execute();
    
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Zelo pomembno!!!!!-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"> <!--puščica gor-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--animacije-->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script> <!---To je za nav za telefon--->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../stil/pogoji.css">
    <title>Poslano....</title>
  </head>
  <body>
  <script src="../script.js"></script>
        <section id="top">
            <header id="nav">
            <div id="logo">
                <a href=""><img src="../img/logobel.svg" alt="logo"></a>
            </div>
            <div class="nav-pages">
                <div class="nav-mobile"><a id="nav-toggle" href="#!">
                    <span></span></a></div>
             <div id="ozadje">
                <ul id="povezave">
                    <li><a href=""class="link">Domov</a></li>
                    <li><a href="/podstrani/spoznajte-nas"class="link">O nas</a></li>
                    <li><a href="/podstrani/tehnologija"class="link ">tehnologija</a></li>
                    <li><a href="/podstrani/galerija"class="link ">Galerija</a></li>
                    <li><a href="/podstrani/izdelki"class="link ">Izdelki</a></li>           
                    <li><a href="/podstrani/kontakt"class="link">Kontakt</a></li>
                </ul>
            </div>
            </div>
     </header>
         <div class="container">  
            <section id="vsebina1">   
                <div class="us-box"data-aos="fade-right"data-aos-duration="1000"data-aos-delay="50">       
                <div>
            <H1 style="text-align:center; margin:auto;">Uspešno poslano...</H1>
        </div>
                         
 </div>
    </section>
    <div class="container3">
    <div class="noga">
        <div class="box1">
          <div class="kontakt-noga">
          <h2>Podjetje</h2>
          <ul>
            <li><a href=""><p>S-GRAD d.o.o.</p></a></li>
            <li><a href="/podstrani/varstvo-osebnih"><p>Varstvo osebnih podatkov</p></a></li>
            <li><a href="/podstrani/splosni-pogoji"><p>Splošni pogoji</p></a></li>
            <li><a href="/podstrani/spoznajte-nas"><p>O nas</p></a></li>
            <li><a href="/podstrani/kontakt"><p>Kontakt</p></a></li>
           </ul>
          </div>
        </div>
        <div class="box2">
            <div id="logo-noga">
                <img src="../img/logobel.svg" alt="logo"><br>
            </div>
            <div id="socialna-omrezja">
                <a href="https://www.youtube.com/channel/UCdSlhh6HXzBkvX7LWV7mZDA"target="_blank"><img src="../img/social_network_logos/yt.svg" alt="YouTube"></a>
                <a href="error.html"><img src="../img/social_network_logos/inst.svg" alt="Instagram"></a>
                <a href="error.html"><img src="../img/social_network_logos/fb.svg" alt="Facebook"></a>
                
            </div>
        </div>
        <div class="box3">
            <div class="kontakt-noga">
                <h2>Kontakt</h2>
                <ul>
                    <li><p>S-GRAD d.o.o.</p></li>
                    <li><p>Križevska vas 21</p></li>
                    <li><p>8330 Metlika</p></li>
                    <li><p>T-Lesni del: +386 41 825 307</p></li>
                    <li><p>T-Gradbeni del: +386 31 720 272</p></li>
                    <li><p>M: info@sgrad.si</p></li>
                   </ul>
            </div>
        </div>
    </div>
    <footer>© 2024 S-grad, Vse pravice pridržane. </footer>
</div>  
<a href="#top" class="scrollLink">
    <span class="material-icons">arrow_upward</span>
  </a>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init({
        easing: 'ease-in-out-sine'
      });

      setInterval(addItem, 300);

      var itemsCounter = 1;
      var container = document.getElementById('aos-demo');

      function addItem () {
        if (itemsCounter > 42) return;
        var item = document.createElement('div');
        item.classList.add('aos-item');
        item.setAttribute('data-aos', 'fade-up');
       // item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
        container.appendChild(item);
        itemsCounter++;
      }
    
//menu za telefon
$('#nav-toggle').on('click', function() {
  this.classList.toggle('active');
});

$("#nav-toggle").click(function() {
      $("#povezave").toggle();
    });

</script>
</body>
</html>

<?php
        $vnos->close();
        $povezava->close();
    }

    ?>
    
    