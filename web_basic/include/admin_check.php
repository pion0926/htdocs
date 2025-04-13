<?php
/**
 * admin_check.php
 * * 관리자 권한 확인 스크립트
 * 관리자 권한이 필요한 페이지 상단에 include 또는 require_once 로 포함합니다.
 * 로그인 시 $_SESSION['is_admin'] = true; 가 설정되어 있어야 합니다.
 */

// 세션이 시작되지 않았으면 시작합니다.
// 다른 파일에서 이미 session_start()를 했을 수도 있으므로 확인 후 실행합니다.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 'is_admin' 세션 변수가 존재하고, 그 값이 true인지 확인합니다.
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;

// 관리자가 아니라면
if (!$is_admin) {
    // 접근 거부 메시지를 보여주고 스크립트 실행을 중단합니다.
    
    // 방법 1: JavaScript 사용 (경고창 후 로그인 페이지로 이동)
    echo "<script>
            alert('관리자 권한이 없습니다. 관리자 계정으로 로그인해주세요.');
            // 로그인 페이지 경로를 실제 경로로 수정해야 합니다.
            window.location.href = '/web_basic/member/login.php'; 
          </script>";
    
    // 방법 2: HTML 메시지 출력 (더 친절할 수 있음)
    /*
    echo '<!DOCTYPE html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>접근 불가</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { font-family: sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
            .access-denied-container { background-color: #fff; padding: 30px 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center; }
            .access-denied-container h2 { color: #dc3545; margin-bottom: 15px; }
            .access-denied-container p { color: #333; margin-bottom: 25px; }
            .access-denied-container a { display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.2s; }
            .access-denied-container a:hover { background-color: #0056b3; }
        </style>
    </head>
    <body>
        <div class="access-denied-container">
            <h2>접근 권한 없음</h2>
            <p>이 페이지는 관리자만 접근할 수 있습니다.</p>
            <a href="/web_basic/member/login.php">로그인 페이지로 이동</a>
        </div>
    </body>
    </html>';
    */

    exit; // 스크립트 실행을 즉시 중단합니다.
}

// 이 파일이 성공적으로 포함되고 $is_admin이 true이면, 
// 이 파일을 포함한 페이지는 계속 실행됩니다.

?>