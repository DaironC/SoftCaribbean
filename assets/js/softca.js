function validar() {
    if (localStorage.getItem('uui') === null) {
        location.href = 'http://localhost/softca/';
    } else {
        console.log(JSON.parse(atob(localStorage.getItem('uui'))));
    }
}

validar();