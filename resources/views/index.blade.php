<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Find a match quickly with anime lovers, gamers, cosplayers and Japan fans here on Kimono dating"
    />
    <meta property="og:title" content="Kimono Dating" />
    <meta
        property="og:description"
        content="The dating website for anime lovers, gamers, cosplayers and Japan fans"
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="images/anime-couple-banner.png" />
    <meta property="og:url" content="http://kimonodating.com" />
    <title>Kimono Dating</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset("css/styles.css")}}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<header>
    <nav class="nav collapsible">
        <a aria-label="Kimono Dating" class="nav__brand" href="/"
        ><img src="images/kimono-dating-logo.png" alt="A heart shaped logo"
            /></a>
        <svg class="icon icon--white nav__toggler">
            <use href="images/sprite.svg#menu"></use>
        </svg>
        <ul class="list nav__list collapsible__content">
            <li class="nav__item"><a href="#">About</a></li>
            <li class="nav__item"><a href="#">Success Stories</a></li>
            <li class="nav__item"><a href="#">Login</a></li>
            <li class="nav__item"><a href="#">Register</a></li>
        </ul>
    </nav>
</header>
<section class="block block--dark block--skewed-left hero">
    <div class="container grid grid--1x2">
        <header class="block__header hero__content">
            <h1 class="block__heading" data-aos="zoom-in-up">True love</h1>
            <h2 data-aos="zoom-in-up">on Kimono Dating</h2>
            <p class="hero__tagline" data-aos="zoom-in-up">
                So let's get started!
            </p>
            <a href="" class="btn btn--accent btn--stretched">Register Now</a>
        </header>
        <picture data-aos="zoom-in">
            <source type="image/webp" srcset="images/anime-couple-banner.webp" />
            <source type="image/png" srcset="images/anime-couple-banner.png" />
            <img class="hero__image" src="images/anime-couple-banner.png" alt=""
            /></picture>
    </div>
</section>
<section class="block container block-sticker" data-aos="zoom-in-up">
    <header class="block__header">
        <h2>Boost up your conversations and make it more engaging</h2>
        <p>Extra anime chat stickers for only €10 per month</p>
    </header>
    <div class="input-group">
        <input
            aria-label="Stickers"
            type="text"
            class="input"
            placeholder="Search for sticker packs"
        />
        <button class="btn btn--accent">
            Search
            <svg class="icon icon--white">
                <use href="images/sprite.svg#search"></use>
            </svg>
        </button>
    </div>
    <ul class="list block-sticker__prices">
        <li><span class="badge badge--secondary">Boruto</span></li>
        <li>Pokémon</li>
        <li>SAO</li>
        <li>Memes</li>
    </ul>
</section>
<section class="block container block-plans" data-aos="fade-up">
    <div class="grid grid--1x3">
        <div class="plan">
            <div class="card card--secondary">
                <header class="card__header">
                    <h3 class="plan__name">Kimono Dating Basic</h3>
                    <span class="plan__price">€14</span>
                    <span class="plan__billing-cycle">/month</span>
                    <span class="badge badge--secondary badge--badge--small"
                    >10% OFF</span
                    >
                    <span class="plan__description">Start your love life</span>
                </header>
                <div class="card__body">
                    <ul class="list list--tick">
                        <li class="list__item">Partner Matching</li>
                        <li class="list__item">The Love of Your Life</li>
                        <li class="list__item">1000+ singles</li>
                        <li class="list__item">Dating in The Netherlands</li>
                    </ul>
                    <button class="btn btn--outline btn--block">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="plan plan--popular">
            <div class="card card--primary">
                <header class="card__header">
                    <h3 class="plan__name">Kimono Dating Basic</h3>
                    <span class="plan__price">€14</span>
                    <span class="plan__billing-cycle">/month</span>
                    <span class="badge badge--primary badge--badge--small"
                    >10% OFF</span
                    >
                    <span class="plan__description">Start your love life</span>
                </header>
                <div class="card__body">
                    <ul class="list list--tick">
                        <li class="list__item">Partner Matching</li>
                        <li class="list__item">The Love of Your Life</li>
                        <li class="list__item">1000+ singles</li>
                        <li class="list__item">Dating in The Netherlands</li>
                    </ul>
                    <button class="btn btn--outline btn--block">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="plan">
            <div class="card card--secondary">
                <header class="card__header">
                    <h3 class="plan__name">Kimono Dating Basic</h3>
                    <span class="plan__price">€14</span>
                    <span class="plan__billing-cycle">/month</span>
                    <span class="badge badge--secondary badge--badge--small"
                    >10% OFF</span
                    >
                    <span class="plan__description">Start your love life</span>
                </header>
                <div class="card__body">
                    <ul class="list list--tick">
                        <li class="list__item">Partner Matching</li>
                        <li class="list__item">The Love of Your Life</li>
                        <li class="list__item">1000+ singles</li>
                        <li class="list__item">Dating in The Netherlands</li>
                    </ul>
                    <button class="btn btn--outline btn--block">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block container">
    <header class="block__header">
        <h2>Our Matching System</h2>
        <p>
            Find a match quickly with anime lovers, gamers, cosplayers and Japan
            fans here on Kimono dating
        </p>
    </header>
    <article class="grid grid--1x2 feature">
        <div class="feature__content" data-aos="zoom-in-up">
          <span class="icon-container">
            <svg class="icon icon--primary">
              <use href="images/one.svg#one"></use>
            </svg>
          </span>
            <h3 class="feature__heading">
                Imagine a date with someone who shares your deepest interests
            </h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam
                tempore quam quasi repudiandae dolorum explicabo autem. Amet
                molestiae incidunt ut!
            </p>
            <a href="#" class="link-arrow">How it works</a>
        </div>
        <picture data-aos="zoom-in-up">
            <img
                class="feature__image"
                src="images/anime-daydreaming.gif"
                alt="A shy anime girl texting"
            />
        </picture>
    </article>
    <article class="grid grid--1x2 feature">
        <div class="feature__content" data-aos="fade-up">
          <span class="icon-container">
            <svg class="icon icon--primary">
              <use href="images/two.svg#two"></use>
            </svg>
          </span>
            <h3 class="feature__heading">Create an account on Kimono Dating</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam
                tempore quam quasi repudiandae dolorum explicabo autem. Amet
                molestiae incidunt ut!
            </p>
            <a href="#" class="link-arrow">How it works</a>
        </div>
        <picture data-aos="zoom-in-left">
            <img
                class="feature__image"
                src="images/anime-reading-text.gif"
                alt="A shy anime girl texting"
            />
        </picture>
    </article>
    <article class="grid grid--1x2 feature">
        <div class="feature__content" data-aos="fade-up">
          <span class="icon-container">
            <svg class="icon icon--primary">
              <use href="images/three.svg#three"></use>
            </svg>
          </span>
            <h3 class="feature__heading">And you are ready to go!</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam
                tempore quam quasi repudiandae dolorum explicabo autem. Amet
                molestiae incidunt ut!
            </p>
            <a href="#" class="link-arrow">How it works</a>
        </div>
        <picture data-aos="zoom-in-up">
            <img
                class="feature__image"
                src="images/anime-excited.gif"
                alt="A shy anime girl texting"
            />
        </picture>
    </article>
</section>

<section class="block block--dark block--skewed-right block-showcase">
    <header class="block__header">
        <h2>Start making matches and have a fun chat!</h2>
    </header>
    <div class="container grid grid--1x2">
        <!-- TODO: Change image to screenshot of the back-end -->
        <picture class="block-showcase__image" data-aos="fade-right">
            <img src="images/ipad.png" alt=""
            /></picture>
        <ul class="list" data-aos="fade-up">
            <li>
                <div class="media">
                    <div class="media__image">
                        <svg class="icon icon--primary">
                            <use href="images/sprite.svg#snap"></use>
                        </svg>
                    </div>
                    <div class="media__body">
                        <h3 class="media__title">Why Kimono Dating?</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellendus consequatur, tenetur veritatis modi ipsum quia
                            quis voluptatum quibusdam magni assumenda!
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media__image">
                        <svg class="icon icon--primary">
                            <use href="images/sprite.svg#snap"></use>
                        </svg>
                    </div>
                    <div class="media__body">
                        <h3 class="media__title">Why Kimono Dating?</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellendus consequatur, tenetur veritatis modi ipsum quia
                            quis voluptatum quibusdam magni assumenda!
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media__image">
                        <svg class="icon icon--primary">
                            <use href="images/sprite.svg#snap"></use>
                        </svg>
                    </div>
                    <div class="media__body">
                        <h3 class="media__title">Why Kimono Dating?</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellendus consequatur, tenetur veritatis modi ipsum quia
                            quis voluptatum quibusdam magni assumenda!
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="block" data-aos="zoom-in">
    <header class="block__header">
        <h2>What our users are saying</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, ea?
        </p>
    </header>
    <div class="container">
        <div class="card testimonial">
            <div class="grid grid--1x2">
                <div class="testimonial__image">
                    <img
                        src="images/stevie-testimonial.jpg"
                        alt="A happy, smiling customer"
                    />
                    <span class="icon-container icon-container--accent">
                <svg class="icon icon--white icon--small">
                  <use href="images/sprite.svg#quotes"></use>
                </svg>
              </span>
                </div>
                <blockquote class="quote">
                    <p class="quote__text">I'm <del>un</del>happy.</p>
                    <footer>
                        <div class="media">
                            <div class="media__image">
                                <svg class="icon icon--primary quote__line">
                                    <use href="images/sprite.svg#line"></use>
                                </svg>
                            </div>
                            <div class="media__body">
                                <h3 class="media__title quote__author">Stevie Lulofs</h3>
                                <p class="quote__organization">Coolblue</p>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="callout callout--accent callout-signup">
        <div class="grid grid--1x2">
            <div class="callout__content">
                <h2 class="callout__heading">Ready to Get Started?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi
                    voluptate tempora qui distinctio consequatur aliquid pariatur
                    cupiditate quas cum fugit.
                </p>
            </div>
            <a
                target="_blank"
                href="http://www.kimonodating.com"
                class="btn btn--call-to-action btn--stretched"
            >Get Started</a
            >
        </div>
    </div>
</div>

<footer class="block block--dark footer">
    <div class="container grid footer__sections">
        <section class="collapsible collapsible--expanded footer__section">
            <div class="collapsible__header">
                <h2 class="collapsible__heading footer__heading">Legal</h2>
                <svg class="icon icon--white collapsible__chevron">
                    <use href="images/sprite.svg#chevron"></use>
                </svg>
            </div>
            <div class="collapsible__content">
                <ul class="list">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Conditions</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </section>
        <section class="collapsible footer__section">
            <div class="collapsible__header">
                <h2 class="collapsible__heading footer__heading">Careers</h2>
                <svg class="icon icon--white collapsible__chevron">
                    <use href="images/sprite.svg#chevron"></use>
                </svg>
            </div>
            <div class="collapsible__content">
                <ul class="list">
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Internships</a></li>
                    <li><a href="#">Charity Work</a></li>
                </ul>
            </div>
        </section>

        <section class="collapsible footer__section">
            <div class="collapsible__header">
                <h2 class="collapsible__heading footer__heading">Social</h2>
                <svg class="icon icon--white collapsible__chevron">
                    <use href="images/sprite.svg#chevron"></use>
                </svg>
            </div>
            <div class="collapsible__content">
                <ul class="list">
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
        </section>
        <div class="footer__brand">
            <img src="images/kimono-dating-logo.png" alt="" />
            <div class="footer__copyright">
                &copy; 2021 Kimono Dating. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
