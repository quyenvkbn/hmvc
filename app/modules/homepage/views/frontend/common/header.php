<?php $main = navigations_array('main',$this->fc_lang) ?>
<header id="header-site">
    <!-- begin mobile -->
    <div class="wrapper cf">
        <nav id="main-nav">
            <?php if(isset($main) && is_array($main) && count($main)){ ?>
            <ul class="second-nav">
                <?php foreach ($main as $key => $val) { ?>
                <li class="devices">
                    <a href="<?php echo $val['href'] ?>"><span><?php echo $val['title'] ?></span></a>
                    <?php if(isset($val['child']) && is_array($val['child']) && count($val['child'])){ ?>
                    <ul>
                        <?php foreach ($val['child'] as $key => $val1) { ?>
                        <li class="mobile">
                            <a href="<?php echo $val1['href'] ?>"><?php echo $val1['title'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </nav>
        <a class="toggle">
            <span></span>
        </a>
    </div>
    <!-- end mobile -->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="<?php echo base_url() ?>"><img src="<?php echo $this->fcSystem['homepage_logo'] ?>" alt="<?php echo $this->fcSystem['homepage_company'] ?>"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-search">
                    <h4 class="title">Welcome to <span>CEN in Vietnam</span></h4>
                    <div class="search">
                        <form action="tim-kiem.html" method="get">
                            <input type="text" name="key" placeholder="Search CEN in Vietnam">
                            <button type="submit" class="click-search"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="language">
                        <ul>
                            <li><a href="?lang=vietnamese"><img src="templates/frontend/resources/images/vn.png" alt="vietnam"></a></li>
                            <li><a href="?lang=english"><img src="templates/frontend/resources/images/el.png" alt="english"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-menu">
        <div class="container">
            <?php if(isset($main) && is_array($main) && count($main)){ ?>
            <nav class="menu">
                <ul>
                    <?php foreach ($main as $key => $val) { ?>
                    <li>
                        <a href="<?php echo $val['href'] ?>"><?php echo $val['title'] ?></a>
                        <?php if(isset($val['child']) && is_array($val['child']) && count($val['child'])){ ?>
                        <ul class="sub-menu">
                            <?php foreach ($val['child'] as $key => $val1) { ?>
                            <li><a href="<?php echo $val1['href'] ?>"><?php echo $val1['title'] ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <?php } ?>
        </div>
    </div>
</header>