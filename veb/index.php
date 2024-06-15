<?php
require_once('db.php');

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
$result = $conn->query($sql); 

if ($result && $result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {
        header('Location: http:/veb/lab1.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/styles/style.css">
</head>
<body>
    <div class="autorization">
        <svg width="116" height="112" viewBox="0 0 216 212" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M57.5 207C61.2054 176.534 67.5096 146.515 74.3889 116.611C76.0253 109.498 78.4802 102.271 81.25 95.5C81.8412 94.055 82.5949 92.7035 83.2222 91.2778C83.5808 90.4628 83.1096 88.7222 84 88.7222C84.8216 88.7222 86.1172 90.5524 86.5 91.2222C88.615 94.9235 88.4283 99.7636 90.5 103.611C95.2977 112.521 100.683 122.14 104 131.722C109.442 147.443 118.671 161.515 123.111 177.5C124.799 183.578 127.699 189.194 129.389 195.278C130.599 199.632 132.498 203.995 134.5 208" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M66 155C75.7172 154.19 85.4892 153 95.2222 153C98.8842 153 102.535 152.5 106.111 152.5C108.224 152.5 110.091 153 112 153" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M70 85C64.8728 84.4303 59.3599 83.4384 54.0556 84.0278C51.7062 84.2888 49.3007 85.5852 47 86.1111C44.5503 86.671 41.6723 88.068 39.4722 89.3056C34.9836 91.8304 31.1591 95.936 28.1111 100C24.1598 105.268 21.5 110.12 21.5 116.889C21.5 119.589 21.4229 122.301 21.5 125C21.5778 127.724 23.4217 129.953 24 132.556C24.8698 136.47 26.5769 140.568 29.2222 143.694C32.1726 147.181 35.5249 150.54 39.8889 152.111C42.0972 152.906 43.4079 153 45.75 153C47.1545 153 48.3135 152.907 49.5 153.5" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M21 121.5C21 117.5 21 113.5 21 109.5C21 107.502 20.9445 105.497 21 103.5C21.0544 101.542 22 99.7612 22 97.75C22 95.588 23 93.8137 23 91.6111C23 89.6375 23.0207 88.2483 23.7222 86.4444C24.6478 84.0644 24.5 79.362 24.5 76.75C24.5 74.9553 25.5 77.4721 25.5 78.25C25.5 80.2059 25.4846 82.0094 26.1111 83.8889C26.5481 85.1997 26.2354 86.4344 26.5278 87.75C26.7906 88.9325 27.4546 90.1641 27.5 91.3889C27.5787 93.5132 27.7345 95.1237 27.5 97C27.4368 97.5054 24.6105 99.6948 24 100" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M45.5 85C45.8017 82.285 49.0999 78.949 50.3889 76.5C51.9983 73.442 53.7377 70.5555 54.4722 67.25C55.2142 63.9111 54 74.0797 54 77.5C54 79.0541 53.8526 80.2885 53.5278 81.75C53.2551 82.977 51.5121 82.3253 50.5 83" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M25 94V99.5" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M51.5 77.5C51.5 78.9969 50.6902 80.7065 49.5 81.5" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M99.5 88.5C99.7208 90.2667 135.679 89 138.778 89C154.726 89 170.098 89.6291 184.917 82.7222C196.564 77.2932 204.69 69.5705 209.944 57.7222C214.498 47.4544 214.077 34.0352 208.917 24.1111C203.073 12.874 190.457 5.40088 178.167 3.44444C169.749 2.10455 160.719 3.41226 153.5 8.08333C147.636 11.8779 141.026 18.71 139.306 25.7222C136.839 35.7781 145.332 49.0228 156.25 49.9722C161.988 50.4712 170.5 46.1239 170.5 39.5" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M146.5 90.5C146.5 96.6851 146 102.86 146 109C146 115.778 146.5 122.744 146.5 129.389C146.5 132.55 146.648 135.431 147.028 138.472C147.261 140.342 148 142.195 148 144C148 145.82 147.525 148.461 148.028 150.222C148.467 151.759 149 153.282 149 155" stroke="black" stroke-width="5" stroke-linecap="square"/>
            <path d="M36 113C36.2144 112.786 38.5763 110.392 38.9722 111.778C39.2394 112.713 38.5033 113.507 38 112.5" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M52 100.5C54.1888 98.4399 55 98.7351 55 101.5" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M51.5 113C51.5 113.654 51.4712 113.736 52 114" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M31.5 123.5C31.3542 122.333 26.4218 122.993 25.7222 123C19.6068 123.058 16.2311 125.309 11.7778 129.222C5.35519 134.866 2.30355 143.125 3.5 151.5" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M31 124.5C25.6397 125.096 22.56 130.488 20.5278 134.722C19.3611 137.153 19.3994 140.002 18.8889 142.611C18.215 146.055 17.9017 150.303 19.5 153.5" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M67.5 90C67.5 84.2667 68.8472 80.386 71.8889 75.3889C74.9492 70.3612 77.1535 68.1733 82.5 65.5" stroke="black" stroke-width="5" stroke-linecap="round"/>
            <path d="M68 88.5C68.207 87.4651 70.7036 84.3756 71.6111 83.7222C73.8522 82.1087 75.7517 80.0935 78.2778 78.7222C82.4946 76.4331 86.1858 74.2035 91 73" stroke="black" stroke-width="5" stroke-linecap="round"/>
        </svg>
        <form action="index.php" method="post"> 
            <div class="input-group">
                <input type="text" placeholder="Логін" name="login">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Пароль" name="password">
            </div>
            <button type="submit">Увійти</button>
        </form> 
    </div>
       
    <div>
        <img width="100%" src="static/images/picture.jpg" alt="">
    </div>
</body>
</html>
