<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kxontaktuje nas</title>
    <link rel="stylesheet" type="" href="contact.css">
    <link rel="stylesheet" type="" href="menu.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
  </head>
  <body>
  <header>
    <a href="" class="brand">AquaCity</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <div class="navigation-items">
            <a class="lang" key="domov" href="index.html">Domov</a>
            <a class="lang" key="information" href="info.html">Informácie</a>
            <a class="lang" key="about" href="about.html">O nás</a>
            <a class="lang" key="contact" href="index.php">Kontaktujte nás</a>
            <a class="lang" key="gallery" href="galery.html">Galéria</a>
        </div>
    </div>
</header>
  <form action="index.php" method="post">
  <div class="title">
    <h2>KONTAKTUJTE NÁS!</h2>
  </div>
  <div class="half">
    <div class="item">
      <label for="name">Meno</label>
      <input type="text" id = "name" name="name" required>
    </div>
    <div class="item">
      <label for="email">EMAIL</label>
      <input type="text" id = "email" name="email" required>
    </div>
  </div>
  <div class="full">
    <label for="message">SPRÁVA</label>
    <textarea name="message" id = "message" required></textarea>
  </div>
  <div class="action">
    <input type="submit" value = "ODOSLAŤ" name="submit">
  </div>
</form>
  </body>
</html>