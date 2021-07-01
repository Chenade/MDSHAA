<!doctype HTML5>

<html>

<head><link rel="icon" href="./img/logo-icon.png" />
    <link rel="stylesheet" href="./main.css">
    <title>明道中學校友會</title>
</head>

<body>

<div class="list2" data-media="mobile">
    <div class="list2_inside">
        <div><a href="./index.php"><img src="./img/logo2.png" class="logo"></a></div>
        <div id="open_but"><button onclick="mobile_menu('open')"  class="list2_but">MENU</button> </div>
        <div id="close_but" style="display: none"><button onclick="mobile_menu('close')"  class="list2_but">CLOSE</button> </div>

    </div>
</div>

<div class="mobile_menu" id="mobile_menu" style="display: none">
    <div><button onclick="mobile_menu('about')" class="mobile_option">X</button></div>
    <div class="mobile_sub" id="main" >
        <div><button onclick="mobile_menu('news')" class="mobile_option" style="border-top: black solid 1px;">最新消息</button></div>
        <div><button onclick="mobile_menu('about')" class="mobile_option">關於校友會</button></div>
        <div><button onclick="mobile_menu('info')" class="mobile_option">明道人會訊</button></div>
        <div><button onclick="mobile_menu('database')" class="mobile_option">明道人資料庫</button></div>
        <div><button onclick="mobile_menu('service')"  class="mobile_option">校友服務</button></div>
        <div><button onclick="mobile_menu('link')"  class="mobile_option">校友連結</button></div>
        <div><button onclick="mobile_menu('donate')" class="mobile_option">愛校捐款</button></div>
    </div>

    <div class="mobile_sub" id="news" style="display: none">
        <div><button onclick="mobile_menu('main')"       class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./news.php"  class="mobile_option mobile_first">會務訊息</button></div>
        <div><button onclick=location.href="./album.php" class="mobile_option">活動花絮</button></div>
    </div>

    <div class="mobile_sub" id="about" style="display: none">
        <div><button onclick="mobile_menu('main')"        class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick="mobile_menu('intro')"       class="mobile_option mobile_first">校友會介紹</button></div>
        <div><button onclick="mobile_menu('member')"      class="mobile_option">校友會成員</button></div>
        <div><button onclick="mobile_menu('org')"         class="mobile_option">校友會組織</button></div>
        <div><button onclick=location.href="./album.php"  class="mobile_option">傑出校友</button></div>
    </div>

    <div class="mobile_sub" id="intro" style="display: none">
        <div><button onclick="mobile_menu('about')"          class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./history.php"   class="mobile_option mobile_first">成立緣起</button></div>
        <div><button onclick=location.href="./badge.php"     class="mobile_option">識別標章</button></div>
    </div>

    <div class="mobile_sub" id="member" style="display: none">
        <div><button onclick="mobile_menu('about')"          class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./wish.php"      class="mobile_option mobile_first">老校長的嘉許</button></div>
        <div><button onclick=location.href="./director.php"  class="mobile_option">理事長的話</button></div>
        <div><button onclick=location.href="./member.php"    class="mobile_option">理監事團隊</button></div>
        <div><button onclick=location.href="./past.php"      class="mobile_option">歷屆理事長</button></div>
        <div><button onclick=location.href="./team.php"      class="mobile_option">服務團隊</button></div>
    </div>

    <div class="mobile_sub" id="org" style="display: none">
        <div><button onclick="mobile_menu('about')"           class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./law.php"        class="mobile_option mobile_first">組織章程</button></div>
        <div><button onclick=location.href="./structure.php"  class="mobile_option">組織架構</button></div>
    </div>

    <div class="mobile_sub" id="info" style="display: none">
        <div><button onclick="mobile_menu('main')"              class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./info.php"         class="mobile_option mobile_first">最新會訊</button></div>
        <div><button onclick=location.href="./contribution.php" class="mobile_option">投稿</button></div>
    </div>

    <div class="mobile_sub" id="database" style="display: none">
        <div><button onclick="mobile_menu('main')"        class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./map.php"    class="mobile_option mobile_first">明道人地圖</button></div>
        <div><button onclick=location.href="./notion.php" class="mobile_option">明道人動態</button></div>
    </div>

    <div class="mobile_sub" id="service" style="display: none">
        <div><button onclick="mobile_menu('main')"       class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick="mobile_menu('help_menu')"       class="mobile_option mobile_first">明道人幫明道人</button></div>
        <div><button onclick="mobile_menu('goods_menu')"      class="mobile_option">明道人福利社</button></div>
        <div><button onclick="mobile_menu('home_menu')"       class="mobile_option">明道人回娘家</button></div>
        <div><button onclick=location.href="./apply.php" class="mobile_option">證件申請</button></div>
    </div>

    <div class="mobile_sub" id="help_menu" style="display: none;">
        <div><button onclick="mobile_menu('service')"            class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./company.php"    class="mobile_option mobile_first">企業徵才</button></div>
        <div><button onclick=location.href="./find.php"       class="mobile_option">尋人啟事</button></div>
    </div>

    <div class="mobile_sub" id="goods_menu" style="display: none">
        <div><button onclick="mobile_menu('service')"            class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./souvenir.php"    class="mobile_option mobile_first">紀念品專區</button></div>
        <div><button onclick=location.href="./store.php"       class="mobile_option">優惠商家</button></div>
    </div>

    <div class="mobile_sub" id="home_menu" style="display: none">
        <div><button onclick="mobile_menu('service')"            class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./wedding.php"    class="mobile_option mobile_first">明道人婚紗</button></div>
        <div><button onclick=location.href="./classmate.php"       class="mobile_option">班級同學會</button></div>
    </div>

    <div class="mobile_sub" id="link" style="display: none">
        <div><button onclick="mobile_menu('main')"            class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./oversea.php"    class="mobile_option mobile_first">海內外聯絡</button></div>
        <div><button onclick=location.href="./connection.php" class="mobile_option">社群連結</button></div>
        <div><button onclick=location.href="./join.php"       class="mobile_option">加入校友會</button></div>
    </div>

    <div class="mobile_sub" id="donate" style="display: none">
        <div><button onclick="mobile_menu('main')"               class="mobile_option mobile_blank">< 回上層</button></div>
        <div><button onclick=location.href="./donate.php"        class="mobile_option mobile_first">捐款方式</button></div>
        <div><button onclick=location.href="./donate_record.php" class="mobile_option">捐款芳名錄</button></div>
        <div><button onclick=location.href="./donate_report.php" class="mobile_option">線上回報表單</button></div>
    </div>

</div>

<div class="list">
    <a href="./index.php"><img src="./img/logo2.png" class="logo"></a>
    <a href="./index.php"><img src="./img/logo3.png" class="logo2"></a>
    <ul class="drop-down-menu">

        <li>
            <a href="./news.php">最新消息</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li><a href="./news.php">會務訊息</a></li>
                <li><a href="./album.php">活動花絮</a></li>
            </ul>
        </li>

        <li>
            <a href="#">關於校友會</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li>
                    <a href="#">校友會介紹</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./history.php">成立緣起</a></li>
                        <li><a href="./badge.php">識別標章</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">校友會成員</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./wish.php">老校長的嘉許</a></li><li><a href="../director.php">理事長的話</a></li>
                        <li><a href="./member.php">理監事團隊</a></li>
                        <li><a href="./past.php">歷屆理事長</a></li>
                        <li><a href="./team.php">服務團隊</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">校友會組織</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./law.php">組織章程</a></li>
                        <li><a href="./structure.php">組織架構</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./alumni.php">傑出校友</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="./info.php">明道人會訊</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li><a href="./info.php">最新會訊</a></li>
                <li><a <li><a href="./contribution.php">投稿</a></li>
            </ul>
        </li>

        <li>
            <a href="#">明道人資料庫</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">

                <li><a href="./map.php">明道人地圖</a></li>
                <li><a href="./notion.php">明道人動態</a></li>
            </ul>
        </li>



        <li>
            <a href="#">校友服務</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li>
                    <a href="./help.php">明道人幫明道人</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./company.php">校友徵才</a></li>
                        <!-- <li><a href="./job.php">求職資訊</a></li> -->
                        <li><a href="./find.php">尋人啟事</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./apply.php">證件申請</a>
                </li>
                <li>
                    <a href="./goods.php">明道人福利社</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./souvenir.php">紀念品專區</a></li>
                        <li><a href="./store.php">優惠商家</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./home.php">明道人回娘家</a>
                    <ul  style="list-style:none; padding:0px; margin:0px;">
                        <li><a href="./wedding.php">明道人婚紗</a></li>
                        <li><a href="./classmate.php">班級同學會</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">校友連結</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li><a href="./oversea.php">海內外聯絡</a></li>
                <li><a href="./connection.php">社群連結</a></li>
                <li><a href="./join.php">加入校友會</a></li>
            </ul>
        </li>

        <li>
            <a href="./donate.php">愛校捐款</a>
            <ul  style="list-style:none; padding:0px; margin:0px;">
                <li><a href="./donate.php">捐款方式</a></li><li><a href="./donate_record.php">捐款芳名錄</a></li>
                <li><a href="./donate_report.php">線上回報表單</a></li>
            </ul>
        </li>


    </ul>
</div>

</body>

</html>