


function getData(url){

    var dataFuncionario = new XMLHttpRequest;

    dataFuncionario.onreadystatechange = showGraph;

    dataFuncionario.open("GET", url, true);

    dataFuncionario.send();


}


function getData2(url){

    var dataFuncionario = new XMLHttpRequest;

    dataFuncionario.onreadystatechange = showGraph2;

    dataFuncionario.open("GET", url, true);

    dataFuncionario.send();


}




function showGraph(){

    if(this.readyState ==4 && this.status ==200){

        var myData = JSON.parse(this.responseText);
        var dataSetNombre = [];

        var dataSetSueldos = [];
        var dataSetColors =[];

        var longitud = Object.keys(myData).length;

        //console.log(longitud);

        for(let funcionarios of myData){
            dataSetNombre.push(funcionarios.nombre);
            dataSetSueldos.push(funcionarios.sueldo);
            dataSetColors.push(randomColor());


        }

        console.log(dataSetNombre);
        console.log(dataSetSueldos);
        console.log(dataSetColors);

        var canvas = document.getElementById('bar-chart');
        canvas.style.width= "500px";
        canvas.style.height = "500px";


        var data = {
            labels: dataSetNombre,
            datasets: [{
             label:"SUELDO DE FUNCIONARIOS PUBLICOS EN 2018",
             backgroundColor: dataSetColors,
              data: dataSetSueldos,
            }]
          };

          var options = {
            maintainAspectRatio: false,
            scales: {
              yAxes: [{
                stacked: true,
                gridLines: {
                  display: true,
                  color: "rgba(240,200,220,0.2)"
                }
              }],
              xAxes: [{
                gridLines: {
                  display: false
                }
              }]
            }
          };

          Chart.Bar('bar-chart', {
            options: options,
            data: data
          });


    }


}


function showGraph2(){

    if(this.readyState ==4 && this.status ==200){

        var myData = JSON.parse(this.responseText);
        var dataSetNombre = [];

        var dataSetPresupuestos = [];
        var dataSetColors =[];

        var longitud = Object.keys(myData).length;

        //console.log(longitud);

        for(let presupuestos of myData){
            dataSetNombre.push(presupuestos.nombre);
            dataSetPresupuestos.push(presupuestos.presupuesto);
            dataSetColors.push(randomColor());


        }

        console.log(dataSetNombre);
        console.log(dataSetPresupuestos);
        console.log(dataSetColors);

        var canvas = document.getElementById('bar-chart');
        canvas.style.width= "500px";
        canvas.style.height = "500px";


        var data = {
            labels: dataSetNombre,
            datasets: [{
             label:"PRESUPUESTO ASIGNADO POR MUNICIPIO EN 2018",
             backgroundColor: dataSetColors,
              data: dataSetPresupuestos,
            }]
          };

          var options = {
            maintainAspectRatio: false,
            scales: {
              yAxes: [{
                stacked: true,
                gridLines: {
                  display: true,
                  color: "rgba(240,200,220,0.2)"
                }
              }],
              xAxes: [{
                gridLines: {
                  display: false
                }
              }]
            }
          };

          Chart.Bar('bar-chart', {
            options: options,
            data: data
          });


    }


}


function getMonth(){
	var month = document.getElementById("id_objeto").options[document.getElementById("id_objeto").selectedIndex].text;

	alert(month);

}

function  saveChart(){

	var image = document.getElementById('bar-chart');
	var dataURL = image.toDataURL('image/png');

	console.log(image);
	console.log(dataURL);

			var data = new FormData();
		data.append('base64', 'holaaaaa');


		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'controller/generar.php', true);
		xhr.onload = function () {
		    // do something to response
		    console.log(this.responseText);
		};
		xhr.send(data);
			//window.location.href = canvas.toDataURL("image/png");


}

function randomColor(){

    var hexaColor = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E", "F"];

    var color= "#";


    for(var i=0; i<=5;i++){



        color += (hexaColor[(Math.random() * 15).toFixed(0)]);

    }

    return color;
    //console.log(color);


}
