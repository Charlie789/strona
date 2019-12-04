function logout() {
    createCookie('admin', '0');
    location.reload = "main.php";
}