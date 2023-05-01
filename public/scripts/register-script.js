window.onload = () => {
    document.getElementById('alert').style.display = 'none';
}
document.getElementsByClassName("register").addEventListener("submit", function () {
    document.getElementById('alert').style.display = 'block';
});