<?php 

    if(isset($_POST["submit"])){
        // function to pick one of the radio options
        function opt($a,$b){
        if(isset($_POST[$a])){
            $ans = 1;
        }elseif(isset($_POST[$b])) {
            $ans = 0;}
            return $ans;
        }
        // getting the variables
        $name = $_POST["name"];
        $gen = opt("m", "f");
        $wmood = opt("yes", "no");
        $cs = $_POST["clases"];
        $bt = $_POST["best_thing"];
        
        //setting a variable to identify genders
        if($gen == 1){
            $gend = "Mr";
        }elseif ($gen == 0) {
            $gend = "Miss";
        }
        // simple function to check mood
    function mood($wmoo, $clase){
    	if($wmoo==1 && $clase<=2){
            $reply = "I guess you had a great day";
        }elseif ($wmoo==1 && $clase>2) {
            $reply = "Lucky day for you hun";
        }elseif ($wmoo==0 && $clase<=2) {
            $reply = "Not that bad a day";
        }elseif ($wmoo==0 && $clase>2) {
            $reply = "arrgh bad bad day";
        }else{$reply = "Please say something about your day";}
          return $reply;
        }
    //outputing your mood
    $guess = mood($wmood, $cs);
    $say = "Hmm ".$gend." ".$name." you enjoyed ".$bt." and you had ".$cs." classes ".$guess;
    }
?>


