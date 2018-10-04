function valForm(){
    const usuarios = document.getElementById("user").value;
    const clave = document.getElementById("pass").value;

    if(usuarios === undefined || usuarios.length === 0 || usuarios === ""){
        swal({
            text: "Usuario Invalido",
            icon: "error"
        });
    }else if(clave === undefined || clave.length === 0 || clave === ""){
        swal({
            text: "Contraseña Invalida",
            icon: "error"
        });
    }else{
        var data = "<root type=\"pojo\">\n\t<object name=\"Object_41769\" type=\"object\"  class=\"org.metatron.terceros.dto.RegistroCliente\">\n\t\t<property  id=\"reg_dsmail\"  value=\""+ usuarios +"\"/>\n\t\t<property  id=\"reg_dspassword\"  value=\""+  clave +"\"/>\n\t\t<property  id=\"reg_cdtipo\"  value=\"REGISTRO_WAPPON\"/>\n\t</object>\n</root>";

        var xhr = new XMLHttpRequest();
        
        xhr.addEventListener("readystatechange", function() {
            console.log(this.readyState);
            
          if (this.readyState === 4) {
              console.log(this);
              
            console.log(JSON.parse(this.response));
          }
        });
        
        xhr.open("POST", "https://www.wappasonline.com/MetatronServices/CgiJson?sessionid=null&_clase=org.metatron.services.terceros.ServicesRegistroCliente&_method=validateUser&metodoload=postLogin&origin=%2A");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.send(data);
    }


}