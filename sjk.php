<?php 
	require_once("global.php");
	require_once("partials/header.php");
?>

<!-- 单个page ,第一个.page默认被展示-->
<div class="page">
    <!-- 标题栏 -->
    <header class="bar bar-nav">
        <h1 class="title">标题</h1>
    </header>

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
    <div class="content">
        sjk
    </div>
</div>

<?php	
	require_once("partials/footer.php");
?>