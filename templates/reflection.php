<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Reflection</h6>
                <h1 class="breadcrumbs-custom-title"><?= $reflection->title ?></h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="./">Home</a></li>
                <li><a href="./bishop/reflection">Reflections</a></li>
                <li class="active"><?= $reflection->title ?></li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <article class="post-creative">
                    <h3 class="post-creative-title"><?= $reflection->title ?></h3>
                    <ul class="post-creative-meta">
                        <li><span class="icon mdi mdi-calendar-clock"></span>
                            <time datetime="2020"><?= $reflection->created ?></time>
                        </li>
                    </ul>
                    <img src="images/single-blog-post-1-770x458.jpg" alt="" width="770" height="458">
                    <h4><?=$reflection->body?></h4>
                   
                
                </article>
             
          
            </div>
        </div>
    </div>
</section>