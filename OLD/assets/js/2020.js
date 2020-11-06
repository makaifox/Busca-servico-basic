
//--------------------------REQUERIMENTOS--------------------------------------------------------------
// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});
// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(grafico_REQAN);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function grafico_REQAN() {

  // Criar tabela



  var options = {
    title: 'TOTAL ANUAL POR CADA PASTA DE SECRETARIA',
    chartArea:{left:0,top:0,width:"100%",height:"100%"},
    legend: { position: 'top' }

  };

  // escolhe o modelo do gáfico.
  var chart = new google.visualization.AreaChart(document.getElementById('grafico_REQAN-2020'));

  (async () => {
    let chartData;
    chartData = await fetch("http://localhost/login_redecom_backup_30-07-2020/arquivo.json")
      .then(response => {
      return response.json();
      })
      .then(jsonBody => {
           const json = jsonBody;
           return json;
      })
      var data = google.visualization.arrayToDataTable([
        ['Year', chartData['anual'][0].year + ' Requerimentos'],
        ['SEMGOV', chartData['anual'][0].semgov  ],
        ['SEMUS', chartData['anual'][0].semus],
        ['SEMAS', chartData['anual'][0].semas],
        ['SEMIMSP',chartData['anual'][0].semimsp],
        ['SEMSOPC', chartData['anual'][0].semsopc]
      
      ]);

      chart.draw(data, options);
})();

}
//--------------------------------------------- DEMANDA ----------------------------------------------------------
// define o callback que carrega a  API do google.
google.charts.setOnLoadCallback(graficoDEM);

// chama a função
function graficoDEM() {

  // Criar tabela

  // opções de tamanho, titulo e legendas.
  var options = {
    title: 'TOTAL ANUAL POR CADA ÁREA PROFISSIONAL DA CCS',
    chartArea:{left:0,top:0,width:"100%",height:"100%"},
    legend: { position: 'top' }
  };

  // escolhe o modelo do gáfico.
  var chart = new google.visualization.LineChart(document.getElementById('grafico_DEMANDA-2020'));

  (async () => {
    let chartData;
    chartData = await fetch("http://localhost/login_redecom_backup_30-07-2020/arquivo.json")
      .then(response => {
      return response.json();
      })
      .then(jsonBody => {
           const json = jsonBody;
           return json;
      })
      
      var data = google.visualization.arrayToDataTable([
        ['Year', chartData['anual2'][0].year + ' | QUANTITATIVO', '6493 | QUALITATIVO'],
        ['IMP (CONT./CLIP.)',  chartData['anual2'][0].imp1 , chartData['anual2'][0].imp2],
        ['DG (PEÇ./IMPR.)',  chartData['anual2'][0].dg1, chartData['anual2'][0].dg2],
        ['FAV (COBER./MAT.)',  chartData['anual2'][0].fav1, chartData['anual2'][0].fav2],
        ['MDS (POSTS./ALC.)',  chartData['anual2'][0].mds1, chartData['anual2'][0].mds2]
      ]);
    
      chart.draw(data, options);

    })();

 // finaliza e executa.
 
}
/*const chartData = fetch("http://localhost/chart.php").json();
console.log(chartData)
let requisicao = fetch('./arquivo.json').then((response)=> {
  return response.json()
}).then(jsonBody => {
})

const chartData = fetch("http://localhost/login_redecom/chart.php").then((response)=> {
  return response.json();
}).then(jsonBody => {
  const json = jsonBody;
  console.log(json);
  
})


let chartData;

(async () => {
  chartData = await fetch("http://localhost/login_redecom/chart.php")
      .then(response => {
      return response.json();
      })
      .then(jsonBody => {
           const json = jsonBody;
           return json;
      })
      .catch(err => {
          // Do something for an error here
      });
  console.log("Exemplo com async/await", chartData);
})();
*/
$(window).resize(function(){
  grafico_REQAN();

  graficoDEM();
});