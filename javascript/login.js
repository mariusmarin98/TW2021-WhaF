function verificaLogat() {
    if (document.cookie
        .split('; ')
        .find(row => row.startsWith('JWT='))) {
        var http = new XMLHttpRequest();
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                var response = http.responseText;
                var jwt = JSON.parse(response);
                // console.log(jwt);
                document.getElementById('good').firstElementChild.textContent = "Bine ai venit, " + jwt.prenume;
                // if (jwt.admin == 1) {
                //     verificaAdmin(1);
                //     document.getElementById('butonPaginaAdmin').style.display = "block";
                // } else {
                //     verificaAdmin(0);
                //     document.getElementById('butonPaginaAdmin').style.display = "none";
                // }
                document.getElementById('adaugaReteta').style.display = "block";
                document.getElementById('delogare').style.display = "block";
                document.getElementById('logare').style.display = "none";
            }
        }
        let params = 'JWT=' + document.cookie
            .split('; ')
            .find(row => row.startsWith('JWT='))
            .split('=')[1];
        var url = '../jwt/src/decodare.php';
        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.send(params);

    } else {
        document.getElementById('good').style.display = "none";
        document.getElementById('delogare').style.display = "none";
        document.getElementById('logare').style.display = "block";
        document.getElementById('adaugaReteta').style.display = "none";
    }
}

setInterval(function() { verificaLogat(); }, 100);

function logout() {

    if (document.cookie
        .split('; ')
        .find(row => row.startsWith('JWT='))) {
        document.cookie = "JWT=; expires=Thu, 01 Jan 2000 00:00:00 UTC; path=/;";
    }
}

function verificaAdmin(isAdmin) {
    var path = window.location.pathname;
    var page = path.split("/").pop();
    if (page == "adminPage.html") {
        if (isAdmin == 0) {
            document.getElementById("admin").style.display = "none";
            document.getElementById("nonAdmin").style.display = "block";
        } else {
            document.getElementById("admin").style.display = "block";
            document.getElementById("nonAdmin").style.display = "none";
        }
    }
}