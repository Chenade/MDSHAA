<script>
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

        <?php

            include ("../connect.php");

            $sql = 'SELECT * FROM `alumni` ORDER BY `id` DESC';
            $run = mysqli_query($con,$sql);
            $count = 0;

            //$list = array(5);

            while($row = mysqli_fetch_assoc($run)){
                $now = "{";
                $now .= "'rank':" . $row['id']. ",";
                $now .= "'name':'" . $row['name']. "',";
                $now .= "'desc':'" . mb_substr($row['honor'],1,115,"UTF-8"). "',";
                $now .= "'location':'" . $row['year'] . "',";
                $now .= "'img':'" . $row['img'] ."'}";
                $list[$count] = $now;
                $count ++;
                if ($count >3) break;
            }

            echo implode(",",$list);;



        ?>

        $scope.forests = JSON.parse(<?php json_encode($list); ?>);
        console.log($scope.forests[0]);
        //$scope.forests = <?php echo $list;?>;
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
</script>