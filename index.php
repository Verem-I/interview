<!DOCTYPE html>
<html amp lang="en">

<head>
  <meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <title>Hello, AMPs</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <meta property="og:url" content="https://workwolf.com/" />
  <meta property="og:site_name" content="Workwolf" />
  <meta property="article:modified_time" content="2021-12-03T20:20:31+00:00" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:label1" content="Est. reading time" />
  <meta name="twitter:data1" content="10 minutes" />
  <link rel="dns-prefetch" href="//js.hs-scripts.com" />
  <link rel="dns-prefetch" href="//js.hsforms.net" />
  <link rel="dns-prefetch" href="//www.google.com" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect" />
  <link rel="preload" href="https://workwolf.com/wp-content/themes/salient/css/fonts/icomoon.woff?v=1.1" as="font" type="font/woff" crossorigin="anonymous" />
  <link rel="alternate" type="application/json+oembed" href="https://workwolf.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fworkwolf.com%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://workwolf.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fworkwolf.com%2F&amp;format=xml" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
  <link rel="icon" href="https://workwolf.com/wp-content/uploads/2021/07/cropped-favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://workwolf.com/wp-content/uploads/2021/07/cropped-favicon-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://workwolf.com/wp-content/uploads/2021/07/cropped-favicon-180x180.png" />
  <meta name="msapplication-TileImage" content="https://workwolf.com/wp-content/uploads/2021/07/cropped-favicon-270x270.png" />

  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style><noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <style amp-custom>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    scroll-behavior: smooth;
    font-size: 62.5%;
  }

  body {
    font-family: 'Poppins', sans-serif;

  }
    /* animations */
    @keyframes moveInLeft {
      0% {
        opacity: 0;
        transform: translateX(-100px);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes moveInRight {
      0% {
        opacity: 0;
        transform: translateX(150px);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes moveInbottom {
      0% {
        opacity: 0;
        transform: translateY(30px)
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes moveIntop {
      0% {
        opacity: 0;
        transform: translateY(-190px)
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animated-left {
      animation: moveInLeft 1s ease-in;
    }

    .animated-right {
      animation: moveInRight 1s ease-in;
    }

    .animated-bottom {
      animation: moveInbottom 1s ease-in;
    }

    .animated-top {
      animation: moveIntop 1s ease-in;
    }



    a:link,
    a:visited {
      text-decoration: none;
      display: inline-block;
      cursor: pointer;

    }

    ul {
      list-style: none;
    }

    /* utilities and reuseable components*/
    .container {
      width: 100%;
      padding-right: var(--bs-gutter-x, 0.75rem);
      padding-left: var(--bs-gutter-x, 0.75rem);
      margin-right: auto;
      margin-left: auto;
    }

    .d-flex {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .d-flex-2 {
      display: flex;
      gap: 10px;
    }

    .justify-content-space-between {
      justify-content: space-between;
    }

    .hr-img {
      margin: 3.6rem 0;
    }

    .hr-img img {
      width: 12.8rem;

    }

    .align-items-center {
      align-items: center;
    }

    .row {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: calc(-1 * 1.5rem);
      margin-right: calc(-0.5 * 1.5rem);
      margin-left: calc(-0.5 * 1.5rem);
    }

    .row>* {
      flex-shrink: 0;
      width: 100%;
      max-width: 100%;
      padding-right: calc(var(--bs-gutter-x) * 0.5);
      padding-left: calc(var(--bs-gutter-x) * 0.5);
      margin-top: var(--bs-gutter-y);
    }

    .col {
      flex: 1 0 0%;

    }

    .mr-1 {
      margin-right: 1.2rem;
    }

    .mb-1 {
      margin-bottom: 1.2rem;
    }

    .mb-2 {
      margin-bottom: 2.4rem;
    }

    .mb-3 {
      margin-bottom: 4.8rem;
    }

    .heading-tertiary {
      font-size: 2.4rem;
      font-weight: 700;
    }

    .gap-1 {
      gap: 1.6rem;
    }

    .gap-2 {
      gap: 2.4rem;
    }

    .btn,
    .btn:link,
    .btn:visited {
      display: inline-block;
      text-decoration: none;
      font-size: 1.6rem;
      font-weight: 600;
      padding: 1.6rem 3.2rem;
      border-radius: 3px;
      cursor: pointer;
      font-family: inherit;
      transition: all 0.3s;
    }

    .btn:hover {
      transform: translateY(-3px);
    }

    .btn-primary {
      background-color: #d0b08b;
      color: #221f20;
    }

    .btn-secondary {
      border: 2px solid #fff;
      color: #fff;
    }

    .line-bottom {
      margin-top: 4rem;
      border-bottom: 2px solid #d0b08b;
    }

    .light {
      color: #fff;
    }

    .text-primary {
      font-size: 2.4rem;
      max-width: 64rem;
    }

    .text-box {
      margin-bottom: 6.4rem;
    }

    .icon-placeholder {
      display: block;
    }

    .text-secondary {
      max-width: 40rem;
      margin: 0 auto;
      font-size: 2.4rem;
      font-weight: 300;
    }

    .justify-content-center {
      justify-content: center;
    }

    .text-center {
      text-align: center;
    }

    .desc-btn {
      margin-top: 12.8rem;
    }


    .dark-link {
      color: #221f20;
      border-bottom: 1px solid #221f20;
    }

    .heading-primary {
      font-size: 5.2rem;
      font-weight: 700;
    }

    .btn-dark {
      background-color: #221f20;
      color: #fff;
    }

    .dark {
      color: #221f20;
    }

    .text-secondar-2 {
      font-size: 1.6rem;
      color: #fff;
      line-height: 1.6;
    }

    .btn--underline:link,
    .btn--underline:visited {
      color: #d0b08b;
      border-bottom: 2px solid #d0b08b;
      font-size: 2.4rem;
    }

    .text-large {
      font-size: 2.4rem;
      font-weight: 300;
      margin-bottom: 2.4rem;
      line-height: 1.6;
    }

    .inlineblock {
      display: inline-block;
    }

    .mt-lg {
      margin-top: 12.8rem;
    }

    .max-width {
      max-width: 100%;
    }

    .mt-2 {
      margin-top: 2.4rem;
    }

    /* end of utilities */

    /* sections and styles */
    /* testimonial section */
    .testimonial-author {
      font-size: 1.6rem;
    }

    .testimonial-details {
      display: flex;
      gap: 1rem;
      align-items: center;
      margin: 2.40rem 0;
    }

    .testimonial-details .icon img {
      border-radius: 100px;
      object-fit: cover;
      display: inline-block;
      width: 5.5rem;
      text-align: center;
      display: flex;
      justify-content: center;
    }

    /* header section */
    .header__logo {
      width: 12.8rem;
    }

    .nav-list .list a {
      color: #d0b08b;
      font-size: 1.8rem;
      font-weight: 400;
      text-transform: capitalize;
      position: relative;
      transition: all .2s;
    }

    .hero-desc-text {
      background-color: #d0b08b;
      padding: 2.4rem 0;
      font-size: 1.8rem;
    }

    nav {
      background-color: #221f20;
      padding: 2.4rem 0;
      position: fixed;
      top: 0;
      z-index: 111;
      width: 100%;
    }

    section {
      width: 100%;
    }




    /* styles */


    .cto-end {
      padding: 12.8rem 2.4rem;
      background-color: #221f20;

    }



    .hero {
      padding: 12.8rem 2.4rem;
      background: #221f20;
      z-index: 33333333;
    }



    .digital {
      padding: 9.6rem 0;
    }


    .testimonials {
      padding: 9.6rem 2.4rem;
      background-color: #f1ede9;
    }

    .card {
      background-color: #fff;
      padding: 1.6rem 2.4rem;
      margin-right: 1.6rem;
    }

    .about {
      padding: 12.8rem 2.4rem;
      background-color: #221f20;

    }

    .companies {
      padding: 12.8rem 2.4rem;
      background-color: #fff;
    }

    .heading-assistant {
      font-size: 3.6rem;
      margin-bottom: 10px;
      font-weight: 300;
    }

    .privacy {
      padding: 12.8rem 2.4rem;
      background-color: #f1ede9;
    }


    .heading-assistant-2 {
      font-size: 3.6rem;
      font-weight: 300;
      margin-bottom: 2.4rem;
    }

    .heading-primary-2 {
      font-size: 4.4rem;
      margin-bottom: 2.4rem;
    }

    .footer {
      font-size: 1.6rem;
      background: #221f20;
      padding: 12.8rem 2.4rem;
    }

    .footer-text {
      font-size: 1.6rem;
      font-weight: 400;
      color: #d0b08b;
    }

    .lightspeed {
      padding: 9.6rem 2.4rem;
      background-color: #221f20;

    }

    .privacy-logo {
      width: 12.8rem;
      display: inline-block;

    }

    .privacy-card {
      width: 100%;
      padding: 10px;
      margin-right: 10px;
    }

    .privacy-card_head {
      text-align: center;
    }


    .page_item a:link,
    a:visited {
      color: #fff;
    }

    .img-loaded {
      width: 12.8rem;
    }

    /* p>a {
      color: #fff;
    } */


    .footer-logos .img {
      display: block;
      margin: 2.4rem 0;
      width: 12.8rem;
    }

    .line-top {
      border-top: 1px solid rgba(255, 255, 255, .1);
      padding: 2.4rem;
      background: #221f20;
    }

    .copyright {
      font-size: 1.6rem;
      color: #777;
    }

    .copyright>a {
      color: #fff;
      font-weight: 300;
    }
    /* media queries */
    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }

      .col-sm-12 {
        flex: 0 0 auto;
        width: 100%;
      }

    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }

      .col-md-3 {
        flex: 0 0 auto;
        width: 25%;
      }

      .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }

      .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
      }

      .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }

      .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
      }

      .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }

      .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }

      .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
      }

      .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }

      .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }

      .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }

      .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }

      .col-lg-12 {
        flex: 0 0 auto;
        width: 100%;
      }

    }

    @media (max-width: 992px) {
      .hero-desc-text {
        display: none;
      }

      .nav-items {
        display: none;
      }

      .cto {
        display: none;
      }

      .card {
        margin-bottom: 2.5rem;
      }

      div.img-loaded {
        width: 9.8rem;
      }

      .privacy-card {
        margin-bottom: 2.4rem;
      }
    }

    @media (max-width:75em) {
      html {
        font-size: 56.25%;
      }

      .footer-text {
        margin: 2.4rem 0;
      }

      div.img-loaded {
        width: 7.4rem;
      }

    }



    @media (max-width: 576px) {
      html {
        font-size: 50.25%;
      }



      header nav {
        padding: 20px;
      }

      div.img-loaded {
        width: 5.2rem;
      }

      .heading-primary {
        line-height: 1.2;
      }
    }
    @media (max-width: 375px) {
      .btn {
        margin-bottom: 2.4rem;
      }
      div.img-loaded {
        width: 3.6rem;
      }
    }
    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    @media (min-width: 1400px) {
      .container {
        max-width: 1320px;
      }
    }
  </style>
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <div class="container">
        <div class="d-flex justify-content-space-between align-items-center">
          <div class="header__logo">
            <a id="logo" href="https://workwolf.com" data-supplied-ml-starting-dark="false" data-supplied-ml-starting="false" data-supplied-ml="false">
              <amp-img src="https://workwolf.com/wp-content/uploads/2021/07/logo-1.png" alt="Workwolf" class="stnd skip-lazy default-logo dark-version" width="575" height="129" layout="intrinsic"></amp-img>
            </a>
          </div>
          <div class="nav-items">
            <ul class="nav-list d-flex gap-1">
              <li class="list"><a href="#">company</a></li>
              <li class="list"><a href="#">solution</a></li>
              <li class="list"><a href="#">pricing</a></li>
              <li class="list"><a href="#">partners</a></li>
              <li class="list"><a href="#">resources</a></li>
            </ul>
          </div>
          <div class="cto">
            <a href="#" class="btn btn-primary mr-1">Get access</a>
            <a href="#" class="btn btn-secondary">Request a demo</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero-desc-text">
      <div class="container">
        <div class="d-flex justify-content-space-between gap-1">

          <div class="desc__text">Winner of the Manpower Group HR Challenge for “Automating recruitment” at Vivatechnology 2021</div>


          <p style="text-align: right; "><a class="dark-link" href="https://on.workwolf.com/vivatech" target="_blank" rel="noopener">About the award</a></p>

        </div>
      </div>
    </div>
    <section class="hero">
      <div class="container">
        <div class="row gap-1">
          <div class="col-lg-6 col-md-12 animated-left">
            <h1 class="heading-primary light mb-3">Hire fast, hire once</h1>
            <p class="text-primary light mb-3">Blockchain enabled, real-time verification of resume credentials makes wasted time and mis-hires a thing of the past. Never wait for a background check again.</p>
            <div class="hero-buttons">
              <a href="#" class="btn btn-primary mr-1">Get access</a>
              <a href="#" class="btn btn-secondary">Request a demo</a>
            </div>
          </div>
          <div class="col-lg-6">

          </div>
        </div>
      </div>
    </section>

  </header>
  <section class="digital">
    <div class="container">
      <div class="text-box">
        <h2 class="dark heading-primary" style="text-align: center;">The <em>Digital Work Passport</em> makes hiring easy</h2>
      </div>
      <div class="row text-center justify-content-center">
        <div class="col-lg-4 col-md-12 digital-card">
          <span class="icon-placeholder mb-1">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/1.png" alt="1" class="ctl-icon-img ls-is-cached lazyloaded" width="44" height="44" layout="intrinsic"></amp-img>
          </span>
          <h4 class="dark heading-tertiary mb-3"> Enhanced filtration</h4>
          <div class="pull-left mb-2 ">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/filter-enhancement-272x300.png" alt="FILTER ENHANCEMENT" class="story-img left_small wp-post-image ls-is-cached lazyloaded" width="272" height="300" layout="intrinsic" style="width: 115px;
    height: 144px;">
            </amp-img>
          </div>
          <p class="text-secondary">
            Pre-matched candidate pools are categorized and recommended based on your specific job requirements.
          </p>
        </div>
        <div class="col-lg-4 col-md-12 digital-card">
          <span class="icon-placeholder mb-1">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/2.png" alt="2" class="ctl-icon-img ls-is-cached lazyloaded" width="44" height="44" layout="intrinsic"></amp-img>
          </span>
          <h4 class="dark heading-tertiary mb-3"> Optimized verification</h4>
          <div class="pull-left mb-2">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/verify.png" alt="Verify" class="story-img left_small wp-post-image ls-is-cached lazyloaded" width="115" height="144" layout="intrinsic">
            </amp-img>

          </div>
          <p class="text-secondary">
            Credentials are authenticated before a job offer, reducing candidate drop-off and speeding time to hire.

          </p>
        </div>
        <div class="col-lg-4 col md-12 digital-card">
          <span class="icon-placeholder mb-1">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/3.png" alt="3" class="ctl-icon-img ls-is-cached lazyloaded" width="44" height="44" layout="intrinsic"></amp-img>
          </span>
          <h4 class="dark heading-tertiary mb-3"> Better talent access</h4>
          <div class="pull-left mb-2">
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/review.png" alt="Review" class="story-img left_small wp-post-image ls-is-cached lazyloaded" width="115" height="144" layout="intrinsic">
            </amp-img>

          </div>
          <p class="text-secondary mb-2">
            Pre-matched candidate pools are categorized and recommended based on your specific job requirements.
          </p>
        </div>
      </div>
      <div class="desc-btn text-center


      ">
        <a href="#" class="btn btn-dark">More About Our Solutions</a>
      </div>
    </div>
  </section>
  <section class="testimonials">
    <div class="container">
      <div class="text-box">
        <h2 class="dark heading-primary" style="text-align: center;">HR leaders who love our tech</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="card animated-left">
            <div class="hr-img">
              <amp-img class="img-with-animation skip-lazy nectar-lazy loaded" data-delay="0" height="112" width="294" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/08/javelin.png" alt="Javelin" layout="intrinsic">
            </div>
            <div class="testimonial-text">
              <p class="text-primary">“Workwolf will transform the way we conduct recruiting. I love how their Digital Work Passport helps to identify and qualify top talent while saving time and money.”</p>
            </div>
            <div class="testimonial-details">
              <div class="icon mb-1">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/07/charmaine-thomas-300x300.jpeg" width="150" height="150" alt="Charmaine Thomas" layout="intrinsic">
              </div>
              <div class="testimonial-author-text">
                <p class="testimonial-author">
                  <strong>Charmaine Thomas</strong><br />
                  HR Manager
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">

          <div class="card animated-top">
            <div class="hr-img">
              <amp-img class="img-with-animation skip-lazy nectar-lazy loaded" data-delay="0" height="112" width="294" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/08/dentsply-sirona.png" alt="Dentslply Sirona"
                layout="intrinsic"></amp-img>
            </div>
            <div class="testimonial-text">
              <p class="text-primary dark">“The Digital Work Passport is a game changer. It delivers efficiency, better filtration, faster verification, and a better experience for our candidates.”</p>
            </div>
            <div class="testimonial-details">
              <div class="icon mb-1">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/07/eva-hajtko-300x300.jpeg" width="150" height="150" alt="Eva Hajtko" layout="intrinsic"></amp-img>
              </div>
              <div class="testimonial-author-text">
                <p class="testimonial-author">
                  <strong>Charmaine Thomas</strong><br />
                  HR Manager
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card animated-right">
            <div class="hr-img">
              <amp-img class="img-with-animation skip-lazy nectar-lazy animated-in loaded" data-delay="0" height="112" width="294" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/10/magnus_hr_solutions.png"
                alt="Magnus HR Solutions" layout="intrinsic"></amp-img>
            </div>
            <div class="testimonial-text">
              <p class="text-primary">“The Digital Work Passport is a game changer. It delivers efficiency, better filtration, faster verification, and a better experience for our candidates.”</p>
            </div>
            <div class="testimonial-details">
              <div class="icon mb-1">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/kimberly-lima-300x300.jpg" width="150" height="150" alt="Kimberly Lima" layout="intrinsic"></amp-img>
              </div>
              <div class="testimonial-author-text">
                <p class="testimonial-author">
                  <strong>Eva Hajtko</strong><br />
                  Human Resources Leader
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="row ">
        <div class="col-lg-7 col-md-12 animated-left">
          <h1 class="heading-primary light mb-3">Reduce your time to hire</h1>
          <p class="text-primary light mb-3">We’ve developed a network that connects both professionals and employers to hundreds of thousands of credential issuers, making it easy to verify resume content in real time.</p>
          <div class="hero-buttons">
            <a href="#" class="btn btn-primary mr-1">Watch Now</a>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 ">
          <div class="max-width">
            <a href="https://youtu.be/iBAHrvjPW2s" class="full-link" data-fancybox=""></a>
            <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/Captura-de-Pantalla-2021-08-03-a-las-01.32.25.png" alt="video preview" class="nectar-lazy loaded" width="575" height="350" layout="responsive"></amp-img>

          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="companies">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center gap-1">
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/magnus-hrs.png" alt="Magnus HRS" class="nectar-lazy loaded" width="258" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/gtan.png" alt="GTAN" width="240" height="67" class="nectar-lazy loaded" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/dentsply-sirona-1.png" alt="Dentsply Sirona" class="nectar-lazy loaded" width="224" height="67" layout="intrinsic"></amp-img>
        </div>

        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/citus.png" alt="Citus" class="nectar-lazy loaded" width="212" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/austin-film-festival.png" alt="Austin Film Festival" class="nectar-lazy loaded" width="179" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/javelin-1.png" alt="Javelin" class="nectar-lazy loaded" width="176" height="67" layout="intrinsic"></amp-img>
        </div>
      </div>
    </div>
  </section>
  <section class="lightspeed">
    <div class="container">
      <div class="text-box">
        <h2 class="heading-primary light text-center">
          Why we’re growing at light speed
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="privacy-card animated-left">
            <div class="privacy-card_head">
              <div class="privacy-logo text-center">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/10/created-by-hr-leaders.png" alt="Created by HR leaders" class="img-with-animation skip-lazy nectar-lazy loaded" width="374" height="374" layout="intrinsic"></amp-img>
              </div>
              <h4 class="heading-assistant-2 light">Created by HR leaders</h4>
            </div>
            <p class="text-large  light">
              You can only put a band-aid on a broken process for so long until a company comes along and develops an innovation so powerful, that it transforms a market.
            </p>
            <p class="text-large mb-2 light">A platform needed to be built that would automate the most time consuming steps of the recruitment process.</p>
            <div class="button">
              <a href="https://workwolf.com/solutions-employers-recruiters/" class="btn--underline">Learn About Workwolf</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="privacy-card animated-bottom">
            <div class="privacy-card_head">
              <div class="privacy-logo text-center">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/10/your-ats-only-better.png" alt="Your ATS, only better" class="img-with-animation skip-lazy nectar-lazy loaded" width="374" height="374" layout="intrinsic"></amp-img>
              </div>
              <h4 class="heading-assistant-2 light">Your ATS, only better</h4>
            </div>
            <p class="text-large light">
              eep your HR software, just make it more powerful. Workwolf ‘plugs in’ to your existing system and enables verification like never before.
            </p>
            <p class="text-large mb-2 light">
              Add intelligent predictive analytics to match job applicant soft skills to open job requirements. Then, rank and verify your top candidates long before a job offer.
            </p>
            <div class="button">
              <a href="https://workwolf.com/soft-skills-assessment/" class="btn--underline">Learn About Pack<em>finder</em></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="privacy-card animated-right">
            <div class="privacy-card_head">
              <div class="privacy-logo text-center">
                <amp-img src="https://workwolf.com/wp-content/uploads/2021/10/globally-recognized.png" alt="Globally recognized" class="img-with-animation skip-lazy nectar-lazy loaded" width="374" height="374" layout="intrinsic"></amp-img>
              </div>
              <h4 class="heading-assistant-2 light">Globally recognized</h4>
            </div>
            <p class="text-large light">
              Work has shifted forever and we need new technology to support the speed of change and the risks associated with remote workforces.
            </p>
            <p class="text-large mb-2 light">
              Recognized globally for the commercial use of blockchain in Talent Acquisition, Workwolf technology transforms how data is accessed, secured and managed.
            </p>
            <div class="button">
              <a href="https://workwolf.com/solutions-employers-recruiters/" class="btn--underline">Learn About How it Works</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="companies">
    <div class="container">
      <div class="text-box">
        <h1 class="heading-primary dark text-center">Workwolf integrates easily with your ATS & HRIS</h1>
      </div>
      <div class="d-flex align-items-center justify-content-center gap-1">
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/magnus-hrs.png" alt="Magnus HRS" class="nectar-lazy loaded" width="258" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/gtan.png" alt="GTAN" width="240" height="67" class="nectar-lazy loaded" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/dentsply-sirona-1.png" alt="Dentsply Sirona" class="nectar-lazy loaded" width="224" height="67" layout="intrinsic"></amp-img>
        </div>

        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/citus.png" alt="Citus" class="nectar-lazy loaded" width="212" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/austin-film-festival.png" alt="Austin Film Festival" class="nectar-lazy loaded" width="179" height="67" layout="intrinsic"></amp-img>
        </div>
        <div class="no-link img-loaded">
          <amp-img src="https://workwolf.com/wp-content/uploads/2021/08/javelin-1.png" alt="Javelin" class="nectar-lazy loaded" width="176" height="67" layout="intrinsic"></amp-img>
        </div>
      </div>
      <div class="

      desc-btn text-center">
        <a href="#" class="btn btn-dark">
          Check our integration
        </a>
      </div>
    </div>
  </section>
  <section class=" privacy">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <h2 class="heading-primary-2 dark">Privacy, Security, Compliance?</h2>
          <h4 class="heading-assistant-2">WE GOT THIS</h4>
          <p class="text-large">We partner with the same trusted verification sources used today by fortune 500 employers. The difference is we’ve dramatically improved the security, data pathway and permission protocol by leveraging blockchain
            technology.</p>
          <p class="text-large">
            Previously available only through background checkers, candidates can now provide recruiters and employers the same quality of verified credentials through their Digital Work Passport, and… they can do it instantly.
          </p>

        </div>

        <div class="col-lg-4 col-md-12 d-flex-2 align-items-center justify-content-center">
          <amp-img class="img-with-animation skip-lazy nectar-lazy loaded" data-delay="500" height="370" width="450" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo.png" alt="PBSA"
            sizes="(max-width: 450px) 100vw, 450px" style=""
            srcset="https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo.png 450w, https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo-150x150@2x.png 300w, https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo-380x312.png 380w, https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo-100x100@2x.png 200w, https://workwolf.com/wp-content/uploads/2021/10/pbsa-logo-140x140@2x.png 280w"
            layout="intrinsic">
          </amp-img>
          <amp-img class="img-with-animation skip-lazy nectar-lazy loaded animated-in" data-delay="760" height="370" width="450" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc.png" alt="AICPA SOC"
            sizes="(max-width: 450px) 100vw, 450px" style=""
            srcset="https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc.png 450w, https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc-150x150@2x.png 300w, https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc-380x312.png 380w, https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc-140x140@2x.png 280w, https://workwolf.com/wp-content/uploads/2021/10/logo-aicpa-soc-100x100@2x.png 200w"
            layout="intrinsic">
            </apm-img>
        </div>
      </div>
    </div>
  </section>
  <section class="cto-end">
    <div class="container">
      <div class="text-box text-center">
        <span class="heading-assistant light">LESS WORK, BETTER RESULTS</span>
        <h2 class="heading-primary light">Welcome to a new era of hiring</h2>
      </div>
      <div class="cto2 text-center">
        <a href="https://keyc.adm.workwolf.com/auth/realms/workwolf/protocol/openid-connect/registrations?client_id=workwolf-frontend&amp;response_type=code&amp;scope=openid%20email&amp;redirect_uri=https://app.front.workwolf.com/login&amp;kc_locale=en"
          class="btn btn-primary mr-1">Get access</a>
        <a href="https://meetings.hubspot.com/stephen510/book-a-demo?__hstc=266315472.ca6286e1b703964242368847b5f9f2d5.1638285724292.1638802739989.1638969506783.12&amp;__hssc=266315472.4.1638969506783&amp;__hsfp=4177530735"
          class="btn btn-secondary">Request a demo</a>
      </div>
      <div class="text-center  mt-lg">
        <amp-img class="img-with-animation skip-lazy nectar-lazy loaded" data-delay="0" height="282" width="112" data-animation="fade-in" src="https://workwolf.com/wp-content/uploads/2021/12/unleash-the-power-of-truth.png"
          alt="Unleash the power of truth" style=""></amp-img>
      </div>
      <div class="line-bottom"></div>
    </div>
  </section>
  <footer class="foot">
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <h4 class="footer-text mb-1">Company</h4>
            <div class="textwidget">
              <ul>
                <li class="page_item page-item-2273"><a href="https://workwolf.com/about-us/">About us</a></li>
                <li class="page_item page-item-2353"><a href="https://workwolf.com/careers/">Careers</a></li>
                <li class="page_item"><a href="https://workwolf.com/contact-us/">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="mb-2">
              <h4 class="footer-text mb-2">Solutions</h4>
              <div class="textwidget">
                <ul>
                  <li class="page_item"><a href="https://workwolf.com/solutions-employers-recruiters/">Employers &amp; recruiters</a></li>
                  <li class="page_item"><a href="https://workwolf.com/solutions-professionals-job-seekers/">Professionals &amp; job seekers</a></li>
                  <li class="page_item"><a href="https://workwolf.com/soft-skills-assessment/">Soft skills assessment</a></li>
                </ul>
              </div>
            </div>
            <h4 class="footer-text mb-1">Resources</h4>
            <div class="textwidget">
              <ul>
                <li class="page_item page-item-1032"><a href="https://workwolf.com/blog/">Blog</a></li>
                <li class=" page_item"><a href="https://workwolf.com/news-insights/">News &amp; Insights</a></li>
                <li class="page_item"><a href="https://workwolf.com/faq/">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="mb-2">
              <h4 class="footer-text mb-1">Pricing</h4>
              <div class="textwidget">
                <ul>
                  <li class="page_item"><a href="https://workwolf.com/plans-for-employers-recruiters/">Employers &amp; recruiters</a></li>
                  <li class="page_item"><a href="https://workwolf.com/plans-for-employers-recruiters/">Professionals &amp; job seekers</a></li>
                </ul>
              </div>
            </div>
            <h4 class="footer-text mb-1">Partners</h4>
            <div class="textwidget">
              <ul>
                <li class="page_item"><a href="https://workwolf.com/clients/">Clients</a></li>
                <li class="page_item page-item-1392"><a href="https://workwolf.com/integrations/">Integrations</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div id="zoom-social-icons-widget-2  " class="widget zoom-social-icons-widget mt-2">
              <ul class="zoom-social-icons-list zoom-social-icons-list--with-canvas zoom-social-icons-list--square zoom-social-icons-list--no-labels">
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://www.linkedin.com/company/workwolf/" target="_blank">
                    <span class="screen-reader-text">linkedin</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-linkedin" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://www.facebook.com/workwolf.inc" target="_blank">
                    <span class="screen-reader-text">facebook</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-facebook" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://twitter.com/workwolf_" target="_blank">
                    <span class="screen-reader-text">twitter</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-twitter" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://www.instagram.com/workwolf.inc" target="_blank">
                    <span class="screen-reader-text">instagram</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-instagram" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://www.youtube.com/channel/UCQ2GFu8hEhrp5CEfcAc4R3g" target="_blank">
                    <span class="screen-reader-text">youtube</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-youtube" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
                <li class="zoom-social_icons-list__item">
                  <a class="zoom-social_icons-list__link" href="https://open.spotify.com/show/5MheCETRDf8VDw0qd4xf0A" target="_blank">
                    <span class="screen-reader-text">spotify</span> <span class="zoom-social_icons-list-span social-icon socicon socicon-spotify" data-hover-rule="background-color" data-hover-color="#d0b08b"></span>
                  </a>
                </li>
              </ul>
            </div>
            <div id="text-2" class="widget widget_text">
              <div class="textwidget">
                <div class="footer-logos">
                  <amp-img class="img soc2" src="https://cdn.drata.com/badge/soc2-light.png" width="120" height="123" width="150" height="150"></amp-img>
                  <amp-img src="https://workwolf.com/wp-content/uploads/2021/07/logo-workwolf-white.png" alt="Logo" class="img alignnone size-full wp-image-2384 lazyloaded" width="150" height="33" layout="intrinsic"></amp-img><br />
                </div>
                <p class="text-secondary-2 light">

                  866 The Queensway, Suite 200<br />
                  Etobicoke, Ontario, M8Z 1N7 Canada<br />
                  <i class="fa fa-phone" aria-hidden="true"></i> <a class="light" href="tel:+18884022003">+1 888-402-2003</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" line-top">
      <div class="container">
        <p class="copyright">
          © 2021 Workwolf. <a href="https://workwolf.com/policy/">Privacy policy</a> | <a href="https://workwolf.com/terms/">Terms &amp; Conditions</a> |
          <a href="https://workwolf.com/data-privacy-notice/">Data privacy notice</a>
        </p>
      </div>
    </div>
  </footer>


</body>

</html>
