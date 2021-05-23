<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Foundation/ress.css">
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="Foundation/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/5ab7618b37.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="l-base">
        <header class="l-header p-header">
            <input type="radio" name="c-menu" id="c-menu__open">
            <label for="c-menu__open" class="c-menu__open">Menu</label>
            <h1 class="l-header__title p-header__title">Hamburger</h1>
            <div class="l-header__search p-header__search">
                <input type="search" class="c-form" placeholder=" &#xf002;" style="font-family: FontAwesome;">
                <input type="submit" class="c-button c-button--small" value="検索">
            </div>
        </header>
        <main class="l-main">
            <section class="p-top__archive p-top">
                <div class="p-top__inner">
                    <h1>Menu:</h1>
                    <h3>ﾁｰｽﾞﾊﾞｰｶﾞｰ</h3>
                </div>
            </section>
            <article class="p-article__archive p-article">
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <article class="c-card">
                    <div class="c-card__img"></div>
                    <section class="c-card__outline">
                        <div class="c-card__contents">
                            <h3>チーズバーガー</h3>
                            <h4>小見出しが入ります</h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="c-button c-button--archive">
                            <a href="#">詳しく見る</a>
                        </div>
                    </section>
                </article>
                <article class="c-card">
                    <div class="c-card__img">
                    </div>
                    <section class="c-card__outline">
                        <div class="c-card__contents">
                            <h3>ダブルチーズバーガー</h3>
                            <h4>小見出しが入ります</h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="c-button c-button--archive">
                            <a href="#">詳しく見る</a>
                        </div>
                    </section>
                </article>
                <article class="c-card">
                    <div class="c-card__img">
                    </div>
                    <section class="c-card__outline">
                        <div class="c-card__contents">
                            <h3>スペシャルチーズバーガー</h3>
                            <h4>小見出しが入ります</h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="c-button c-button--archive">
                            <a href="#">詳しく見る</a>
                        </div>
                    </section>
                </article>
            </article>
            <ul class="p-pagenation">
                <li class="p-pagenation__pageinfo">page 1/10</li>
                <li class="prevpostlink p-pagenation__prev"><a class="prevpostslink" rel="next"
                        href="#"><span></span><span></span></a></li>
                <li class="p-pagenation__pagenumber is-active"><a href="#">1</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">2</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">3</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">4</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">5</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">6</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">7</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">8</a></li>
                <li class="p-pagenation__pagenumber"><a href="#">9</a></li>
                <li class="prevpostlink p-pagenation__next"><a class="nextpostslink" rel="nexr"
                        href="#"><span></span><span></span></a></li>
            </ul>
        </main>
    </div>
    <nav class="l-sidebar">
        <div class="l-sidebar__hide"></div>
        <div class="l-sidebar__gmenu">
            <input type="radio" name="c-menu" id="c-menu__close" checked>
            <label for="c-menu__close" class="c-menu__close"><span></span></label>
            <h2>Menu</h2>
            <ul class="l-sidebar__main p-sidebar__main">
                <li><a href="">バーガー</a>
                    <ul class="l-sidebar__sub p-sidebar-sub">
                        <li><a href="">ハンバーガー</a></li>
                        <li><a href="">チーズバーガー</a></li>
                        <li><a href="">テリヤキバーガー</a></li>
                        <li><a href="">アボカドバーガー</a></li>
                        <li><a href="">フィッシュバーガー</a></li>
                        <li><a href="">ベーコンバーガー</a></li>
                        <li><a href="">チキンバーガー</a></li>
                    </ul>
                </li>
                <li><a href="">サイド</a>
                    <ul class="l-sidebar__sub p-sidebar-sub">
                        <li><a href="">ポテト</a></li>
                        <li><a href="">サラダ</a></li>
                        <li><a href="">ナゲット</a></li>
                        <li><a href="">コーン</a></li>
                    </ul>
                </li>
                <li><a href="">ドリンク</a>
                    <ul class="l-sidebar__sub p-sidebar-sub">
                        <li><a href="">コーラ</a></li>
                        <li><a href="">ファンタ</a></li>
                        <li><a href="">オレンジ</a></li>
                        <li><a href="">アップル</a></li>
                        <li><a href="">紅茶 (Ice/Hot)</a></li>
                        <li><a href="">コーヒー (Ice/Hot)</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <footer class="l-footer">
        <a>ショップ情報｜ヒストリー</a>
        <p>Copyright: RaiseTech</p>
    </footer>


    <script src="script.js"></script>
</body>

</html>