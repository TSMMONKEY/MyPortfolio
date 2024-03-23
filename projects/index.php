<?php 
    include "../include/DbConnect.php";
    require "../include/header.php";
?>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-dark" style="font-size: 40px;">Explore My</span>
                                <span class="d-block text-primary" style="font-size: 40px;">PHP/WordPress Portfolio Projects</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        
                    <!-- php project -->
                        <div class="col-12">
                            <h2 class="mb-5">PHP MVC Projects</h2>
                        </div>
                        <?php
                               $stmt = $conn->prepare("SELECT * FROM project_info WHERE category ='php mvc'");
                               $stmt->execute();

                               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                               foreach($result as $project){

                        ?>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                <img src="/images/projects/<?php echo $project['img']; ?>" class="img-fluid product-image" alt="<?php echo $project['name'] ?> project image">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link"><?php echo $project['name']; ?></a>
                                        </h5>

                                        <p class="product-p">Original package design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$25</small>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <!-- wordpress project -->
                        <div class="col-12">
                            <h2 class="mb-5">WordPress Projects</h2>
                        </div>
                        <?php
                               $stmt = $conn->prepare("SELECT * FROM project_info WHERE category ='Wordpress Theme'");
                               $stmt->execute();

                               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                               foreach($result as $project){

                        ?>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="/images/projects/<?php echo $project['img']; ?>" class="img-fluid product-image" alt="<?php echo $project['name'] ?> project image">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Trending</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link"><?php echo $project['name'] ?></a>
                                        </h5>

                                        <p class="product-p">Original package design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$50</small>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <!-- HTML project -->
                        <div class="col-12">
                            <h2 class="mb-5">HTML Projects</h2>
                        </div>


                        <?php
                               $stmt = $conn->prepare("SELECT * FROM project_info WHERE category ='HTML'");
                               $stmt->execute();

                               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                               foreach($result as $project){

                        ?>
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                <img src="/images/projects/<?php echo $project['img']; ?>" class="img-fluid product-image" alt="<?php echo $project['name'] ?> project image">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Trending</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link"><?php echo $project['name'] ?></a>
                                        </h5>

                                        <p class="product-p">Original package design from house</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">$50</small>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

        </main>
        <?php require "../include/footer.php"; ?>