document.getElementById('check').addEventListener('click', function(){
if (document.getElementById('checkbox').checked) {
} else {
    document.getElementById('error').style.visibility = 'visible';
}
});

document.getElementById("body").style.display = "none";