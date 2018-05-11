<?php
/*
  Template Name: Home Page
 */

// CUSTOM FIELDS
$prelaunch_price  = get_post_meta(9,'prelaunch_price',true);
$launch_price  = get_post_meta(9,'launch_price',true);
$final_price  = get_post_meta(9,'final_price',true);

$course_url = get_post_meta(9, 'course_url', true);
$button_text = get_post_meta(9, 'button_text', true);
$optin_text = get_post_meta(9, 'optin_text', true);
$optin_button_text = get_post_meta(9, 'optin_button_text', true);

get_header();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" conten="ie-edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">

    <title>Natours | Exciting tours for adventurous people</title>
  </head>
  <body>
    <header class="header">
      <div class="header__logo-box">
        <!-- div is wrapper because img is an inline element - position the container to positon img -->
        <img src="./img/logo-white.png" alt="Logo" class='header__logo'>
      </div>
      <div class="header__text-box">
        <h1 class="heading-primary">
          <span class="heading-primary--main">Outdoors</span><span class="heading-primary--sub"> is where life happens</span>
        </h1>
        <a href="#" class="btn btn--white btn--animated">Discover Our Tours</a>
      </div>
    </header>

    <main>
      <section class="section-about">
        <div class="utl-center-text utl-margin-bottom-md">
          <h2 class="heading-secondary">
            Exciting tours for adventurous people
          </h2>
        </div>

        <div class="row">
          <div class="col-1-of-2">
            <h3 class="heading-tertiary utl-margin-bottom-sm">Your going to fall in love with nature</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque dolor cum ex adipisci dignissimos tempore vel tenetur eveniet ad? Voluptatem error nobis non, a odio voluptates quae eaque dolorem adipisci?
            </p>

            <h3 class="heading-tertiary utl-margin-bottom-sm">Live adventures like you never have before</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ea, pariatur, dolor autem nobis fugit hic natus ex esse totam beatae sed facilis deleniti ipsam eaque, quia consequatur necessitatibus quae.
            </p>

            <a href="#" class="btn-text">Learn more &rarr;</a>
          </div>
          <div class="col-1-of-2">
            <div class="composition">
              <img src="img/nat-1-large.jpg" alt="" class="composition__photo composition__photo--p1">
              <img src="img/nat-2-large.jpg" alt="" class="composition__photo composition__photo--p2">
              <img src="img/nat-3-large.jpg" alt="" class="composition__photo composition__photo--p3">
            </div>
          </div>
        </div>
      </section>

      <section class="section-features">
        <div class="row">
          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-world"></i>
              <h3 class="heading-tertiary utl-margin-bottom-sm">Explore the world</h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reiciendis enim vitae quo culpa voluptates, eius saepe ex earum, nostrum molestias voluptatibus nam possimus blanditiis sapiente. A cupiditate, eveniet tempora?
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-compass"></i>
              <h3 class="heading-tertiary utl-margin-bottom-sm">Meet nature</h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reiciendis enim vitae quo culpa voluptates, eius saepe ex earum, nostrum molestias voluptatibus nam possimus blanditiis sapiente. A cupiditate, eveniet tempora?
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-map"></i>
              <h3 class="heading-tertiary utl-margin-bottom-sm">Find your way</h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reiciendis enim vitae quo culpa voluptates, eius saepe ex earum, nostrum molestias voluptatibus nam possimus blanditiis sapiente. A cupiditate, eveniet tempora?
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-heart"></i>
              <h3 class="heading-tertiary utl-margin-bottom-sm">Live a healthier life</h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reiciendis enim vitae quo culpa voluptates, eius saepe ex earum, nostrum molestias voluptatibus nam possimus blanditiis sapiente. A cupiditate, eveniet tempora?
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-tours">
        <div class="utl-center-text utl-margin-bottom-md">
          <h2 class="heading-secondary">
            Most Popular Tours
          </h2>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">
                  &nbsp
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">
                    The Sea Explorer
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 day tour</li>
                    <li>Up to 30 pepole</li>
                    <li>2 tour guides</li>
                    <li>Sleep in cozy hotels</li>
                    <li>Difficulty: easy</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">
                      Only
                    </p>
                    <p class="card__price-value">
                      $297
                    </p>
                  </div>
                  <a href="#" class="btn btn--white">Book now!</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--2">
                  &nbsp
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--2">
                    The Forest Hiker
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>7 day tour</li>
                    <li>Up to 40 pepole</li>
                    <li>6 tour guides</li>
                    <li>Sleep in provided tents</li>
                    <li>Difficulty: medium</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--2">
back
              </div>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--3">
                  &nbsp
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--3">
                    The Snow Adventurer
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>5 day tour</li>
                    <li>Up to 15 pepole</li>
                    <li>3 tour guides</li>
                    <li>Sleep in provided tents</li>
                    <li>Difficulty: hard</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--3">
back
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- <section class="test-grid">
      <div class="row">
        <div class="col-1-of-2">
          col 1 of 2
        </div>
        <div class="col-1-of-2">
          col 1 of 2
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-3">
          col 1 of 3
        </div>
        <div class="col-1-of-3">
          col 1 of 3
        </div>
        <div class="col-1-of-3">
          col 1 of 3
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-3">
          col 1 of 3
        </div>
        <div class="col-2-of-3">
          col 2 of 3
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-1-of-4">
          col 1 of 4
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-2-of-4">
          col 2 of 4
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-3">
          col 1 of 3
        </div>
        <div class="col-2-of-3">
          col 2 of 3
        </div>
      </div>
      <div class="row">
        <div class="col-1-of-4">
          col 1 of 4
        </div>
        <div class="col-3-of-4">
          col 3 of 4
        </div>
      </div>
    </section> -->

  </body>
</html>


<?php
get_footer();
