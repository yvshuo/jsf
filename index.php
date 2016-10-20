<?php 
	require_once("global.php");
	require_once("partials/header.php");
?>

<!-- 单个page ,第一个.page默认被展示-->
<div class="page">
    <!-- 标题栏 -->
    <div class="syHeader">
        <div class="flex-content">
            <div class="flex-item">
                全部门店
                <span class="icon icon-down"></span>
            </div>
        </div>
    </div>

    <!-- 工具栏 -->
    <nav class="bar bar-tab">
        <a class="tab-item external active">
            <span class="tab-label">首页</span>
        </a>
        <a class="tab-item external" href="ttk.php">
            <span class="tab-label">团体课</span>
        </a>
        <a class="tab-item external" href="sjk.php">
            <span class="tab-label">私教课</span>
        </a>
    </nav>

    <!-- 这里是页面内容区 -->
    <div class="content">
<?php
for($i=0;$i<3;$i++){
echo <<<sb
        <div class="shop-lst">
            <div class="shop-item flex-content">
                <img src="img/shop.jpg" alt="">
                <div class="shop-txt">love fitt红岭店</div>
            </div>
        </div>
sb;
}
?>
    </div>
</div>

<?php	
	require_once("partials/footer.php");
?>