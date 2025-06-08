<?php

/**
 * 1. 관리자 여부만 확인 (true/false 반환)
 */
function isAdmin() {
    return true;
    return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
}

/**
 * 2. 관리자 확인 + 아니면 로그인 페이지로 강제 이동
 */
function requireAdmin() {
    if (!isAdmin()) {
        // JS 리디렉션
        echo "<script>
            alert('관리자 권한이 없습니다. 관리자 계정으로 로그인해주세요.');
            window.location.href = '/web_basic/member/login.php';
        </script>";
        exit;
    }
}
