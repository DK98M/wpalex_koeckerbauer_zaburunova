<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Alex Mayer</title>

    <!-- favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="favicon/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="favicon/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
	<?php wp_head(); ?>
  </head>

  <body>
	<?php wp_body_open(); ?>
    <header>
      <div id="mobile-navbar-toggle">☰</div>
      <h1 id="logo">Alex Mayer</h1>
      <nav class="navitem" id="navitem">
        <ul id="navbar-right">
          <li><a id="navlist" href="#">Start</a></li>
          <li><a id="navlist1" href="#">Leistungen</a></li>
          <li><a id="navlist2" href="#">Blog</a></li>
          <li><a id="navlist3" href="#">Über mich</a></li>
          <li><a id="navlist4" href="#">Kontakt</a></li>
        </ul>
      </nav>
      <section class="hero" id="hero">
        <div class="inpicture">
          <h2>Glänzende Ideen für leuchtende Augen</h2>
          <button>Angebot einholen</button>
        </div>
      </section>
    </header>
    <main>
      <section id="Service">
        <h2>Leistungen</h2>
        <div class="services">
          <ul>
            <li>
              <section class="design" id="design">
                <a href="#">Design</a>
              </section>
            </li>
            <li>
              <section class="strategy" id="strategy">
                <a href="#">Strategie</a>
              </section>
            </li>
            <li>
              <section class="consulting" id="consulting">
                <a href="#">Consulting</a>
              </section>
            </li>
          </ul>
        </div>
      </section>
      <section class="news" id="news">
        <h2>News</h2>
        <ul>
          <li>
            <p>
              <a href="#">365 Postkarten</a>- Eine Liebeserklärung für jeden Tag
              <a href="#">[Mehr Erfahren]</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#">Award-Nominierung</a>- Tolle News: Ich bin bei der
              Endauswahl 2018! <a href="#">[Mehr Erfahren]</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#">CMYK erklärt</a>- der neueste
              <a href="#">Blog</a> Eintrag <a href="#">[Mehr Erfahren]</a>
            </p>
          </li>
        </ul>
      </section>

      <section id="clients">
        <h2>Referenzen</h2>

        <div class="container">
          <div class="references">
            <div class="article-tina">
              <div class="img-tina">
                <img src="images/dina-meyer.jpg" alt="Tina Ubunto" />
              </div>

              <div class="cite-tina">
                <cite>Tina Ubunto</cite>
                <p>CEO headless Ltd.</p>
              </div>

              <div class="blockquote-tina">
                <blockquote>
                  Alex'Redesign hat maßgeblich mitgeholfen, unseren Umsatz um
                  20% in die Höhe zu treiben
                </blockquote>
              </div>
            </div>

            <div class="article-tom">
              <div class="cite-tom">
                <cite>Tom Herzog</cite>
                <p>Cutter's Finest</p>
              </div>

              <div class="img-tom">
                <img
                  class="img-tom"
                  src="images/thomas-meyer.jpg"
                  alt="Tom Herzog"
                />
              </div>

              <div class="blockquote-tom">
                <blockquote>
                  Große Webkunst - keine Kunst mit Alex Mayer!
                </blockquote>
              </div>
              <div class="blue-tom"></div>
            </div>

            <div class="quotationmark">
              <img src="images/quotation_mark.svg" alt="Quotes" />
            </div>

            <div class="article-vorstand">
              <div class="img-vorstand">
                <img src="images/vorstand.jpg" alt="Vorstand Müller AG" />
              </div>
              <div class="cite-and-blockquote-vorstand">
                <cite>Vorstand Müller AG</cite>
                <p>KR Ernst Anker, Dr. Florian Eisner</p>
                <blockquote>
                  Das Store-Konzept von Alex Mayer hat unsere größten
                  Erwartungen übertroffen
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <nav class="Footermenu">
        <p>&copy; Alex Mayer 2020</p>

        <ul>
          <li><a href="#">Impressum|</a></li>
          <li><a href="#">Datenschutzerklärung</a></li>
        </ul>
      </nav>
      <nav class="Footertext">
        <p>
          Demo-Wordpess-Seite im Rahmen der LV 'Content Mangegement Systeme' an
          der FH Salzburg von Daniel Köckerbauer und Elizaveta Zaburunova.
        </p>
        <p>Alle Inhalte frei erfunden</p>
        <p>Bildnachweis</p>
        <p>Fotos</p>
        <ul>
          <li>
            <p>
              Herofoto Tastatur: Aman Anderson,
              http://de.freeimages.com/photo/illuminated-keyboard-124228
            </p>
          </li>
          <li>
            <p>
              Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas
              Meyer-Herman) [GFDL(https//www.gnu.org/copyleft/fdl.html), CC
              BY-SA 3.0 (https://creativecommon.org/licenses/by-sa/3.0) or CC
              BY-SA 3.0 de
              (https//creativecommons.org/licenses/by-sa/3.0/de/deed.en)], via
              Wikimedia Commons
              https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg
            </p>
          </li>
          <li>
            <p>
              Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand
              2015.jpg|SKUelzen Vorstand 2015]]
              https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg
            </p>
          </li>
        </ul>
        <p>Icons</p>
        <ul>
          <li>
            <p>Freepik (http://www.freepik.com)/www.flaticon.com</p>
          </li>
        </ul>
      </nav>
	  <?php wp_footer(); ?>
    </footer>
  </body>
</html>
