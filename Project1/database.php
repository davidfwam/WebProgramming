<?php
     // doesnt work inside a func

    // users are saved in a text file as a serialized array object
    function save_user($user, $points) {
        $file = 'scores.txt';
        $newUser = $user . " " . $points . "\n";
        file_put_contents($file, $newUser, FILE_APPEND);
    }
    
    function get_all_users() {
        $file = 'scores.txt';
        // get the contents of scores and unserialize it to array fmt
        $contents = file_get_contents($file);
        $contents = explode("\n", $contents);
        $scores = [];
        $names = [];
        for($i = 0; $i < count($contents); $i++){
            $curr = explode(" ", $contents[$i]);
            if(isset($curr[0]) && isset($curr[1])){
                $currName = $curr[0];
                $currScore = $curr[1];
                if($currName != " " || $currName != "" &&  is_numeric($currScore)){
                    array_push($names, $currName);
                    array_push($scores, $currScore);
                }
            }
        }
        array_multisort($scores,SORT_DESC,$names);
        return [$names, $scores];
    }

    function get_user_points($user) {
        $file = 'scores.txt';
        // get the contents of scores and unserialize it to array fmt
        $contents = file_get_contents($file);
        $contents = explode("\n", $contents);
        
        // check if the user exists for safety
        for($i = 0; $i < count($contents); $i++){
            $curr = explode(" ", $contents[$i]);
            if(isset($curr[0]) && isset($curr[1])){
                $currName = $curr[0];
                $currScore = $curr[1];
                if($currName != " " || $currName != "" &&  is_numeric($currScore)){
                    if($currName == $user){
                        return $currScore;
                    }
                  
                }
            }
        }

        // return null if the user does not exist
        return null;
    }
?>