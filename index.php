<?php
// Start the session
session_start();

 require "include/header.php";
 require "include/DbConnect.php";

 $sql = "SELECT * FROM project_info WHERE name IN ('Instant Solar', 'Gondo Skills Institute', 'Webkors')";
 $result = $conn->query($sql);

 ?>
    <!-- <section class="preloader">
      <div class="spinner">
        <span class="sk-inner-circle"></span>
      </div>
    </section> -->

      <section class="slick-slideshow">
        <div class="slick-custom">
          <img
            src="/images/slideshow/medium-shot-business-women-high-five.jpeg"
            class="img-fluid"
            alt=""
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h2 class="slick-title">HEY THERE</h2>

                  <p class="lead text-white mt-lg-3 mb-lg-5" style="color: #fff; font-weight: 500;">
                   <strong> I'M THABANI STEVE MATSHAZI<br> <small style="font-size: 21px; color:#f5f5f5;">A PHP/Worpdress Developer</small></strong>
                  </p>

                  <a href="/#aboutMeSection" class="btn custom-btn"
                    >More about Me</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="slick-custom">
          <img
            src="images/phpHeroSection.jpeg"
            class="img-fluid"
            alt=""
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h1 class="slick-title">A PHP Developer</h1>

                  <p class="lead text-white mt-lg-3 mb-lg-5" style="color: #fff; font-weight: 500;">
                    Your go-to PHP maestro for crafting dynamic online
                    experiences.
                  </p>

                  <a href="product.html" class="btn custom-btn"
                    >Explore My Projects</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slick-custom">
          <img
            src="images/slideshow/worpdress-dev.jpeg"
            class="img-fluid"
            alt=""
            height="100%"
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h1 class="slick-title">A Wordpress Developer</h1>

                  <p class="lead text-white mt-lg-3 mb-lg-5" style="color: #fff; font-weight: 500;">
                    Your go-to PHP maestro for crafting dynamic online
                    experiences.
                  </p>

                  <a href="contact.html" class="btn custom-btn">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </section>

      <section class="about section-padding" id="aboutMeSection">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="mb-5">A Little <span>About Me</span></h2>
            </div>

            <div class="col-lg-2 col-12 mt-auto mb-auto">
              <ul
                class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                  >
                    Introduction
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-youtube-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-youtube"
                    type="button"
                    role="tab"
                    aria-controls="pills-youtube"
                    aria-selected="true"
                  >
                    Capabilities
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-skill-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-skill"
                    type="button"
                    role="tab"
                    aria-controls="pills-skill"
                    aria-selected="false"
                  >
                    Learnt Skills
                  </button>
                </li>
              </ul>
            </div>

            <div class="col-lg-10 col-12">
              <div class="tab-content mt-2" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-home"
                  role="tabpanel"
                  aria-labelledby="pills-home-tab"
                >
                  <div class="row">
                    <h4 class="mb-3 text-center">
                      I'm <span><strong>Thabani Steve Matshazi</strong></span> 
                    </h4>
                    <div class="col-lg-7 col-12">
                      <img
                        src="images/pim-chu-z6NZ76_UTDI-unsplash.jpeg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <p>
                          I'm a PHP Website Developer with a knack for weaving
                          captivating digital tales, with WordPress as my
                          playground, I specialize in weaving magic into every
                          website I craft. Whether it's customizing themes or
                          building from the ground up, I'm dedicated to
                          delivering swift, polished solutions that elevate your
                          online presence and keep users coming back for more.
                        </p>

                        <!-- <div class="mt-2 mt-lg-auto">
                                                    <a href="about.html" class="custom-link mb-2">
                                                        Learn more about us
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="pills-youtube"
                  role="tabpanel"
                  aria-labelledby="pills-youtube-tab"
                >
                  <div class="row">
                    <h4 class="mb-3 text-center">Life as a Developer</h4>
                    <div class="col-lg-7 col-12">
                      <div class="ratio ratio-16x9">
                        <iframe
                          src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen
                        ></iframe>
                      </div>
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <p>
                          Three years as a PHP Developer, I've learnt how to
                          create amazing static and full stack websites, with
                          the help of Laravel, I am now able to create web
                          applications for any industry.
                        </p>

                        <!-- <p>Custom work is branding, web design, UI/UX design</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="contact.html" class="custom-link mb-2">
                                                        Work with us
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="pills-skill"
                  role="tabpanel"
                  aria-labelledby="pills-skill-tab"
                >
                  <div class="row">
                    <h4 class="mb-3 text-center">Skills</h4>
                    <div class="col-lg-7 col-12">
                      <img
                        src="images/phpSkillsSet.jpeg"
                        class="img-fluid"
                        alt=""
                        style="height: 90%; margin: 0 auto; width: 100%"
                      />
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <div class="row" style="display: flex">
                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>file_type_html</title>
                                  <polygon
                                    points="5.902 27.201 3.655 2 28.345 2 26.095 27.197 15.985 30 5.902 27.201"
                                    style="fill: #e44f26"
                                  ></polygon>
                                  <polygon
                                    points="16 27.858 24.17 25.593 26.092 4.061 16 4.061 16 27.858"
                                    style="fill: #f1662a"
                                  ></polygon>
                                  <polygon
                                    points="16 13.407 11.91 13.407 11.628 10.242 16 10.242 16 7.151 15.989 7.151 8.25 7.151 8.324 7.981 9.083 16.498 16 16.498 16 13.407"
                                    style="fill: #ebebeb"
                                  ></polygon>
                                  <polygon
                                    points="16 21.434 15.986 21.438 12.544 20.509 12.324 18.044 10.651 18.044 9.221 18.044 9.654 22.896 15.986 24.654 16 24.65 16 21.434"
                                    style="fill: #ebebeb"
                                  ></polygon>
                                  <polygon
                                    points="15.989 13.407 15.989 16.498 19.795 16.498 19.437 20.507 15.989 21.437 15.989 24.653 22.326 22.896 22.372 22.374 23.098 14.237 23.174 13.407 22.341 13.407 15.989 13.407"
                                    style="fill: #fff"
                                  ></polygon>
                                  <polygon
                                    points="15.989 7.151 15.989 9.071 15.989 10.235 15.989 10.242 23.445 10.242 23.445 10.242 23.455 10.242 23.517 9.548 23.658 7.981 23.732 7.151 15.989 7.151"
                                    style="fill: #fff"
                                  ></polygon>
                                </g>
                              </svg>
                              <p style="font-size: 15px">HTML</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>file_type_css</title>
                                  <polygon
                                    points="5.902 27.201 3.656 2 28.344 2 26.095 27.197 15.985 30 5.902 27.201"
                                    style="fill: #1572b6"
                                  ></polygon>
                                  <polygon
                                    points="16 27.858 24.17 25.593 26.092 4.061 16 4.061 16 27.858"
                                    style="fill: #33a9dc"
                                  ></polygon>
                                  <polygon
                                    points="16 13.191 20.09 13.191 20.372 10.026 16 10.026 16 6.935 16.011 6.935 23.75 6.935 23.676 7.764 22.917 16.282 16 16.282 16 13.191"
                                    style="fill: #fff"
                                  ></polygon>
                                  <polygon
                                    points="16.019 21.218 16.005 21.222 12.563 20.292 12.343 17.827 10.67 17.827 9.24 17.827 9.673 22.68 16.004 24.438 16.019 24.434 16.019 21.218"
                                    style="fill: #ebebeb"
                                  ></polygon>
                                  <polygon
                                    points="19.827 16.151 19.455 20.29 16.008 21.22 16.008 24.436 22.344 22.68 22.391 22.158 22.928 16.151 19.827 16.151"
                                    style="fill: #fff"
                                  ></polygon>
                                  <polygon
                                    points="16.011 6.935 16.011 8.855 16.011 10.018 16.011 10.026 8.555 10.026 8.555 10.026 8.545 10.026 8.483 9.331 8.342 7.764 8.268 6.935 16.011 6.935"
                                    style="fill: #ebebeb"
                                  ></polygon>
                                  <polygon
                                    points="16 13.191 16 15.111 16 16.274 16 16.282 12.611 16.282 12.611 16.282 12.601 16.282 12.539 15.587 12.399 14.02 12.325 13.191 16 13.191"
                                    style="fill: #ebebeb"
                                  ></polygon>
                                </g>
                              </svg>
                              <p style="font-size: 15px">CSS</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 256 256"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <g>
                                    <path
                                      d="M0,0 L256,0 L256,256 L0,256 L0,0 Z"
                                      fill="#F7DF1E"
                                    ></path>
                                    <path
                                      d="M67.311746,213.932292 L86.902654,202.076241 C90.6821079,208.777346 94.1202286,214.447137 102.367086,214.447137 C110.272203,214.447137 115.256076,211.354819 115.256076,199.326883 L115.256076,117.528787 L139.313575,117.528787 L139.313575,199.666997 C139.313575,224.58433 124.707759,235.925943 103.3984,235.925943 C84.1532952,235.925943 72.9819429,225.958603 67.3113397,213.93026"
                                      fill="#000000"
                                    ></path>
                                    <path
                                      d="M152.380952,211.354413 L171.969422,200.0128 C177.125994,208.433981 183.827911,214.619835 195.684368,214.619835 C205.652521,214.619835 212.009041,209.635962 212.009041,202.762159 C212.009041,194.513676 205.479416,191.592025 194.481168,186.78207 L188.468419,184.202565 C171.111213,176.81473 159.597308,167.53534 159.597308,147.944838 C159.597308,129.901308 173.344508,116.153295 194.825752,116.153295 C210.119924,116.153295 221.117765,121.48094 229.021663,135.400432 L210.29059,147.428775 C206.166146,140.040127 201.699556,137.119289 194.826159,137.119289 C187.78047,137.119289 183.312254,141.587098 183.312254,147.428775 C183.312254,154.646349 187.78047,157.568406 198.089956,162.036622 L204.103924,164.614095 C224.553448,173.378641 236.067352,182.313448 236.067352,202.418387 C236.067352,224.071924 219.055137,235.927975 196.200432,235.927975 C173.860978,235.927975 159.425829,225.274311 152.381359,211.354413"
                                      fill="#000000"
                                    ></path>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">JAVASCRIPT</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 -60.5 256 256"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <defs>
                                    <radialGradient
                                      id="radialGradient-1"
                                      cx="0.8366"
                                      cy="-125.811"
                                      r="363.0565"
                                      gradientTransform="matrix(0.463 0 0 0.463 76.4644 81.9182)"
                                      gradientUnits="userSpaceOnUse"
                                    >
                                      <stop
                                        offset="0"
                                        style="stop-color: #ffffff"
                                      ></stop>
                                      <stop
                                        offset="0.5"
                                        style="stop-color: #4c6b97"
                                      ></stop>
                                      <stop
                                        offset="1"
                                        style="stop-color: #231f20"
                                      ></stop>
                                    </radialGradient>
                                  </defs>
                                  <g>
                                    <ellipse
                                      fill="url(#radialGradient-1)"
                                      cx="128"
                                      cy="67.3"
                                      rx="128"
                                      ry="67.3"
                                    ></ellipse>
                                    <ellipse
                                      fill="#6181B6"
                                      cx="128"
                                      cy="67.3"
                                      rx="123"
                                      ry="62.3"
                                    ></ellipse>
                                    <g>
                                      <path
                                        fill="#FFFFFF"
                                        d="M152.9,87.5c0,0,6.1-31.4,6.1-31.4c1.4-7.1,0.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6 c0.1-0.6,0-1.2-0.4-1.7c-0.4-0.5-0.9-0.7-1.5-0.7h-14.6c-1,0-1.8,0.7-2,1.6l-6.5,33.3c-0.6-3.8-2-7-4.4-9.6 c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1,0-1.8,0.7-2,1.6L37,104.7c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7h14.7 c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3c2.5-2.3,4.6-4.9,6.2-7.7l-2.6,13.5 c-0.1,0.6,0,1.2,0.4,1.7s0.9,0.7,1.5,0.7h14.6c1,0,1.8-0.7,2-1.6l7.2-37h10c4.3,0,5.5,0.8,5.9,1.2c0.3,0.3,0.9,1.5,0.2,5.2 l-5.8,29.9c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7H151C151.9,89.1,152.7,88.4,152.9,87.5z M85.3,61.5 c-0.9,4.7-2.6,8.1-5.1,10c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C85.8,54.2,86.1,57.3,85.3,61.5z"
                                      ></path>
                                      <path
                                        fill="#FFFFFF"
                                        d="M215.3,42.9c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1,0-1.8,0.7-2,1.6l-13.1,67.5c-0.1,0.6,0,1.2,0.4,1.7 c0.4,0.5,0.9,0.7,1.5,0.7h14.7c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3 c2.6-2.4,4.8-5.1,6.4-8c1.6-2.9,2.8-6.1,3.5-9.6C220.9,54.7,219.6,47.9,215.3,42.9z M200,61.5c-0.9,4.7-2.6,8.1-5.1,10 c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C200.6,54.2,200.9,57.3,200,61.5z"
                                      ></path>
                                    </g>
                                    <g>
                                      <path
                                        fill="#000004"
                                        d="M74.8,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3 h-8.9l5.5-28.2H74.8z M39,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5 c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7H52.1L39,105z"
                                      ></path>
                                      <path
                                        fill="#000004"
                                        d="M113.3,19.6h14.6l-3.5,17.9h13c8.2,0,13.8,1.4,16.9,4.3c3.1,2.9,4,7.5,2.8,13.9L151,87.1h-14.8l5.8-29.9 c0.7-3.4,0.4-5.7-0.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5,38.7h-14.6L113.3,19.6z"
                                      ></path>
                                      <path
                                        fill="#000004"
                                        d="M189.5,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3 h-8.9l5.5-28.2H189.5z M153.7,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5 c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7h-28.3L153.7,105z"
                                      ></path>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">PHP</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="-4 0 264 264"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <g>
                                    <path
                                      d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z"
                                      fill="#FF2D20"
                                    ></path>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Laravel</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 48 48"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>Wordpress-color</title>
                                  <desc>Created with Sketch.</desc>
                                  <defs></defs>
                                  <g
                                    id="Icons"
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      id="Color-"
                                      transform="translate(-400.000000, -760.000000)"
                                      fill="#00759D"
                                    >
                                      <path
                                        d="M400,783.99925 C400,793.499047 405.520173,801.708803 413.525923,805.598425 L402.077565,774.232445 C400.747023,777.216038 400,780.519141 400,783.99925 Z M440.201556,782.788712 C440.201556,779.821619 439.135023,777.768055 438.222994,776.170505 C437.006456,774.191943 435.864921,772.517891 435.864921,770.540829 C435.864921,768.33426 437.537473,766.280696 439.895547,766.280696 C440.00205,766.280696 440.102553,766.294197 440.206056,766.300197 C435.936923,762.388075 430.247245,760 423.99955,760 C415.614288,760 408.238557,764.302134 403.946923,770.816838 C404.510941,770.834839 405.041958,770.845339 405.491972,770.845339 C408.00155,770.845339 411.888172,770.540829 411.888172,770.540829 C413.181212,770.464327 413.334217,772.366386 412.041176,772.517891 C412.041176,772.517891 410.740636,772.670896 409.29459,772.747398 L418.033864,798.743211 L423.287028,782.991218 L419.548911,772.747398 C418.25587,772.670896 417.030332,772.517891 417.030332,772.517891 C415.737292,772.441389 415.888797,770.464327 417.183337,770.540829 C417.183337,770.540829 421.146461,770.845339 423.504535,770.845339 C426.014113,770.845339 429.900734,770.540829 429.900734,770.540829 C431.195275,770.464327 431.34678,772.366386 430.053739,772.517891 C430.053739,772.517891 428.751698,772.670896 427.307153,772.747398 L435.980424,798.545205 L438.375999,790.546955 C439.411032,787.225851 440.201556,784.842276 440.201556,782.788712 Z M445.059908,772.48534 C445.163411,773.250364 445.221913,774.06939 445.221913,774.952917 C445.221913,777.387493 444.765899,780.125079 443.396356,783.549686 L436.065627,804.743848 C443.20135,800.584218 448,792.852977 448,783.9997 C448,779.82657 446.933467,775.903947 445.059908,772.48534 Z M424.421063,786.098716 L417.219338,807.022869 C419.370405,807.655889 421.644476,808.0009 423.99955,808.0009 C426.794137,808.0009 429.474721,807.517885 431.969299,806.640358 C431.906297,806.536854 431.846295,806.428851 431.798294,806.310347 L424.421063,786.098716 Z"
                                        id="Wordpress"
                                      ></path>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Wordpress</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>file_type_scss2</title>
                                  <path
                                    d="M16,2A14,14,0,1,1,2,16,14,14,0,0,1,16,2Z"
                                    style="fill: #c69; fill-rule: evenodd"
                                  ></path>
                                  <path
                                    d="M24.782,7.992c-.634-2.486-4.757-3.3-8.659-1.918A19.605,19.605,0,0,0,9.479,9.885c-2.149,2.01-2.492,3.76-2.351,4.491.5,2.58,4.033,4.266,5.486,5.517V19.9c-.428.211-3.564,1.8-4.3,3.42-.774,1.712.123,2.94.718,3.105A4.4,4.4,0,0,0,13.78,24.5a4.824,4.824,0,0,0,.472-4.288,5.639,5.639,0,0,1,2.143-.123c2.456.287,2.938,1.82,2.846,2.462a1.62,1.62,0,0,1-.779,1.1c-.172.107-.225.143-.21.223.021.115.1.111.247.086a1.915,1.915,0,0,0,1.336-1.707c.059-1.5-1.382-3.186-3.934-3.143a6.736,6.736,0,0,0-2.189.3c-.035-.04-.071-.08-.108-.12-1.578-1.683-4.494-2.874-4.371-5.137.045-.823.331-2.989,5.6-5.617,4.32-2.153,7.778-1.56,8.376-.247.854,1.876-1.848,5.361-6.334,5.864a3.37,3.37,0,0,1-2.833-.718c-.236-.26-.271-.271-.359-.223-.143.079-.052.309,0,.445a2.659,2.659,0,0,0,1.621,1.274,8.592,8.592,0,0,0,5.258-.52C23.283,13.362,25.405,10.437,24.782,7.992ZM13.218,20.663a3.584,3.584,0,0,1-.029,2.092q-.035.106-.077.21t-.091.2a3.911,3.911,0,0,1-.647.943c-.813.887-1.95,1.223-2.437.94-.526-.305-.263-1.556.68-2.553a9.478,9.478,0,0,1,2.474-1.762l0,0Z"
                                    style="fill: #fff"
                                  ></path>
                                </g>
                              </svg>
                              <p style="font-size: 15px">SCSS</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>file_type_photoshop</title>
                                  <path
                                    d="M3.167,3.517H28.833V28.483H3.167Z"
                                    style="fill: #0c0824"
                                  ></path>
                                  <path
                                    d="M3.167,3.517H28.833V28.483H3.167ZM2,29.65H30V2.35H2Zm18.877-16.1c-.922,0-1.237.467-1.237.852,0,.42.21.712,1.447,1.353,1.832.887,2.4,1.738,2.4,2.987,0,1.867-1.423,2.87-3.348,2.87a5.076,5.076,0,0,1-2.392-.5c-.082-.035-.093-.093-.093-.187V19.208c0-.117.058-.152.14-.093a4.33,4.33,0,0,0,2.345.688c.922,0,1.307-.385,1.307-.91,0-.42-.268-.793-1.447-1.4-1.657-.793-2.345-1.6-2.345-2.94,0-1.505,1.178-2.753,3.22-2.753a5.365,5.365,0,0,1,2.088.327.258.258,0,0,1,.117.233v1.6c0,.093-.058.152-.175.117a3.941,3.941,0,0,0-2.03-.525ZM10.843,14.938c.268.023.478.023.945.023,1.365,0,2.648-.478,2.648-2.333,0-1.482-.922-2.228-2.473-2.228-.467,0-.91.023-1.12.035Zm-2.077-6.2c0-.082.163-.14.257-.14.747-.035,1.855-.058,3.01-.058,3.232,0,4.492,1.773,4.492,4.037,0,2.963-2.147,4.235-4.783,4.235-.443,0-.595-.023-.91-.023v4.48c0,.093-.035.14-.14.14H8.907c-.093,0-.14-.035-.14-.14V8.743Z"
                                    style="fill: #31c5f0"
                                  ></path>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Photoshop</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                aria-label="Mailchimp"
                                role="img"
                                viewBox="0 0 512 512"
                                width="64px"
                                height="64px"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <rect
                                    rx="15%"
                                    width="512"
                                    height="512"
                                    fill="#fd2"
                                  ></rect>
                                  <path
                                    fill="#222"
                                    d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72-56-107-272 144-182 184-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-131-158c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"
                                  ></path>
                                </g>
                              </svg>
                              <p style="font-size: 15px">HTML Email</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 0 20 20"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <title>github [#142]</title>
                                  <desc>Created with Sketch.</desc>
                                  <defs></defs>
                                  <g
                                    id="Page-1"
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      id="Dribbble-Light-Preview"
                                      transform="translate(-140.000000, -7559.000000)"
                                      fill="#000000"
                                    >
                                      <g
                                        id="icons"
                                        transform="translate(56.000000, 160.000000)"
                                      >
                                        <path
                                          d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                          id="github-[#142]"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Git</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="0 -13 256 256"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <g>
                                    <path
                                      d="M5.888,166.405103 L90.88,20.9 C101.676138,27.2558621 156.115862,57.3844138 164.908138,63.1135172 L79.9161379,208.627448 C70.6206897,220.906621 -5.888,185.040138 5.888,166.396276 L5.888,166.405103 Z"
                                      fill="#FBBC04"
                                    ></path>
                                    <path
                                      d="M250.084224,166.401789 L165.092224,20.9055131 C153.210293,1.13172 127.619121,-6.05393517 106.600638,5.62496138 C85.582155,17.3038579 79.182155,42.4624786 91.0640861,63.1190303 L176.056086,208.632961 C187.938017,228.397927 213.52919,235.583582 234.547672,223.904686 C254.648086,212.225789 261.966155,186.175582 250.084224,166.419444 L250.084224,166.401789 Z"
                                      fill="#4285F4"
                                    ></path>
                                    <ellipse
                                      fill="#34A853"
                                      cx="42.6637241"
                                      cy="187.924414"
                                      rx="42.6637241"
                                      ry="41.6044138"
                                    ></ellipse>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Facebook/Google Ads</p>
                            </div>
                          </div>

                          <div class="skill-thumb mt-3 col-4 text-center">
                            <div class="skill">
                              <svg
                                width="64px"
                                height="64px"
                                viewBox="-14 0 284 284"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid"
                                fill="#000000"
                              >
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g
                                  id="SVGRepo_tracerCarrier"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></g>
                                <g id="SVGRepo_iconCarrier">
                                  <g>
                                    <path
                                      d="M256.003159,247.933017 C256.055907,258.030289 251.77298,267.664804 244.241349,274.390297 C236.709718,281.11579 226.653817,284.285366 216.626905,283.094249 C198.58347,280.424364 185.360959,264.722632 185.800619,246.488035 L185.800619,36.8452103 C185.364944,18.5907614 198.619678,2.88144681 216.687112,0.238996295 C226.704325,-0.933476157 236.743571,2.24455542 244.261279,8.9678962 C251.778988,15.691237 256.053811,25.3147619 256.003159,35.4002282 L256.003159,247.933017 Z"
                                      fill="#F9AB00"
                                    ></path>
                                    <path
                                      d="M35.1010243,213.193238 C54.4867848,213.193238 70.2020487,228.908502 70.2020487,248.294263 C70.2020487,267.680023 54.4867848,283.395287 35.1010243,283.395287 C15.7152639,283.395287 0,267.680023 0,248.294263 C0,228.908502 15.7152639,213.193238 35.1010243,213.193238 Z M127.459466,106.806429 C107.981896,107.874068 92.8698765,124.212107 93.3217628,143.713681 L93.3217628,237.998765 C93.3217628,263.58699 104.580582,279.120548 121.077461,282.431965 C131.434034,284.530959 142.185473,281.860819 150.356699,275.160414 C158.527925,268.460009 163.252393,258.439904 163.222912,247.872809 L163.222912,142.088076 C163.240039,132.641687 159.462041,123.584285 152.737293,116.950107 C146.012546,110.315928 136.904752,106.661084 127.459466,106.806429 L127.459466,106.806429 Z"
                                      fill="#E37400"
                                    ></path>
                                  </g>
                                </g>
                              </svg>
                              <p style="font-size: 15px">Google Analytics</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="front-product">
        <div class="container-fluid p-0">
          <div class="row align-items-center">
            <div class="col-lg-5 col-12">
              <img src="/images/reactjs.jpeg" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 col-12">
              <div class="px-5 py-5 py-lg-0">
                <h2 class="mb-4">
                  Currently Learning
                  <span><strong>Full Stack</strong></span> Web Development
                </h2>

                <p class="lead mb-4">
                  I am currently learning react to increase my skill set and
                  become a full stack developer who will flourish in both
                  back-end and front-end development.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="featured-product section-padding" id="portfolioProjects">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="mb-5">Portfolio <span>Projects</span></h2>
            </div>
                <?php
                $names = array('Instant Solar', 'Webkors', 'Gondo Skills Institute');

                // Loop through each name
                foreach ($names as $name) {
                    // Query to select rows with the current name
                    $sql = "SELECT * FROM project_info WHERE name = :name";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':name', $name);
                    $stmt->execute();
                
                    // Check if there are any results
                    $rowCount = $stmt->rowCount();
                    if ($rowCount > 0) {
                        // Loop through each row with the current name
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Output or process the row as needed
                            // echo "Name: " . $row['name'] . "<br>";

                            ?>
                <div class="col-lg-4 col-12 mb-3">
              <div class="product-thumb">
                <a href="product-detail.html">
                  <img
                    src="images/projects/<?php echo $row['img']; ?>"
                    class="img-fluid product-image"
                    alt=""
                  />
                </a>

                <div class="product-top d-flex">
                  <span class="product-alert me-auto"><?php echo $row['category']; ?></span>

                  <a href="#" class="bi-heart-fill product-icon"></a>
                </div>

                <div class="product-info d-flex">
                  <div>
                    <h5 class="product-title mb-0">
                      <a href="product-detail.html" class="product-title-link"
                        ><?php echo $name ?></a
                      >
                    </h5>

                    <p class="product-p"><?php echo $row['category']; ?> Website</p>
                  </div>
                </div>
              </div>
            </div>
            <?php
                            // echo "Description: " . $row['description'] . "<br>";
                            // Add more fields as necessary
                          }
                        }
                    }
                    
                    // Close the connection
                    $conn = null;
                    ?>
            <!-- <div class="col-lg-4 col-12">
              <div class="product-thumb">
                <a href="product-detail.html">
                  <img
                    src="images/projects/Screenshot-webkors-third.png"
                    class="img-fluid product-image"
                    alt=""
                  />
                </a>

                <div class="product-top d-flex">
                  <span class="product-alert">PHP MVC</span>

                  <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                </div>

                <div class="product-info d-flex">
                  <div>
                    <h5 class="product-title mb-0">
                      <a href="product-detail.html" class="product-title-link"
                        >Webkors</a
                      >
                    </h5>
                    <p class="product-p">Wordpress Theme Development</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-12 mb-3">
              <div class="product-thumb">
                <a href="product-detail.html">
                  <img
                    src="images/projects/Screenshot 2023-08-21 093103.png"
                    class="img-fluid product-image"
                    alt=""
                  />
                </a>

                <div class="product-top d-flex">
                  <span class="product-alert">Wordpress Theme</span>

                  <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                </div>

                <div class="product-info d-flex">
                  <div>
                    <h5 class="product-title mb-0">
                      <a href="product-detail.html" class="product-title-link"
                        >Gondo SKills Institute</a
                      >
                    </h5>
                    <p class="product-p">PHP MVC</p>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="col-12 text-center">
              <a href="/projects" class="view-all">View All Projects</a>
            </div>
          </div>
        </div>
      </section>

      <section class="contact section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <h2 class="mb-4">Let's <span>chat</span></h2>

              <form class="contact-form me-lg-5 pe-lg-3" role="form" action="/include/process.php" method="POST">
                <div class="form-floating">
                  <input
                    type="text"
                    name="firstName"
                    id="name"
                    class="form-control"
                    placeholder="Full name"
                    required=""
                  />

                  <label for="name">Full name</label>
                </div>
                
                <div iv class="form-floating my-4">
                  <input
                    type="lastName"
                    name="lastName"
                    id="lastName"
                    class="form-control"
                    placeholder="Last Name"
                    required=""
                  />

                  <label for="lastName">Last Name</label>
                </div>

                <div class="form-floating my-4">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    pattern="[^ @]*@[^ @]*"
                    class="form-control"
                    placeholder="Email address"
                    required=""
                  />

                  <label for="email">Email address</label>
                </div>

                <div class="form-floating mb-4">
                  <textarea
                    id="message"
                    name="message"
                    class="form-control"
                    placeholder="Leave a comment here"
                    required=""
                    style="height: 160px"
                  ></textarea>

                  <label for="message">Tell us about the project</label>
                </div>

                <div class="col-lg-5 col-6">
                  <button type="submit" class="form-control">Send</button>
                </div>
              </form>
            </div>

            <div class="col-lg-6 col-12 mt-5">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114584.75890670123!2d27.957622303717276!3d-26.171498044394266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c68f0406a51%3A0x238ac9d9b1d34041!2sJohannesburg!5e0!3m2!1sen!2sza!4v1710243517738!5m2!1sen!2sza"
                width="600"
                height="450"
                class="mt-4"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require "include/footer.php"; ?>