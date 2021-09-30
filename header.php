<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class=""> 

                </div>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $_SESSION['nama_petugas']; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $_SESSION['nama_petugas']; ?></a>
                                        </h5>
                                        <span class="nuumber">
                                            <?php 
                                            $id_level = $_SESSION['id_level'];
                                            $query = mysqli_query($mysqli, "SELECT * FROM level where ID_LEVEL = $id_level");
                                            $data=mysqli_fetch_assoc($query);
                                            echo $data['NAMA_LEVEL'];
                                            ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="logout.php">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>