function validar() {
    console.log(JSON.parse(atob(localStorage.getItem('uui'))));
    if (localStorage.getItem('uui') === null) {
        location.href = 'http://localhost/softca/';
    }

}

validar();