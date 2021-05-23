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
            <section class="p-top__page p-top p-top__post">
                <h1>ショップについて</h1>
            </section>
            <article class="p-article__single p-article">
                <div class="p-detail">
                    <h2>見出しh2</h2>
                    <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3>見出しh3</h3>
                    <h4>見出しh4</h4>
                    <h3>見出しh3</h3>
                    <h4>見出しh4</h4>
                    <h5>見出しh5</h5>
                    <h6>見出しh6</h6>
                    <blockquote class="Blockquote p-detail__blockquote">
                        <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                        <p>出典元：<a href="#">〇〇〇〇〇〇〇〇〇〇〇〇</a></p>
                    </blockquote>
                    <div class="p-detail__section"></div>
                    <img src="img/single-article_img1.png">
                    <div class="p-detail__section"></div>
                    <div class="p-detail__textbox">
                        <p>　テキストが入ります　テキストが入ります　テキストが入ります</p>
                        <img src="img/single-article_img2.png">
                    </div>
                    <div class="p-detail__section"></div>
                    <div class="p-detail__textbox">
                        <img src="img/single-article_img2.png">
                        <p>　テキストが入ります　テキストが入ります　テキストが入ります</p>
                    </div>
                    <div class="p-detail__section"></div>
                    <div class="p-detail__img--small">
                        <img src="img/single-article_img2.png">
                    </div>
                    <div class="p-detail__section"></div>
                    <div class="p-detail__flexbox">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                        <img src="img/single-article_img2.png">
                    </div>
                    <div class="p-detail__section"></div>
                    <ol>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ol>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ol>
                        </li>
                    </ol>
                    <ol>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ul>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <div class="p-detail__section"></div>
                    <pre><code>
    &lt;html>
        &lt;head&gt;
        &lt;body&gt;
        &lt;/body&gt;
        &lt;/head&gt;
    &lt;/html&gt;
                    </code></pre>
                    <div class="p-detail__section"></div>
                    <table>
                        <tbody>
                            <tr>
                                <th>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <th>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="p-detail__section"></div>
                    <input type="submit" value="ボタン" class="c-button c-button--single" href="#">
                    <p style="font-weight: bold;">boldboldboldboldboldbold</p>
                </div>
            </div>

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