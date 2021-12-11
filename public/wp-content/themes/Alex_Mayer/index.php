<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <!-- Wordpress Titel -->
    <!-- <title>Alex Mayer</title> -->
    <?php wp_title(); ?>

    <!-- favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href=<?php echo get_template_directory_uri() ."favicon/apple-touch-icon.png" ?>
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href=<?php echo get_template_directory_uri() ."favicon/favicon-32x32.png" ?>
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href=<?php echo get_template_directory_uri() ."favicon/favicon-16x16.png" ?>
    />
    <link rel="manifest" href=<?php echo get_template_directory_uri() ."favicon/site.webmanifest" ?>/>
    <link
      rel="mask-icon"
      href=<?php echo get_template_directory_uri() ."favicon/safari-pinned-tab.svg" ?>
      color="#5bbad5"
    />
    <link rel="shortcut icon" href=<?php echo get_template_directory_uri() ."favicon/favicon.ico" ?>/>
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
            <!-- LOOP -->
            <?php
                $service_query = new WP_Query('cat=2&order=ASC&orderby=date');
                if ($service_query->have_posts()) :
                    while ($service_query->have_posts()) :
                        $service_query->the_post(); ?>
                        <li>
                          <section class =<?php the_title(); ?> id=<?php the_title(); ?>>
                              <a href =<?php the_permalink(); ?>><?php the_title(); ?></a>
                              <?php the_post_thumbnail(); ?>
                          </section>
                        </li>
                    <?php
                    endwhile;
                else : ?>
                    <p>Erster Service demnächst...</p>
                <?php endif;
                ?>
              <!-- LOOP ENDE -->
          </ul>
        </div>
      </section>
      <section class="news" id="news">
        <h2>News</h2>
        <ul>
          <?php
                $news_query = new WP_Query('cat=3&order=ASC&orderby=date');
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) :
                        $news_query->the_post(); ?>
                        <li>
                            <p><a href="#"><?php the_title(); ?></a> - <?php echo wp_strip_all_tags( get_the_content() ); ?>
                            <a href=<?php echo wp_strip_all_tags( get_the_permalink() ); ?>> [Mehr Erfahren]</a></p>
                        </li>
                    <?php
                    endwhile;
                else : ?>
                    <p>Erster Post demnächst...</p>
                <?php endif;
                ?>
        </ul>
      </section>

      <section id="clients">
        <h2>Referenzen</h2>
        <div class="container">
          <div class="references">
            <?php
                $count = 0;
                $clients_query = new WP_Query('cat=4&order=ASC&orderby=date&post_per_page=3');
                if ($clients_query->have_posts()) :
                    while ($clients_query->have_posts()) :
                        $clients_query->the_post(); ?>
                        <div class=<?php the_title($before = "article-"); ?>>
                          <div class=<?php the_title($before = "img-"); ?>>    
                            <?php the_post_thumbnail(); ?>
                          </div>
                          <?php if(strcmp(get_the_title(),"vorstand")==0)
                          { ?>
                          <div class= <?php the_title($before = "cite-and-blockquote-");?>>
                          <cite><?php the_content(); ?></cite>
                          <p><?php the_field('position'); ?></p>
                          <blockquote>
                                <?php
                                the_field('zitat');
                                ?>
                            </blockquote>
                          <?php   
                        } else { ?>

                          <div class=<?php the_title($before = "cite-"); ?>> 
                          <cite><?php the_content(); ?></cite>
                          <p><?php the_field('position'); ?></p>
                          </div>
              
                          <div class=<?php the_title($before = "blockquote-"); ?>>
                            <blockquote>
                                <?php
                                the_field('zitat');
                                ?>
                            </blockquote>
                          </div>
                          <?php } ?>
                        </div>

                        <?php if ($count == 1) : ?>
                                <div class="quotationmark">
                                    <img src="<?php echo get_template_directory_uri() . '/images/quotation_mark.svg'; ?>" alt="Quotes" />
                                </div>
                        <?php
                              endif; 
                        $count++;
                    endwhile;
                else : ?>
                    <p>Erste Referenz demnächst...</p>
                <?php endif;
                ?>
            </div>
          </div>
        </section>
        <!-- <div class="container">
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
        </div> -->
      
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
