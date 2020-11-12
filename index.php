<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practice</title>
    <link rel="stylesheet" href="./assets/stylesheets/all.css">
    <script src="https://kit.fontawesome.com/b22ce6914a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include('./assets/inc/navbar.php') ?>
<?php include('./assets/inc/banner.php') ?>

<section id="section1" class="section bg-light text-center">
    <h2 class="mb-sm text-primary">Lorem ipsum dolor</h2>
    <p class="mb-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dicta veritatis beatae officiis aut!<br>
     Laborum natus minima inventore quidem vero.</p>
    <ul class="circle-icon-container">
        <li class="item">
            <span><i class="fas fa-smile-wink"></i></span>
            <h3>Lorem</h3>
        </li>
        <li class="item">
            <span><i class="fas fa-laptop"></i></span>
            <h3>Lorem</h3>
        </li>
        <li class="item">
            <span><i class="fas fa-mug-hot"></i></span>
            <h3>Lorem</h3>
        </li>
        <li class="item">
            <span><i class="fas fa-cubes"></i></span>
            <h3>Lorem</h3>
        </li>
    </ul>
</section>

<div id="section2" class="d-flex flex-wrap">
    <div class="w-50 section bg-gradient">
        <h2 class="mb-xs text-light">Lorem ipsum dolor</h2>
        <p class="mb-md text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nulla necessitatibus repudiandae ipsum id aspernatur.</p>
        <a href="#" class="btn mb-lg">More</a>
    </div>
    <div class="w-50 img-container">
        <img src="https://picsum.photos/640/480?random=2" alt="pic">
    </div>
</div>
</body>
</html>