<!DOCTYPE html>
<head>
<title>KIR UF</title>

<link rel="stylesheet" type="text/css" href="../css/style_itsupport_privat.css">
<link rel="icon" href="../bilder/logo.ico"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

<meta charset="UTF-8">
</head>
<body>
<ul class="menuul">
  <li class="menuli"><a href="index.html">Hem</a></li>
  <li class="menuli"><a class="active" href="itsupport.html">IT support</a></li>
  <li class="menuli"><a href="kurser.html">Kurser</a></li>
  <li class="menuli"><a href="radgivning.html">Rådgivning</a></li>
  <li class="menuli"><a href="omoss.html">Om oss</a></li>
  <li class="menuli"><a href="faq.html">FAQ</a></li>
  <li class="menuli"><a href="kontakta.html">Kontakta oss</a></li>
</ul>


<div class="whitebox">
<h1 class ="welcometext">IT-support privatperson</h1>
<div class="allt">
<div class ="hemtext">
    <p>Vi på KIR UF sträver efter att du som kund skall få den bästa upplevelsen och känna dig välkommen tillbaka till oss.
En utav våra tre tjänster på vårat företag är IT-support, där vi hjälper dig med dina frågor och problem inom IT.
För att få IT-support så behöver du skriva ett mail till oss. Detta gör du genom att trycka på knappen nedan.</p>
<div class="formular">
    <form action="submit.php" method="POST/GET">
        <label for="name"><p>Namn</p></label>
        <input type="text" id="name" name="name" placeholder="Ditt namn...">
    <br>
        <label for="kontakt"><p>Kontakt (email/nummer)</p></label>
        <input type="text" id="kontakt" name="kontakt" placeholder="Ditt email/nummer..."><br>
        
        <label for="problem"><p>Beskriv ditt problem</p></label>
        <textarea name="problem" id="problem" cols="30" rows="10" placeholder="Beskriv ditt problem här..."></textarea>
        <br>

        <input type="submit" value="Submit">
      </form>
    </div>
</div>
</div>
</div>
</body>
</html>