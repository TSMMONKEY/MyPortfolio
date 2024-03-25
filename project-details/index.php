<?php
session_start();
require "../include/header.php"; 
require "../include/DbConnect.php"; 

// Check if the 'name' query parameter exists
if(isset($_GET['name'])) {
    // Get the value of the 'name' query parameter
    $paramValue = $_GET['name'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM project_info WHERE name = :name";
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bindParam(':name', $paramValue);

    // Execute the statement
    if ($stmt->execute()) {
        // Check if there are any results
        if ($stmt->rowCount() > 0) {
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

?>
      <header
        class="site-header section-padding d-flex justify-content-center align-items-center"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-12">
              <h1>
                <span class="d-block text-primary"><?php echo $row['name'] ?></span>
                <span class="d-block text-dark" style="text-transform: capitalize;">A <?php echo $row['category'] ?> Website</span>
              </h1>
            </div>
          </div>
        </div>
      </header>

      <section class="product-detail section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="product-thumb">
                <img
                  src="/images/projects/<?php echo $row['img'] ?>"
                  class="img-fluid product-image"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-6 col-12">
              <div class="product-info d-flex py-0">
                <div>
                  <h2 class="product-title mb-0"><?php echo $row['name'] ?></h2>
                </div>
              </div>

              <div class="product-description">
                <strong class="d-block mt-4 mb-2">Description</strong>

                <p class="mb-5">
                <?php echo $row['description'] ?>
                </p>
              </div>

              <div class="product-cart-thumb row">

                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                  <a
                    href="<?php echo $row['link'] ?>"
                    class="btn custom-btn cart-btn"
                    target="_blank"
                  >
                    View Project
                  </a>
                </div>

                <h6 class="mt-3">Skills Used</h6>

                <p class="mt-0">
                  <ul style="width: 5000px;">
                  <?php echo $row['skills']; ?>
                    <!-- <li class="mt-0 product-additional-link">HTML</li>
                    <li class="mt-0 product-additional-link">CSS</li>
                    <li class="mt-0 product-additional-link">Javascript</li>
                    <li class="mt-0 product-additional-link">PHP</li>
                    <li class="mt-0 product-additional-link">MVC</li>
                    <li class="mt-0 product-additional-link">Brumas</li>
                    <li class="mt-0 product-additional-link">Composer</li>
                    <li class="mt-0 product-additional-link">Bootstrap</li>
                    <li class="mt-0 product-additional-link">SEO</li> -->
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="related-product section-padding border-top">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="mb-5">More Projects</h3>
            </div>

            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                  <a href="product-detail.html">
                    <img
                      src="images/projects/Screenshot 2023-08-07 081248.png"
                      class="img-fluid product-image"
                      alt=""
                    />
                  </a>
  
                  <div class="product-top d-flex">
                    <span class="product-alert me-auto">PHP MVC</span>
  
                    <a href="#" class="bi-heart-fill product-icon"></a>
                  </div>
  
                  <div class="product-info d-flex">
                    <div>
                      <h5 class="product-title mb-0">
                        <a href="product-detail.html" class="product-title-link"
                          >Instant Solar</a
                        >
                      </h5>
  
                      <p class="product-p">PHP MVC Website</p>
                    </div>
                  </div>
                </div>
            </div>
  
            <div class="col-lg-4 col-12">
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
                <span class="product-alert">PHP</span>

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
            </div>

            <div class="col-12 text-center">
                 <a href="/projects" class="view-all">View All Projects</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-10 me-auto mb-4">
            <h4 class="text-white mb-3">
              <a href="index.html">Little</a> Fashion
            </h4>
            <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">
              Copyright © 2022 <strong>Little Fashion</strong>
            </p>
            <br />
            <p class="copyright-text">
              Designed by
              <a href="https://www.tooplate.com/" target="_blank">Tooplate</a>
            </p>
          </div>

          <div class="col-lg-5 col-8">
            <h5 class="text-white mb-3">Sitemap</h5>

            <ul class="footer-menu">
              <li class="footer-menu-item">
                <a href="about.html" class="footer-menu-link">Projects</a>
              </li>

              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Contact</a>
              </li>

              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-4">
            <h5 class="text-white mb-3">Social</h5>

            <ul class="social-icon">
              <li><a href="#" class="social-icon-link bi-youtube"></a></li>

              <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

              <li><a href="#" class="social-icon-link bi-instagram"></a></li>

              <li><a href="#" class="social-icon-link bi-skype"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- CART MODAL -->
    <div
      class="modal fade"
      id="cart-modal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
          <div class="modal-header flex-column">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                <img
                  src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg"
                  class="img-fluid product-image"
                  alt=""
                />
              </div>

              <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                <h3 class="modal-title" id="exampleModalLabel">Tree pot</h3>

                <p class="product-price text-muted mt-3">$25</p>

                <p class="product-p">Quatity: <span class="ms-1">4</span></p>

                <p class="product-p">Colour: <span class="ms-1">Black</span></p>

                <p class="product-p pb-3">
                  Size: <span class="ms-1">S/S</span>
                </p>

                <div class="border-top mt-4 pt-3">
                  <p class="product-p">
                    <strong>Total: <span class="ms-1">$100</span></strong>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <div class="row w-50">
              <button type="button" class="btn custom-btn cart-btn ms-lg-4">
                Checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>

<?php
            }
          } else {
              echo "0 results";
          }
      } else {
          echo "Error executing the query.";
      }
  } else {
      echo "No 'name' query parameter found.";
  }
  
  // Close the connection
  $conn = null;
  ?>
