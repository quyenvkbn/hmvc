<div id="main" class="wrapper main-detail-new main-new wow fadeInUp">
    <div class="top-content">
        <div class="container">
            <div class="top-content-child">
                <?php $this->load->view('homepage/frontend/common/slider') ?>
            </div>
        </div>
    </div>
    <section class="new-home">
        <div class="container">
            <div class="new-home-child ">
                <h1 class="title"><?php echo $DetailArticles['title'] ?></h1>
                <p class="date-new"><?php echo show_time($DetailArticles['created'],'d/m/Y') ?></p>
                <div class="content-detail">
                    <?php echo $DetailArticles['description'] ?>
                    <?php echo $DetailArticles['content'] ?> 1
                </div>
                <!-- <div class="prev-next">
                    <ul>
                        <li><a href="">PREV</a>|</li>
                        <li><a href="">NEXT</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
</div>