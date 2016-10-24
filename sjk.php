<?php 
	require_once("global.php");
	require_once("partials/header.php");
?>

<!-- 单个page ,第一个.page默认被展示-->
<div class="page" id="sjk">
    <!-- 标题栏 -->
    <div class="sjkHeader">
        <div class="chooseTags flex-content">
            <div class="flex-item blackLine">
                全部门店
                <span class="icon icon-down"></span>
            </div>
            <div class="flex-item">
                热门标签
                <span class="icon icon-down"></span>
            </div>
        </div>
    </div>

    <!-- 工具栏 -->
    <nav class="bar bar-tab">
        <a class="tab-item external" href="index.php">
            <span class="tab-label">首页</span>
        </a>
        <a class="tab-item external" href="ttk.php">
            <span class="tab-label">团体课</span>
        </a>
        <a class="tab-item external active">
            <span class="tab-label">私教课</span>
        </a>
    </nav>

    <!-- 这里是页面内容区 -->
    <div class="content" style="top:1.7rem">
        <div class="content-padded">
            <div class="tags">
                <?php
                    for($i=0;$i<8;$i++){
                        echo '<div>测试用标签</div>';
                    }
                ?>
            </div>
        </div>

        <div class="content-padded">
            <div class="cont-block">
                <div class="cont-body">
<?php
for($i=0;$i<10;$i++){
echo <<<sb
                    <div class="ls-body">
                        <div class="flex-content lesson-cont">
                            <div class="img-cont flex-content">
                                <img src="img/coach.jpg" alt="">
                            </div>
                            <div class="freefi">
                                <div class="lstxt flex-content">
                                    100天挑战营-力量训练（单次体验）
                                </div>
                                <div class="sintro">吐槽延续生命</div>
                                <div class="lstime">
                                    <div class="mscred">
                                        400元/节
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
sb;
}
?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php	
	require_once("partials/footer.php");
?>