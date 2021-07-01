angular.module('app', ['cfp.hotkeys', 'ngAnimate'])
    .controller('MainController', function($scope, hotkeys) {

        // functions
        $scope.active = 0;

        $scope.previous = function() {
            if($scope.active != 0) $scope.active -= 1;
        }

        $scope.next = function() {
            if($scope.active + 1 < $scope.forests.length) $scope.active += 1;
        }

        $scope.setActive = function(i) {
            $scope.active = i;
        }

        $scope.forests = [
            {
                'rank' : '1',
                'id' : '19',
                'name' : '蕭勝文講師',
                'desc' : '蕭勝文是明道六年一貫培育的優秀學生，90年國中畢業後，直升進入綜高部學術學程。但他從小就喜愛畫畫，為了追尋自己的興趣，高一下學期，毅然放棄學術學程，轉入設計群就讀。在明道美工學程，創作的作品屢受師長讚賞，93年並以優異的成績考入台灣科技...',
                'location' : '108年傑出校友',
                'img' : './img/alumni/index1.JPG'
            },
            {
                'rank' : 2,
                'id' : '18',
                'name' : '游文相董事長',
                'desc' : '游文相董事長民國67年於明道中學汽修科畢業，75年畢業於修平技術學院工業工程系。後因對於企業經營管理方面的知識需求，乃再度進修，92年於Barrington University畢業，取得企業管理學士學位，104年於東海大學高階經營管理研究所畢業，取得碩士學...',
                'location' : '108年傑出校友	',
                'img' : './img/alumni/index2.JPG'
            },
            {
                'rank' : 3,
                'id' : '17',
                'name' : '謝富名創始人',
                'desc' : '謝富名校友，是明道六年一貫培育的學生，從小接受國學薰陶及培養，是作文、朗讀、即席演講等語文競賽的常勝軍。在校時曾參加由明道文藝與中央日報聯合舉辦的全國學生文學獎，榮獲高中散文組首獎。1993年高中部畢業後考入台灣大學國際企業學系。之後負笈美國TOP 10...',
                'location' :'108年傑出校友	',
                'img' : './img/alumni/index3.JPG'
            },
            {
                'rank' : 4,
                'id' : '16',
                'name' : '盧玉娟總經理',
                'desc' : '盧玉娟校友在高中就學階段，因家中經營之「加興企業公司」業務繁忙，在必須兼顧家裡事業的情況下，選擇至明道中學補校商科就讀。於事業擴大、穩定後，再進入中興大學EMBA領袖組，及大葉大學EMBA國際企業金融研究所就讀，獲碩士學位。 盧校友在加興企業擔任總經理，為公...',
                'location' : '107年傑出校友',
                'img' : './img/alumni/index4.JPG'
            },
            {
                'rank' : 5,
                'id' : '15',
                'name' : '曾柏文博士',
                'desc' : '今天畢業典禮的主賓曾柏文是79年明道國中部畢業的學長，幾年前的太陽花學運，為了鼓勵學生思辨，在學校支持下，現在在香港大學的江旻諺學長主辦了一場論壇，邀請的超人氣主講者就是柏文。長達三小時的演講吸引近300位師生，共同研修了一門珍貴的民主學分。 曾柏文的學經...',
                'location' : '107年傑出校友',
                'img' : './img/alumni/index5.JPG'
            }
        ];

        // hot keys
        hotkeys.add({
            combo: 'right',
            description: 'Next slide',
            callback: function() {
                $scope.next();
            }
        });
        hotkeys.add({
            combo: 'left',
            description: 'Previous slide',
            callback: function() {
                $scope.previous();
            }
        });
    });