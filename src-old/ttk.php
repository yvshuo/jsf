<?php 
	require_once("global.php");
	require_once("partials/header.php");
?>

<!-- 单个page ,第一个.page默认被展示-->
<div class="page" id="ttk">
    <!-- 标题栏 -->
    <div class="ttkHeader">
        <div class="chooseDate">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide active">
                        <div>今天</div>
                        <div>10/20</div>
                    </div>
                    <div class="swiper-slide">
                        <div>明天</div>
                        <div>10/21</div>
                    </div>

                <?php
                    for($i=0;$i<8;$i++){
                        echo '<div class="swiper-slide">
                        <div>明天</div>
                        <div>10/';
                        echo 22+$i;
                        echo '</div></div>';
                    }
                ?>
                </div>
            </div>           
        </div>
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
        <a class="tab-item external active">
            <span class="tab-label">团体课</span>
        </a>
        <a class="tab-item external" href="sjk.php">
            <span class="tab-label">私教课</span>
        </a>
    </nav>

    <!-- 这里是页面内容区 -->
    <div class="content" style="top:3.9rem">
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
                    <div class="ls-body">
                        <div class="flex-content lesson-cont">
                            <div class="img-cont flex-content">
                                <img src="img/coach.jpg" alt="">
                            </div>
                            <div class="freefi">
                                <div class="lstxt flex-content">
                                    100天挑战营-力量训练（单次体验）
                                </div>
                                <div class="lstag">
                                    <div>动态课程</div>
                                    <div>训练</div>
                                    <div>动态课程</div>
                                    <div>动态课程</div>
                                </div>
                                <div class="lstime">
                                    <div class="mscred">
                                        07:00-08:00
                                    </div>
                                    <div class="jge">
                                        ￥98/人
                                    </div>
                                </div>
                            </div>
                            <div class="stbtn flex-content">
                                <a href="#" class="button button-fill disabled my">已结束</a>
                            </div>
                        </div>
                    </div>

                    <div class="ls-body">
                        <div class="flex-content lesson-cont">
                            <div class="img-cont flex-content">
                                <img src="img/coach.jpg" alt="">
                            </div>
                            <div class="freefi">
                                <div class="lstxt flex-content">
                                    100天挑战营-力量训练（单次体验）
                                </div>
                                <div class="lstag">
                                    <div>动态课程</div>
                                    <div>训练</div>
                                    <div>动态课程</div>
                                    <div>动态课程</div>
                                </div>
                                <div class="lstime">
                                    <div class="mscred">
                                        07:00-08:00
                                    </div>
                                    <div class="jge">
                                        ￥98/人
                                    </div>
                                </div>
                            </div>
                            <div class="stbtn flex-content">
                                <a href="#" class="button button-fill button-qyk">去约课</a>
                            </div>
                        </div>
                    </div>

<?php
for($i=0;$i<7;$i++){
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
                                <div class="lstag">
                                    <div>动态课程</div>
                                    <div>训练</div>
                                    <div>动态课程</div>
                                    <div>动态课程</div>
                                </div>
                                <div class="lstime">
                                    <div class="mscred">
                                        07:00-08:00
                                    </div>
                                    <div class="jge">
                                        ￥98/人
                                    </div>
                                </div>
                            </div>
                            <div class="stbtn flex-content">
                                <a href="#" class="button button-fill button-qyk">去约课</a>
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