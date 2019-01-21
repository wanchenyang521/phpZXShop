<div class="search-con">
    <div class="logo-box">
        <a href="index.php"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="search-box">
        <div class="search-bd">

            <div class="search-panel">
                <a href="searchResult.php" class="sousuo"></a>
                <form action="searchResult.php" method="get">
                    <div class="btn">
                        <input type="submit" class="searchBtn" id="search" name="search" value="搜索">
                    </div>

                    <div class="search-inp-box">
                        <div class="search-inp">
                            <input type="text" placeholder="这是一个搜索框" class="text" name="keyWord">
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>

</div>
<div class="scrren-nav-wrap">
    <div class="scrren-nav-content">
        <h2><a href="index.php" style="color: #B4A078">首页</a> </h2>
        <ul>
            <?php
            while($rowNav=mysqli_fetch_array($resNav)) {
                ?>
                <li><a href="showType.php?tid=<?php echo $rowNav['typeid']?>"><?php echo $rowNav['typename'];?></a></li>
                <?php
            }
            ?>

        </ul>

    </div>
</div>