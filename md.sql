-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `md`
--

-- --------------------------------------------------------

--
-- Table structure for table `104`
--

CREATE TABLE `104` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `104`
--

INSERT INTO `104` (`id`, `year`, `class`, `file`) VALUES
(5, 104, 'X3C1', './img/pdf/104_3-1.pdf'),
(6, 104, 'K3N1', './img/pdf/104_3-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `105`
--

CREATE TABLE `105` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `date`, `intro`, `cover`, `link`) VALUES
(1, '104學年度張文榮獎學金頒獎', '2016-05-04', '104學年度張文榮獎學金頒獎', './img/album/DSC_8979.JPG', 'https://goo.gl/photos/MfGqB6mubmKTCyadA'),
(3, '2020薪傳獎', '2020-06-03', '', './img/album/IMG_2831.jpg', 'https://photos.app.goo.gl/M1aP3DP15XZhd2Pu9'),
(5, ' 109級明道中學校友會畢業生座談會', '2020-05-27', '', './img/album/IMG_7355.JPG', 'https://photos.app.goo.gl/ckhfpNhG1F3KPzZX8'),
(6, '校友會百工百業傑出的明道人II', '2020-06-10', '明道幸福曰💕加興企業拜訪\r\n\r\n人生中最大的幸福就是\r\n一群與你有特殊情感的人\r\n一直陪你，看你，以你為傲\r\n也沒有停止過的分享你的優秀\r\n陶醉的傾聽你訴說著一個\r\n又一個職場挑戰與豐盛人生！\r\n\r\n如何讓這個傳統的家族企業\r\n翻轉成為稱霸全球的化妝品代工廠\r\n舉凡⋯資生堂，高絲，雅芳，露華濃，雅詩蘭黛，倩碧，克蘭斯⋯⋯這些知名化粧品公司\r\n的首選，長年合作對象！\r\n\r\n明道人明道事\r\n明道人一家人\r\n明道人的情感從來與眾不同💕\r\n\r\n天很藍，雲很美的午后\r\n我們延著74號走過美麗的139線\r\n來到了福興工業區內\r\n大的像學校一般的廠區\r\n大約是7．2公頃\r\n的加興生化科技園區\r\n\r\n走！今天明道校友會伙伴\r\n來看看的是這位傑出的明道人\r\n加興企業總經理～盧玉娟學姐\r\n玉娟學姐平常在工作是\r\n非常投入無比忙碌的\r\n三大廠區目前有900位工作人員\r\n但她一聴到我們要去\r\n除了馬上熱情歡迎大家\r\n而且還準時趕來迎接大家\r\n成功人士是守時的！\r\n\r\n另讓我們驚喜的是\r\n學姐竟然特別穿著\r\n熟悉明道人的T恤\r\n來和大家聚會💕\r\n咖啡味，人情味充滿午後時光\r\n一群明道人無所不談\r\n我們感染了滿滿的加興企業的驕傲，也吸收了滿滿的成功經驗正能量，真是太開心了！😄\r\n瞬間屬於明道人的榮耀與熱情\r\n都在這個快樂的大家庭中延續著！\r\n\r\n明道人⋯共享，共老，共好💕💕\r\n明道人⋯在百工百業好優秀！💕\r\n#明道校友會常務理事吳美玲撰', './img/album/ceac4cd63856ea99460f7cebdaf2aa18d_20282875_200701_0166.jpg', 'https://photos.app.goo.gl/CQe28t7Rcr31W9rb9');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `honor` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `year`, `honor`, `img`) VALUES
(3, '', '', '', './img/alumni/105419620_4409936799023971_1812730449711686424_o.jpg'),
(4, '林淑瑛教授', '104年傑出校友', '林淑瑛教授，民國80年餐飲管理科畢業，在校時曾獲台灣省技能競賽第一名，全國技能競賽銀牌獎，後通過國手選拔賽，代表國家參加1991年於荷蘭舉辦的國際技能競賽，獲西餐烹飪組優勝，並保送專科學校，專科畢業後工作兩年，自覺所學尚不足應付工作所需，乃更上層樓，至美國愛荷華（Iowa）州立大學插班大學餐旅管理系，再進入研究所，修得碩士學位回國。先任教於明道大學，後再考入香港理工大學酒店及旅遊管理研究所，獲得博士學位。現任教於高雄餐旅大學，並兼任國際事務處國際合作組組長工作。\r\n', './img/alumni/12998495_947104842072444_5398893854480228829_n.jpg'),
(7, '邱冠銘醫師', '104年傑出校友', '邱冠銘醫師，民國93年高中部畢業，是明道六年一貫的優秀校友。國中時擔任藍色動感樂團隊長，是同儕眼中聰明又多才的領頭羊，國三畢業獲思源獎。往後三年，他以思源獎的榮光領袖群倫，立下藍衫學子能讀會玩、動靜皆宜的好榜樣。高中的他，是數學競賽的常勝軍，入選數學奧林匹亞選手，也是管樂社社長及首席黑管；高三那一年，更贏得校慶馬拉松賽冠軍。在大學推薦甄選過程中，以精彩的備審資料及面試時展現的自信，讓教授拋開分數，錄取他進入高雄醫學大學牙醫系，而冠銘的備審資料也成為高級部流傳許久的「典範版」。畢業後曾是台中榮總最受歡迎的牙醫師，也是現在台中最具潛力的牙醫師。但，不管他在那一崗位擔任那種角色，他是一個熱愛明道的明道人。', './img/alumni/49279870_1928317557217938_5361128292269162496_n.jpg'),
(8, '曾偉杰醫師', '105年傑出校友', ' 曾偉杰醫師，民國88年於本校高中部畢業，偉杰是明道六年一貫的優秀校友，國中時以第二名的成績直升模範班，高中三年均保持全校總榜第一名。畢業時更以勝過建中、一中等校學生的593.5高分獲全國榜首，進入台大醫學院就讀。偉杰在繁忙的功課之外，從未放棄他最愛的音樂，他拉得一手好提琴，在校期間一直參加明道管樂社。進入台大以後，功課仍名列前茅，並獲書券獎的榮譽。他多次應母校老師邀請回到校園，指導學弟妹的課業準備，並在輔導期刊中撰寫許多文章，分享他一路學習成長的心得。每年學校管樂社演出時，偉杰一定排除萬難，在繁重的醫學課程中安排時間，回到學校參加演出活動。台大畢業後，因成績優秀，留在台大醫院擔任小兒科醫師，並因精湛的醫術升任兒童醫院急診科主任，同時在台大醫學院擔任講師，負責醫學傳承的教學工作。\r\n', './img/alumni/明道中學2016年【高中部】畢業典禮_158.JPG'),
(9, '洪易藝術家', '105年傑出校友', '  充滿想像力的台灣原生藝術家洪易，\r\n在明道美工科取得他人生最重要的一個學位。\r\n洪易在明道美工科習得一手硬工夫，打下深厚的美學底子。將心、腦獻給了環境，用手、眼將感受記錄下來，以豐富的色彩，發現台灣所見美麗的人、事、物，並賦予藝術的生命。作品獨樹一格的他，而今已然是兩岸及國際知名的藝術大師。\r\n洪易於1988年從明道中學美工科畢業，在學期間對立體、色彩及造型表現等課程產生\r\n極高的學習興趣。畢業後他以畫圖寫日記，植根於本土藝術，進而以關懷社會、感知環境來豐富作品內容，並運用他在學校奠定的堅實美學基礎，將點子轉化為藝術，創作出一件件愉快幸福的作品，而後揚名於兩岸及國際，目前已是台灣藝術家的代表人物。', './img/alumni/2016年【綜合高中部】畢業典禮_099.JPG'),
(10, '廖勇柏教授', '105年傑出校友', '中山醫學大學廖勇柏教授是校長在國中時的同班同學，獲得博士學位後，進入中山醫學大學擔任公共衛生系教授。他非常關心明道，兩個孩子都以極優異的成績於明道畢業。曾擔任家長會副會長，也是校友會中的重要成員，並熱心支持校務，經常捐款協助建設，長期指導畢業同學選填志願及模擬面試。\r\n他鼓勵同學要「發現自己」找對方向，做好「自我管理」。而時間的分配則一定要知道自己最需要處理的是什麼事情，才能將時間做最有效的運用。當個人行有餘力時，不要忘了服務人群，關懷社會，才會找到真正的快樂。 ', './img/alumni/2016年【國中部】畢業典禮_089.JPG'),
(11, '郝岫音總經理', '106年傑出校友', '郝岫音總經理於本校65年初中部、68年高中部畢業，是明道模範班甲組第一位考進清華大學的女同學。後至美國德州州立大學深造，獲得電腦科學(Computer Science)碩士學位，專攻軟體工程人機介面(Human Interface)研究。\r\n    返台後任職資訊工業策進會多媒體實驗室，後參與明道大學創校，擔任資管系教授並創立育成中心，其後自行創業，設立友蘭科技行銷公司，擔任總經理。\r\n    郝校友深度參與行動通訊牽動的產業革命，特別是影像辨識、3D/VR、電子商務、農產品溯源、物聯網、大數據分析及太陽能等科技在農業、服務業及文化創意產業的跨領域整合應用。在花卉和有機產業的影響力遍及荷蘭、德國、美國及大陸。\r\n    她與中國農業大學教授團共同出版的《現代觀光旅遊農業園區規劃與案例分析》一書被列入中國農業規劃師進階必讀的20本書，對於大陸休閒農業及三產融合的觀念起了帶動的作用。\r\n', './img/alumni/GCP_4109.JPG'),
(12, '林明珠博士', '106年傑出校友', '林明珠博士83年於明道餐飲管理科畢業，在校時參加全國技能競賽，獲西餐烹飪第一名，並取得國手資格，代表台灣到法國參加國際技能競賽。曾在臺灣君悅酒店、長榮桂冠酒店由最基層的廚房學徒做起，後至美國紐約餐飲學院進修，取得烹飪藝術管理學士學位，留美期間分別參加蕃茄菜單設計與火雞肉菜單設計，均得到第一名榮譽。再到英國布萊頓大學取得餐旅管理碩士學位。後申請到教育部留學獎學金，到英國蘇格蘭取得餐旅博士學位。\r\n    她是國際烹飪比賽的國家級裁判與訓練師及烹飪比賽裁判長，也是烹飪證照檢定的評審老師。分別於2008及2016年訓練展能選手參加韓國及法國國際展能技能競賽獲得第一名。曾代表香港理工大學到杜拜、泰國、中國大陸、香港等地，從事餐飲輔導顧問並為企業量身打造餐飲課程。還曾應土耳其旅遊局邀請演講「香港美食營銷」，及應香港TEDx邀請談「道地美食與創意」主題。有數本烹飪相關著作及DVD。目前在香港理工大學擔任國際餐飲助理教授，及國際葡萄酒碩士課程副主任。', './img/alumni/1060609_2017年高職部畢業典禮_正典_047.JPG'),
(13, '謝旻憲校長', '106年傑出校友', '謝旻憲校長81年於本校高中部畢業，後考入嘉義師範學院特殊教育系就讀。服役完後至卓蘭國小任教，歷經導師、教學組長，總務、訓導、輔導等主任職務。公餘不忘讀書，至臺東大學教育研究所進修，取得碩士學位。後因工作績優，調升苗栗縣政府教育處國教科擔任課程督學。期間參加政治大學國民中小學校長專業發展班訓練，及教師研習中心校長儲訓班受訓，獲得校長任用資格。100年起連續擔任苗栗僑成國小兩任校長迄今。\r\n   謝校長專長為特殊教育，對學生極富愛心與耐心。經由他的帶領，組成熱情、年輕有活\r\n力的僑成團隊，用心發掘每個孩子的亮點，為孩子營造出多元、自信、創意的校園。率隊\r\n參加比賽更是常勝軍，曾獲得苗栗縣戲劇、英語朗讀、熱歌勁舞及棒球比賽優等獎，全國\r\n舞龍、客語戲劇、音樂等比賽特優，並被教育部評定為閱讀、補救教學、資優教育優等獎，\r\n及一校一藝團、鄉土語言、體育訪視特優學校。讓僑成國小成為苗栗縣辦學極為成功的學\r\n校，受到十數家電子及平面媒體訪問與報導。', './img/alumni/1060609_2017年國中部畢業典禮_正典_080.JPG'),
(14, '杲中興院長', '107年傑出校友', '杲中興院長是明道六年一貫培育的第一屆模範班學生。高三畢業原考取國立中央大學，因希望接觸航空工業，並受到教官的感召，懷抱科技報國的理想，考入中正理工學院航空工程系。畢業後，擔任空軍聯隊飛修官，再考入中正理工學院航空工程研究所，獲得碩士學位。後進入中科院電子所，經3年工作，申請進入美國加州大學戴維斯分校，取得機械航空博士學位。\r\n    杲院長返國後，進入中科院航空研究所，運用他的飛航知識，研發高科技飛行模擬器。因工作績優，被擢升至火箭飛彈研究所擔任所長職務，並於任內晉升少將，隨後升任中科院首席副院長。2015年軍職屆齡退伍，改為科聘副院長，而於106年4月底升任院長。杲院長今後將帶領中科院朝向國際化發展，將純粹的國防研究轉型為國防產業，結合行銷、通路及產業鏈，完成促進國家發展的另一項使命。\r\n', './img/alumni/正典活動_1070609_2018高中暨綜高部畢業典禮_071.JPG.JPG'),
(15, '曾柏文博士', '107年傑出校友', ' 今天畢業典禮的主賓曾柏文是79年明道國中部畢業的學長，幾年前的太陽花學運，為了鼓勵學生思辨，在學校支持下，現在在香港大學的江旻諺學長主辦了一場論壇，邀請的超人氣主講者就是柏文。長達三小時的演講吸引近300位師生，共同研修了一門珍貴的民主學分。\r\n 曾柏文的學經歷非常豐富，台大心理系畢業後以優異成績進入英國倫敦政經學院攻讀社會學碩士，並取得英國華威大學社會學博士學位。他的專長領域是知識社會學、科技與社會 (STS)及亞洲研究。曾參與荷蘭、新加坡等國家研究中心的計畫，以及歐盟「知識政治與融合科技」計畫，回國後先後擔任天下遠見雜誌的編輯和行銷企劃，國會法案的助理與選舉幕僚，是天下獨立評論、聯合線上專欄作家，也是國內知名的社會觀察家。近幾年，他投身台灣新世代關懷協會，是台中世代願景論壇召集人、青鳥書店社會類書的選書人，現任新北市政府參議。但是你們知道嗎？他也是第25屆世界化學奧林匹亞金牌得主，那是 1993年的事。\r\n    因為看到柏文一篇有關公投的文章，讓江旻諺開始了對社會公共議題的關注。今天，柏文來到國三畢業典禮的會場，我相信他接下來對學弟妹的勉勵，一定會激勵許多有想法有行動力的明道人。\r\n', './img/alumni/國中_正典活動_1070609_2018國中部畢業典禮_071.JPG'),
(16, '盧玉娟總經理', '107年傑出校友', ' 盧玉娟校友在高中就學階段，因家中經營之「加興企業公司」業務繁忙，在必須兼顧家裡事業的情況下，選擇至明道中學補校商科就讀。於事業擴大、穩定後，再進入中興大學EMBA領袖組，及大葉大學EMBA國際企業金融研究所就讀，獲碩士學位。\r\n    盧校友在加興企業擔任總經理，為公司業務實際負責人。在她一手擘畫下，加興企業由占地1.7公頃之單純生產化妝品容器的工廠，擴充為占地6.5公頃，獲國家級GMP認證的 生化科技園區，再於2016年增設「加湘美」時尚館，生產品項高達上萬種，並由化妝品容器業務擴充至化妝品充填業務，光是口紅生產量即達月產1000萬支，年營業額超過20億元，為全國最大的化妝品容器製造商。全球知名品牌的化妝品，包括雅詩蘭、資生堂、高絲及雅芳等，幾全是加興企業的客戶，目前正朝向亞洲第一邁進。\r\n   盧總經理公忙之餘，還曾任明道中學校友會理事長，及各種公會、協進會、工業會之理事及社長等職務，為社會公益活動付出心力。她曾獲經濟部工業局傑出經理人、第11屆中區傑出經理人、第23屆國家十大傑出經理人及中華民國第40屆青年創業楷模獎勵。', './img/alumni/正典活動_1070608_2018高職部畢業典禮_158.JPG'),
(17, '謝富名創始人', '108年傑出校友', '謝富名校友，是明道六年一貫培育的學生，從小接受國學薰陶及培養，是作文、朗讀、即席演講等語文競賽的常勝軍。在校時曾參加由明道文藝與中央日報聯合舉辦的全國學生文學獎，榮獲高中散文組首獎。1993年高中部畢業後考入台灣大學國際企業學系。之後負笈美國TOP 10名校杜克大學 Fuqua商學院， 2002年取得MBA學位。\r\n    富名有15年的金融業經歷，其中在美商花旗集團的中、港、臺三個分行，工作了超過10年，服務的客戶都是亞太地區的大型上市企業。她還經過花旗集團認證為內部培訓師，培訓同事“簡報技巧”，以及儀態、肢體語言在職場上的運用。\r\n   她還出版過三本書-《MBA女孩》《成功求職Must Read》以及《透視大陸金色巨塔》。\r\n    她目前也是一家新創公司的創始合夥人，這家公司在上海，專門輔導大學生找工作，短短3年，這家公司已經是這個領域的領導企業。\r\n    她的座右銘是 Help each other succeed! 幫助別人，就是成就自己！\r\n', './img/alumni/1080601_2019高中部暨綜合高中部畢業典禮_正典_095.JPG'),
(18, '游文相董事長', '108年傑出校友', '  游文相董事長民國67年於明道中學汽修科畢業，75年畢業於修平技術學院工業工程系。後因對於企業經營管理方面的知識需求，乃再度進修，92年於Barrington University畢業，取得企業管理學士學位，104年於東海大學高階經營管理研究所畢業，取得碩士學位。現雖負責三家大型企業之營運工作，業務異常忙碌，猶不忘進修，仍在東海大學工業工程與資訊管理研究所博士班三年級就讀。 \r\n游董事長進入社會後，發揮在明道所學的汽車專才，曾於多家國內外知名汽車公司擔任廠長、董事長等職位。後累積豐富的汽車物流經驗，於85年與美國克萊斯勒汽車公司，共同於台中港規劃佔地15萬平方公尺，亞太第一個車輛營運物流中心--京揚國際公司，擔任董事長。營運包括國際及國內配送之跨國物流服務，成功的為BENZ、BMW、CHRYSLER等國際汽車及日商三井、台灣日東光學、台灣康寧、美國SBC、ASI自行車貿易..等國內外產業提供物流服務，榮獲經濟部出進口前500大績優廠商殊榮，並為第一家取得AEO認證，將經營範圍橫跨至農業，創造國內農業加值前店後廠首例。此外，游董事長還身兼國詮企業公司、京誠(Vespa)公司總經理。創建Vespa在亞洲最大的旗艦店，讓客戶享受國際同步一流的品牌服務與體驗。\r\n游董事長熱心社會及企業服務，曾擔任扶輪社社長、台灣全球運籌發展協會理事長、行政院生產力產業諮詢委員會委員、行政院國際經貿策略小組產業諮詢委員。現任經濟部物流園區審查委員、亞洲物流與供應鏈管理協會副會長、中華採購與供應管理協會理事、台灣永續供應鏈協會監事等職務。並參與明道校友會二十多年，目前擔任副理事長，為校友會發展出錢出力，貢獻良多。                  \r\n', './img/alumni/1080531_2019高職部畢業典禮_121.JPG'),
(19, '蕭勝文講師', '108年傑出校友', ' 蕭勝文是明道六年一貫培育的優秀學生，90年國中畢業後，直升進入綜高部學術學程。但他從小就喜愛畫畫，為了追尋自己的興趣，高一下學期，毅然放棄學術學程，轉入設計群就讀。在明道美工學程，創作的作品屢受師長讚賞，93年並以優異的成績考入台灣科技大學設計系，四年後，順利進入該系研究所，獲得碩士學位。目前則一面在台灣科技大學設計研究所博士班二年級進修，一面在該校設計系擔任專案講師，教授三維動畫專案製作與管理、設計專題及敘事與鏡頭等課程。\r\n\r\n    勝文不但在設計方面展現天份，更因明道多元教育的啟發，使他在文學方面也紮下深厚的基礎。於服役期間，參加全國國軍藝文金像獎比賽，獲得短篇小說銅牌獎（第三名）。  98年勝文以「愛子」入圍號稱「動畫奧斯卡獎」捷克AniFest國際動畫影展(AniFest)，104年再以描述樹蛙捕食與獵物間生死互動的動畫作品「我看到，僅此一見，一幅壯觀的畫面」再度入選，創下台灣人兩度入選的紀錄。這部動畫同時入選SIGGRAPH 及 荷蘭動畫影展HAFF。這樣傑出的成就，當然與勝文的文學與設計兩項長才有關，他能將富有哲理的文字，運用動畫技巧明確傳遞給觀眾，讓人能體會到畫面背後他想傳達的深刻道理。這也就是在眾多世界級的參賽作品中，能獲得評審青睞，脫穎而出的關鍵。\r\n\r\n    勝文運用他在二維、三維電腦動畫製作、動態影像攝製及專案規劃與管理的專長，成立了個人工作室，空餘之暇並曾回到明道兼課，指導學弟妹。尤其難能可貴的是，他在已經極為忙碌的行程中抽出時間，為母校製做了兩部動畫影片，成為明道對外推介學校特色的利器。勝文的這些傑出表現，的確是「明道人」的典範，值得學弟妹參考學習。\r\n', './img/alumni/1080601_2019國中部畢業典禮_正典_175.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `board_member`
--

CREATE TABLE `board_member` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `graduate` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `company` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `board_member`
--

INSERT INTO `board_member` (`id`, `name`, `year`, `graduate`, `job`, `company`, `img`) VALUES
(2, '游文相', '67汽三1', '東海大學 工業工程與經營資訊學系', '理事長', '京揚國際(股)公司董事長', './img/director.jpg'),
(3, ' 洪宏明', '71美三2', '國立政治大學 政治系', '副理事長', '三商美邦人壽業務經理', './img/director.jpg'),
(4, '董希聖', '79餐三1', '弘光科技大學 食品營養科', '副理事長', '南山人壽業務經理', './img/director.jpg'),
(5, '林江棟', '76子三3', '國立暨南國際大學 經營管理(碩士)', '副理事長', '奧創能源科技有限公司業務副總', './img/director.jpg'),
(6, '黎淑娟', '64初三2', '中臺科技大學 健康產業管理碩士班', '常務理事', '遠雄人壽區經理', './img/director.jpg'),
(7, '賴渟婉', '74商三1', '明道中學綜商科', '常務理事', '力山家具公司經理', './img/director.jpg'),
(8, '陳秋蕊', '73美三1', '暨南大學 EMBA高階經營管理 碩士學位學程', '常務理事', '義豐欣企業股份有限公司負責人', './img/director.jpg'),
(9, '吳美玲', '79國貿三1', '明道中學 國際貿易科', '常務理事', '莉夫人法式海洋沙龍SPA負責人', './img/director.jpg'),
(10, '賴又瑄', '77廣三甲', '台中科技大學 商業設計系', '常務理事', '自由繪畫創作', './img/director.jpg'),
(11, '顏文彬', '79資訊三3', '崑山工專 工業工程', '理事', '美利達工業股份有限公司高級工程師', './img/director.jpg'),
(12, '余如惠', '91國三8 94綜三4', '逢甲大學財稅系', '理事', '僑泰廚具有限公司台中館會計', './img/director.jpg'),
(13, '林傑民', '73初三7 76高三1', '國立中興大學 植物系碩士', '理事', '雲林縣樟湖生態國民中小學', './img/director.jpg'),
(14, '吳美燕', '79國貿三甲', '國立臺中技院 附設空中進修學院應用商學系', '理事', '明道中學教務處課務組長', './img/director.jpg'),
(15, '林家揚', '92綜三4', '東吳大學商用數學系', '理事', '新超群文教機構主任', './img/director.jpg'),
(16, '許乃心', '79餐三1', '嶺東技術學院 資訊科技系', '理事', '框體藝術科技有限公司財務經理', './img/director.jpg'),
(17, '傅千鶴', '79國貿三1', '大葉大學 工業關係系', '理事', '家管', './img/director.jpg'),
(18, '盧秀禎', '76美三2', '亞洲大學資訊工程學系 碩士在職專班', '理事', '中國醫藥大學附設醫院教學部教材組資深管理師', './img/director.jpg'),
(19, '王云汝', '72高三5', '實踐家專家政科', '理事', '富邦人壽行銷襄理', './img/director.jpg'),
(20, '林育瑋', '94綜三7', '國立高雄餐旅大學中餐廚藝系', '理事', '南山人壽區經理', './img/director.jpg'),
(21, '鄭育麟', '66初三6', '國立暨南國際大學 管理學院在職碩士班', '理事', '富丞旅行社有限公司總經理', './img/director.jpg'),
(22, '蕭是程', '103綜三25', '嶺東科技大學 視覺傳達設計系', '理事', '是程視覺創意設計師', './img/director.jpg'),
(23, '胡東芝', '81國貿三1', '建國科技大學 應用外語系', '理事', '家管', './img/director.jpg'),
(24, '汪大久', '67初三1 70高三1', '成功大學物理系<br>De Paul University Master in Computer Science', '理事', '明道中學校長', './img/director.jpg'),
(25, '吳宜叡', '82美工三2', '英國倫敦藝術大學 中央聖馬丁設計學院 碩士工業設計', '理事', '樹德企業股份有限公司董事長', './img/director.jpg'),
(26, '蕭雅玲', '79國貿三1', '建國科技大學 國際企業管理系', '理事', '特力屋(股)資深專員', './img/director.jpg'),
(27, '黃建智', '87國三11 90綜三1', '輔仁大學經營管理MBA', '理事', '中國區塊鏈有限公司執行董事', './img/director.jpg'),
(28, '林華翊', '84國三2', '朝陽科技大學 企業管理系', '理事', '樺益企業(股)公司執行副總', './img/director.jpg'),
(29, '莊富荃', '97高三10', '逢甲大學 財務金融系', '理事', '遠智證券助理副總裁', './img/director.jpg'),
(30, '魏俊年', '93國三14 96高三2', '國立成功大學經濟系 雙主修統計系', '理事', '錠嵂保險經紀人股份有限公司襄理', './img/director.jpg'),
(31, '梁信雄', '75建三1', '國立暨南大學 EMBA經營管理碩士', '理事', '大熊建設股份有限公司負責人', './img/director.jpg'),
(32, '陳臸謙', '87國三4', '長榮大學 國際企業系', '理事', '得洲國際股份有限公司品牌經理', './img/director.jpg'),
(33, '廖專志', '65初三5 72高三3', '淡江大學 會計學系', '監事會召集人', '自由財務顧問', './img/director.jpg'),
(34, '高嘉隆', '76初三2 79高三2', '中山大學 財務管理學系', '常務監事', '兆威數位媒體財務長', './img/director.jpg'),
(35, '楊鳳琴', '67高商三己', '明道中學高商科', '常務監事', '僑泰廚具有限公司負責人', './img/director.jpg'),
(36, '林秀珍', '63高中', '東海大學肄業經濟系', '監事', '白金旅行社(股)有限公司董事長', './img/director.jpg'),
(37, '王慈泉', '60初三甲', '中臺醫專醫事檢驗科', '監事', '旅行社待聘導遊、領隊、經理人', './img/director.jpg'),
(38, '劉國隆', '64初三6', '國立成功大學 建築研究所碩士/美國康乃爾大學 飯店管理碩士', '監事', '劉國隆建築師事務所負責人', './img/director.jpg'),
(39, '洪玲娟', '70廣三2', '日本產業能率大學 企經所', '監事', '馨向企業管理顧問公司 總經理', './img/director.jpg'),
(40, '林志穎', '91機圖三1', '嶺東科技大學視覺傳達設計', '監事', '明道中學職員', './img/director.jpg'),
(41, '戴湘芸', '79餐三2', '明道中學 餐飲管理科', '監事', '崟峰企業有限公司特助', './img/director.jpg'),
(42, 'yangchi', '', '', '理事長', '108', './img/director.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `word` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '\'./img/director.jpg\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `name`, `word`, `img`) VALUES
(1, '社團法人明道中學校友會理事長  游 文 相', '傳承與前瞻 ~ 承明道榮光，領校友開創新局<br><br>\r\n「明道中學」從創校至今，歷經五十年的歲月，已擁有近十五萬校友，培育出無數專業優秀的人才，已然成為教育的領航者；活潑多元的養成教育，讓畢業的學生們擁有充分的本事和實力，能夠在職場上充分發揮並嶄露頭角，並已開枝散葉，遍布世界各地，成就了傲人的藍色榮耀。<br><br>\r\n明道校友會則在眾多學長姊經歷十七屆、三十多年的努力經營下，讓藍色榮耀持續發光，並於今年完成社團法人立案。很榮幸在參與校友會二十多年的此刻，能獲得校友們的支持，擔任立案後第一屆理事長，帶領這個榮譽團隊繼續前進。期望能藉由大家的力量，結合「產、官、學、 研」的傑出校友，謀求校友間團結合作，協助校友與母校共同成長；更希望明道校友們一起將這條聯繫的線串起來，編織成一個緊密的新時代網絡，成為明道人傳承的藍色驕傲。<br><br>\r\n期許明道校友會能成為一個「和諧、有趣、有愛、有理想」共同學習成長的服務團隊，讓每位會員將服務理想應用於個人、事業、社會、生活之學習與成長，以實現「明道人幫明道人」的理念，共創明道的榮耀，為明道中學再創新猷。<br><br>', './img/director.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE `graduation` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `classes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`id`, `year`, `classes`) VALUES
(1, 104, 0),
(2, 105, 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `link`, `date`, `img`) VALUES
(1, '2020', 'https://sites.google.com/ms.mingdao.edu.tw/alumninews01/%E9%A6%96%E9%A0%81?authuser=1', '2020-07-01 12:23:39', './img/info/info1.png');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `alumni` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `graduate` int(11) NOT NULL,
  `category` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `name`, `address`, `alumni`, `graduate`, `category`) VALUES
(1, 'KFC', 'asdfghjkl;', 'ZOE', 109, 'food'),
(2, 'Md', 'sd', 'ANC', 0, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `img`, `link`, `date`) VALUES
(3, '11/22~2020明道中學商業/管理從業人員同學會', '  親愛的校友：2020年疫情改變了我們的生活型態， 打亂了許多原定的計畫！ 校友會繼餐飲、廣建美、醫藥保健從業同學會後， 原定舉辦之商業/管理同學會也因之暫緩。 在疫情緩解之際，生活漸漸恢復常軌， 為延續50周年校慶的各項慶賀活動， 乃決定於11/22除號召商業/管理從業校友外， 亦擴大邀請其餘行業校友返校參加不分屆別同學會。 離校日久， 您是否還記得校園中的一花一草? 您是否懷念著師長的諄諄教誨？ 歡迎校友們 回來看看校園的改變 再次聆聽師長的叮嚀 體驗班級重聚的歡笑 明道中學校友會竭誠邀請您結伴共襄盛舉！ ※您與您敬愛的老師均可能因您的參與而獲獎， 詳見活動計畫。 請校友利用群組大力傳播此訊息，並請利用網路報名。 明道中學校友會 謹啟 2020年6月23日', './img/news/105419620_4409936799023971_1812730449711686424_o.jpg', 'https://forms.gle/MqyjGxa44rt9qiBP9', '2020-07-01'),
(4, '校友會百工百業傑出的明道人III', '校友會百工百業傑出的明道人\r\n我們即將拜訪的是\r\n藍色榮耀在建築領域\r\n獨霸一方特色的💪💪\r\n梁信雄學長！\r\n\r\n當然介紹梁信雄學長不是三言兩語說得完，在此我先不禮貌的簡單介紹就好！\r\n精彩留在後頭！\r\n\r\n梁信雄\r\n大熊建設董事長\r\n明道建圖科畢業！💯\r\n擅長美學建築\r\n喜歡用音樂分享公益\r\n薩克斯風🎷高手！\r\n\r\n7月10日星期五\r\n下午三點鐘\r\n歡迎學長姐一起與我們走訪大熊建設公司\r\n拜訪梁信雄學長\r\n一虧學長如何在建築界的經營秘密法則與\r\n大熊建設最唯美時尚的夢想別墅裡和大雄學長面對面，\r\n享受另一埸明道人的開心聚會！', './img/news/20161225001101.jpg', 'https://forms.gle/rbv2EgJ8xf2F6DvC6', '2020-07-01'),
(7, '2020明道家族💕銀杏森林夏之旅', '親愛的校友，您好~\r\n我們攜手走過了疫情\r\n明道家族特別精心策劃前往鹿谷銀杏森林一日遊，\r\n與您一起探訪享受鹿谷茶鄉與森林獨有芬多精，\r\n徜徉在美好的大自然中；\r\n【銀杏森林】海拔高度在1300--1600公尺以之間，\r\n氣候涼爽、終年雲霧遼繞，\r\n周邊是著名的杉林溪高山茶的專業區，\r\n如果您想要找茶，\r\n或是想要觀賞山嵐的幻化、\r\n體驗一下漫步在雲端的感覺、\r\n在高山顛頂，\r\n一邊欣賞壯麗的風光一邊享用美食!!!\r\n\r\n【益品美術館】\r\n在往溪頭方向的路旁，\r\n館內提供自助無限暢飲的茶與咖啡，\r\n擇一個你喜歡的座位，將一片翠綠盡收眼底，\r\n以花為題的展覽，\r\n最能陶冶身心，\r\n每日下午兩點到三點還有小提琴現場演奏，\r\n啜飲一口芬芳，\r\n一次滿足視覺、聽覺與味覺的三重享受，\r\n今日就來場不知年的愜意行旅吧!\r\n\r\n活動對象：校友會成員、校內一級主管、校內校友義工及眷屬。\r\n\r\n時間：\r\n109年7月18日（星期六）\r\n早上九點半見!\r\n\r\n活動地點：銀杏森林、益品美術館一日遊\r\n報到地點： 558南投縣鹿谷鄉羊彎巷800-1號\r\n活動行程：\r\n09：30－11：30銀杏森林\r\n11：30－13：00午餐時間<武岫農園>\r\n13：00－14：00沿途風光\r\n14：00－15：00益品美術館\r\n15：00－16：10賦歸\r\n費用：理監事每人酌收100元/家眷每人酌收300元。', './img/news/103825650_4357934614224190_2675574949482368779_n.jpg', 'https://docs.google.com/forms/d/e/1FAIpQLSfPgr-t_rau4xJ0s_dYhWSNxglCGdL8XbXBVpjfL21BM4yZIg/viewform?fbclid=IwAR34yafPk-VWgrnNBGxJ8m6bjSu3x842lFNuyn7GW2u0fk5g0PdYpZGv0lE', '2020-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `notion`
--

CREATE TABLE `notion` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `notion`
--

INSERT INTO `notion` (`id`, `name`, `job`, `detail`, `img`, `title`, `date`) VALUES
(1, 'yk123', 'engineer', ' gfchjiloyufgcnvjhuygfc nm,', './img/notion/YK.jpg', 'engineer', '2020-07-10 01:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `oversea`
--

CREATE TABLE `oversea` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `social` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `oversea`
--

INSERT INTO `oversea` (`id`, `name`, `place`, `email`, `tel`, `address`, `social`, `link`) VALUES
(1, 'YANGCHI', 'PARIS', 'chenade0312@gmail.com', '0956250726', '16F, No. 50016F, No. 50016F, No. 50016F, No. 50016F, No. 50016F, No. 50016F, No. 50016F, No. 500', 'instagram', './img/oversea/qrcode.jpg'),
(2, 'KUO YANGCHI', '台中市', 'chenade0312@gmail.com', '0987654321', '16f, no. 500, sec 2 liming rd', 'facebook', 'https://link.com');

-- --------------------------------------------------------

--
-- Table structure for table `past_board`
--

CREATE TABLE `past_board` (
  `id` int(11) NOT NULL,
  `year` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `past_board`
--

INSERT INTO `past_board` (`id`, `year`, `name`, `resume`, `img`) VALUES
(2, '第一屆理事長', '張國輝先生', '學歷：明道62 高中畢業\r\n經歷：台中市政府社會局局長', './img/past_board/ppdtlist-01.jpg'),
(3, '第二屆理事長', '劉福壽先生', '學歷：明道66 畢業\r\n經歷：中屋機構董事長　', './img/past_board/ppdtlist-02.jpg'),
(4, '第三、四屆理事長', '楊勝雄先生', '學歷：明道62建築製圖畢業\r\n經歷：上海好樂迪 公關經理　　　　　　　', './img/past_board/ppdtlist-0304.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `souvenir`
--

CREATE TABLE `souvenir` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `remain_count` int(11) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `souvenir`
--

INSERT INTO `souvenir` (`id`, `name`, `intro`, `price`, `img`, `remain_count`, `update_time`) VALUES
(1, 'MATH', 'dfcgvhbjnklijhygfcvbnjmhu', 500, './img/souvenir/QR_01.png', 10, '2020-06-15 08:12:36'),
(2, '明道熊-帽T版', '', 850, './img/souvenir/8.jpg', 2, '2020-06-17 06:33:09'),
(3, 'n', 'cc', 123, './img/souvenir/QR_01.png', 10, '2020-06-30 07:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT './img/badge1.png',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `website` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `discount` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `photo`, `name`, `tel`, `address`, `website`, `discount`, `time_update`) VALUES
(1, './img/store/badge1.jpg', 'VIEW CAFE', '9876543210', '台中市南屯區永春東七路903號', 'https://view-cafe.business.site/', 'sdadasdasd', '2020-06-10 14:16:57'),
(2, './img/store/badge1.jpg', 'VIEW CAFE245897879879', '0912345678', '台中市南屯區永春東七路903號2', 'https://view-cafe.business.site/', 'sdadasdasd', '2020-06-10 14:16:57'),
(3, './img/store/logo.jpg', '美麗華皮件', '04-26993003', '台中市大肚區沙田路二段308巷8-1號', 'https://www.luggage.com.tw/', '活動專案優惠', '2020-06-11 01:11:12'),
(5, './img/store/', 'MD', '107', 'lskdl', '', '', '2020-07-28 09:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `job`, `email`, `tel`, `time`, `img`) VALUES
(2, '郭泱婍', '理事長', 'chenade0312@gmail.com', '0956250726', '2020-07-02 05:33:40', './img/team/bk.jpg'),
(3, '郭泱婍', '秘書', 'chenade0312@gmail.com', '', '2020-07-02 05:33:40', './img/team/1551770923016.jpg'),
(4, '郭泱婍', '顧問', 'chenade0312@gmail.com', '', '2020-07-02 05:33:40', './img/team/1551770923016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `auth` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `acc`, `pwd`, `auth`) VALUES
(1, 'root', 'root', '1234', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `104`
--
ALTER TABLE `104`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `105`
--
ALTER TABLE `105`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_member`
--
ALTER TABLE `board_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduation`
--
ALTER TABLE `graduation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notion`
--
ALTER TABLE `notion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oversea`
--
ALTER TABLE `oversea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `past_board`
--
ALTER TABLE `past_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `104`
--
ALTER TABLE `104`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `105`
--
ALTER TABLE `105`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `board_member`
--
ALTER TABLE `board_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graduation`
--
ALTER TABLE `graduation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notion`
--
ALTER TABLE `notion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oversea`
--
ALTER TABLE `oversea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `past_board`
--
ALTER TABLE `past_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
