document.getElementById('check').addEventListener('click', function(){
if (document.getElementById('checkbox').checked) {
    window.location.href = "http://www.conansite.net/";
} else {
    document.getElementById('error').style.visibility = 'visible';
}
});