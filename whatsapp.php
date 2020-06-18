<?php

    require_once('./database.php');

    if(isset($_REQUEST['submit1']))
    {
        $number = $_REQUEST['whatsappnumber'];
        $code   = $_REQUEST['countorycode'];
        $sql = "INSERT INTO whatsapp (whatsappnumber,countorycode) VALUES ('$number','$code')";

        if($affected_row = $conn->exec($sql))
        {
            $sq = "SELECT * FROM whatsapp";
            $res = $conn -> query($sq);
            while($row = $res -> fetch(PDO::FETCH_ASSOC))
            {
                $i = $row['whatsappnumber'];
                $j = $row['countorycode'];

                $url = 'https://wa.me/'.$j.$i.'?text= Here is the Digital Visiting Card of डिजिटल विसिटींग कार्ड https://mydvc.in?d=digitalcard Reply with Hi incase link is not clickable';
                header('Location: ' . $url);
                
            }
        }
        
        else
        {
           echo 'please try again';
        }


    }
    else
    {

        echo 'data not inserted';
    }



?>