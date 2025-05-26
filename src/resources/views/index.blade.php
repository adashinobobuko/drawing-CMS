@extends('layouts.app')

@section('content')
    <body>
        <p class="title fadeup">Welcome to my homepage</p>
        <ul class="menu">
            <li><a href="#profile">Profile</a></li>
            <li><a href="#">My CMS</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">BBS</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="main">
            <img src="" alt="メイン画像" class="fadeup">

        <h1 id="profile">Profile</h1>
        
        <h2 class="fadeup">
            PN <br />
            化野 ボブ子（プログラマーネーム、ゲーム等のHNとして使用予定）<br />
            化野 桔梗（イラストレーター、漫画家のPNとして使用予定）
        </h2>
        <p class="fadeup">※本名の開示は、クライアント様およびお取引確定後に対応しております。</p>

        <div class="infomation">
            
            <p>

                出身は長野、大学で一度岐阜に出ましたが今は長野在住です。都会は怖いので旅行で行くくらいにとどめてます。
                1995年12月6日生まれ　長野県の高校を卒業後、岐阜県の医療系の短期大学に進学。<br />
                経験業種は眼科、眼鏡屋、医療事務、事務系の派遣。PCの使用とクリエイティブ分野の仕事がしたいと思い
                Webデザインの勉強を開始する。無料の訓練校に通いHTML/CSSを習得、今はオンラインスクールで主にPHP、Laravelを学習中。<br />
                デジタルの画像編集、イラスト制作は趣味で18年行っていたそれを仕事に活かしたいと強く思う。<br />
                プログラミングスクールにて主にPHP、Laravelを学習中。皆様に高品質のものをお届けするためにイラスト、漫画の修行も並行して行っています。<br />
                <br />
                <br />
                「化野」は「あだしの」と読みます。なんだか可愛らしいと思ったので使用してます。<br />
                化野とお呼びください。<br />
                趣味はゲーム（PC、switch、スマホ）、お絵描き（イラスト・漫画）、大きい声で歌うことです。<br />
                爬虫類及び両生類の生き物が好き（だけど飼っていない！）<br />
                PHPとLaravelでWeBアプリの作成が可能、明るめのものからダークでシックなイラスト、漫画を描くことが可能です。<br />
                <br />
            </p>
            
        </div>

        <h1 id="contact">Contact me</h1>
        <h3>
            工事中…
        </h3>
        <!--
        <div class="mail_to_form">
            <form action="mail.php" method="get">
                <table>
                    <tr>
                        <th>name:</th>
                        <td><input type="text"  name="name"></td>
                    </tr>
                    <tr>
                        <th>title:</th>
                        <td><input type="text"  name="title"></td>
                    </tr>
                    <tr>
                        <th>message:</th>
                        <td><textarea></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button>send</button></td>
                    </tr>
                </table>
            </form>
        </div>
        -->


        <footer class="foot">
            <div class="copyright">
                &copy;2024 Haruka Yokouchi<br>
                <a href="https://www.pakutaso.com">ぱくたそ</a>様<br>
                フリー素材拝借しております。
            </div>
        </footer>
    </body>
@endsection