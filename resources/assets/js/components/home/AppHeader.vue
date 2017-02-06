<template>
    <header id="header" class="clearfix">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
                <a id="logo" href="">
                    <img src="/images/logo.jpg" alt="" />
                </a>

                <nav id="nav-menu" role="navigation">
                    <a class="current" href="">首页</a>
                </nav>

                <div class="site-search">
                <form id="search" method="post" action="" role="search">
                    <label for="s" class="sr-only"></label>
                    <input type="text" name="s" class="text" placeholder="请输入关键字" />
                    <button type="submit" class="submit"><i class="limeicon icon-sousuo search-icon" id="lime-search"></i></button>
                </form>
                </div>
            </div>
            <div class="col-3 kit-hidden-tb lime-top-bar"> <a href="me#response" class="not-login blog-mind" data-check="comment">给我留言:)</a> </div>
        </div>
    </header>
</template>

<script>

export default {
 
}
</script>