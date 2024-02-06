
 <?php
    // function beratbadan($jumlah, $badan){
    //     $beni = $badan / $jumlah ** 2;
    //     if($beni >= 18.5){
    //         echo "normal";
    //     }elseif($beni >= 22.9 && $beni < 24.9){
    //         echo "berat badan lebih";
    //     }elseif($beni >= 25){
    //         echo "obesitas";
    //     }else{
    //         echo "kurang";
    //     }
    // }
    // return beratbadan(44,1.48);


    function day($date){
        $day = date('l', strtotime($date));
        if($day == 'Monday'){
            echo "Senin";
        }
        elseif($day == 'Tuesday'){
            echo "Selasa";
        }
        elseif($day == 'Wednesday'){
            echo "Rabu";
        }
        elseif($day == 'Thursday'){
            echo "Kamis";
        }
        elseif($day == 'Friday'){
            echo "Jumat";
        }
        elseif($day == 'Saturday'){
            echo "Sabtu";
        }
        else{
            echo "Minggu";
        } 
    }
    day('2024-01-28');
?>


