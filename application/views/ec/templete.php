<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>TITLE</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
    <script src="js/jquery-1.4.4.min.js"></script> 
    <script src="js/simpletabs.js"></script> 
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<!-- #wrapper Start -->
    <div id="wrapper">
<!-- header Start -->
        <header>
<!-- http://www.w3.org/html/logo/ -->
            <h1>
                <a href="index04.php">TITLE</a>
            </h1>
            <h2>HEADER_TEXT</h2>
        </header>
<!-- End of header -->
<!-- top nav Start-->
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="#">DAMSホーム</a></li>
                    <li><a href="#">DAMSについて</a></li>
                    <li><a href="#">DAMSサイトマップ</a></li>
                    <li><a href="#">DAMSサポート</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
<!-- End of top nav -->
<!-- #main Start -->
        <section id="main">
<!-- #content Start -->
            <section id="content">
            <!-- トップセール -->
                <article class="featured">
                    <img src="images/wd_logo.jpg" alt="" class="featuredthumb" />
                    <p><a href="#" class="featuredtitle">レプリカウェア クリアランスセール</a></p>
                    <p class="featuredstory">アルゼンチン代表のレプリカを大量入手。もちろん、マラドーナが袖を通したアルゼンチン代表ユニホームのレプリカも全て揃えています。全部そろえてみませんか！また、アジアカップ開催期間中のため、アジアの全てに国のレプリカウェアも取り扱っています。なお、数に限りがありますので、購入時に売り切れの場合はご了承ください。また、欧州各リーグも中盤を過ぎ、後半に入っているので、応援用レプリカウェアを現地から大量入手、低価格でお届けします。</p>
                </article>
                <article>
                    <div id="container">
                    <!-- Galery -->
                        <ul id="gallery">
							<li>商品</li>
                        </ul>
                    <!-- End Galery -->
                    </div>
                </article>
            </section>
<!-- End of #content -->
<!-- aside Start -->
            <aside id="sidebar">
                <div class="tabwidget"> 
                    <ul class="tabs"> 
                        <li><a href="#tab1">新着商品</a></li> 
                        <li><a href="#tab2">セール情報</a></li>
                        <li><a href="#tab3">予約情報</a></li>
                    </ul> 
                    <div class="tab_container"> 
                        <div id="tab1" class="tab_content"> 
                            <h3>サッカーグッズ新着情報</h3> 
                            <ul>
                                <li><a href="#">footballista198号</a></li>
                                <li><a href="#">ナイキ 5 エラスティコ プロ</a></li>
                                <li><a href="#">ナイキ 5 サラ フィーノ</a></li>
                                <li><a href="#">ナイキ 5 ロニーニョクラブ</a></li>
                                <li><a href="#">ナイキ 5 ボンバ</a></li>
                                <li><a href="#">ナイキ 5 ガト</a></li>
                                <li><a href="#">ナイキ 5 ルナガト</a></li>
                            </ul>
                        </div> 
                        <div id="tab2" class="tab_content"> 
                            <h3>お買い得商品ズラリ！</h3> 
                            <ul>
                                <li><a href="#">レプリカ セール</a></li>
                                <li><a href="#">トレーニングウェア セール</a></li>
                                <li><a href="#">プラクティスウェア セール</a></li>
                                <li><a href="#">アクセサリー セール</a></li>
                            </ul>
                        </div> 
                        <div id="tab3" class="tab_content"> 
                            <h3>予約製品について</h3> 
                            <p>ただ今、各国リーグシーズン真っ只中、アジアカップ開催中のため、予約製品はありません。今後UEFAチャンピオンズリーグの新しいグッズが販売予定です。情報が入り次第、お知らせします。</p>
                        </div>
                    </div>
                </div>
<!-- .standard Start -->
                <div class="standard">
                    <div class="login">
                       <!-- Loginform -->
                    </div>
                    
                    <div class="search">
                        <h3>商品検索</h3>
                        <form name="searchForm" action="index04.php" method="post">
                            <input type="hidden" name="cmd" value="searchProcedure"/>
                            <div class="box" id="search">
                                <dl id="txtSea" class="clearfix">
                                    <dt>商品名</dt>
                                    <dd>
                                        <label><input type="text" name="itemNameText" class="text" value=""/></label>
                                    </dd>
                                </dl>
                                <dl id="ckbSea" class="clearfix cat">
                                    <dt>カテゴリ</dt>
                                    <dd>
                                        <label><input type="checkbox" name="wdb" value="1" />WD Blue</label>
                                        <label><input type="checkbox" name="wdg" value="1" />WD Green</label>
                                        <label><input type="checkbox" name="wdk" value="1" />WD Black</label>
                                        <label><input type="checkbox" name="wdr" value="1" />WD RED</label>
                                        <label><input type="checkbox" name="wdv" value="1" />WD VelociRaptor</label>
                                        <label><input type="checkbox" name="wdse" value="1" />WD Se</label>
                                        <label><input type="checkbox" name="wdxe" value="1" />WD Xe</label>
                                        <label><input type="checkbox" name="wdre" value="1" />WD Re</label>
                                    </dd>
                                </dl>
                                <div id="btnSea" class="bottom">
                                    <input name="searchButton" type="submit" value="検索" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="link">
                    <a href="#">商品一覧</a>
                    <a href="#">カートをみる</a>
					<a href="#">member?</a>
					</div>
                </div>
<!-- End of .standard -->
            </aside>
<!-- End of aside -->
        </section>
<!-- End of #main -->
<!-- footer Start -->
        <footer>
            <section id="footer-area">
                <section id="footer-outer-block">
                    <aside class="footer-segment">
                        <h4>会社概要</h4>
                    </aside>
                    <aside class="footer-segment">
                        <h4>店舗情報</h4>
                    </aside>
                    <aside class="footer-segment">
                        <h4>採用情報</h4>
                    </aside>
                    <aside class="footer-segment">
                        <h4>個人情報について</h4>
                    </aside>
                    <div class="copy">
                        <p>&copy; 2011-2013 <a href="#">dams.com</a></p>
                    </div>
                </section>
            </section>
        </footer>
<!-- End of footer -->
    </div>
<!-- End of #wrapper -->
</body>
</html>
