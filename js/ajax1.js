console.log('activo');

document.querySelector('#btn_enviar_php').addEventListener('click', traerDatos);

function  traerDatos(){

  var xhttp;
  xhttp=new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let datos = JSON.parse(this.responseText);
      let rta = document.querySelector('#tbody_rta');
      rta.innerHTML = "";
      for(let item of datos){
        rta.innerHTML+=`
          <tr>
            <td>${item.tarea}</td>
            <td>${item.fecha_creación}</td>
            <td>
              <form action="#">
                <label>
                  <input id="indeterminate-checkbox" type="checkbox" />
                  <span></span>
                </label>
              </form>
            </td>
          </tr>
        `
      }
    }
  };

  xhttp.open("GET", "100.json", true);
  xhttp.send();

}