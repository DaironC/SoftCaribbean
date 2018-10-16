function validar() {
    if (localStorage.getItem('uui') === null) {
        location.href = 'http://localhost/wordpress/login/';
    } else {
        console.log(JSON.parse(atob(localStorage.getItem('uui'))));
    }
}

validar();