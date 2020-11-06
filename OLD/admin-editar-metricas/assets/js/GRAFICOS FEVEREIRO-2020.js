//--------------------------REQUERIMENTOS--------------------------------------------------------------
//carrega a api do google (só precisa ser chamado uma vez por arquivo)
google.charts.load('current', {'packages':['corechart']});

// define o callback que carrega a  API do google.
google.charts.setOnLoadCallback(graficoREQ);

// chama a função
function graficoREQ() {

  // Criar tabela
  var data = google.visualization.arrayToDataTable([
   ['Element', 'secretarias', { role: 'style' }],

      // barras
   ['SEMGOV', 14,'#ff0000'],
   ['SEMUS', 57, '#9d2424' ],
   ['SEMAS', 28, '#9d2424' ] // título , valor, cor 
]);

  // opções de tamanho, titulo e legendas.
  var options = {
                  'width':650,
                 'height':300};

  // escolhe o modelo do gáfico.
  var chart = new google.visualization.PieChart(document.getElementById('grafico_REQ-MAI'));

chart.draw(data, options);
}
//--------------------------IMPRENSA--------------------------------------------------------------

 // define o callback que carrega a  API do google.
     google.charts.setOnLoadCallback(graficoI);

// chama a função
     function graficoI() {

       // Criar tabela
       var data = google.visualization.arrayToDataTable([
        ['Produto', 'Imp',  { role: 'style' }],

           // barras
        ['CONTEÚDOS', 15,'#ff0000'],
        ['CLIPPINGS', 357, '#9d2424' ] // título , valor, cor 
     ]);

  // opções de tamanho, titulo e legendas.
       var options = {
                      'width':620, 
                      'height':300,
                      legend: { position: 'none'},
                      bar: { groupWidth: '75%' },
                      isStacked: true
                    };
                      

       // escolhe o modelo do gáfico.
       var chart = new google.visualization.BarChart(document.getElementById('grafico_I-MAI'));

chart.draw(data, options);
}

//---------------------------------DESIGNER GRÁFICO------------------------------------------------

// define o callback que carrega a  API do google.
      google.charts.setOnLoadCallback(graficoDG);

// chama a função
      function graficoDG() {

        // Criar tabela
        var data = google.visualization.arrayToDataTable([
         ['Produto', 'DG', { role: 'style' }],

            // barras
         ['ARTES', 195,'#f5e70d'],
         ['IMPRESSÕES', 357, '#ada746' ] // título , valor, cor 
      ]);

     // opções de tamanho, titulo e legendas.
        var options = {
        'width':620,
        'height':300,
        legend: { position: 'none'},
        bar: { groupWidth: '75%' },
        isStacked: true
      };

        // escolhe o modelo do gáfico.
        var chart = new google.visualization.BarChart(document.getElementById('grafico_DG-MAI'));

chart.draw(data, options);
}

//-----------------------------FOTOGRAFIA E AUDIOVISUAL----------------------------------------------------------


// define o callback que carrega a  API do google.
 google.charts.setOnLoadCallback(graficoFA);

// chama a função
 function graficoFA() {

   // Criar tabela
   var data = google.visualization.arrayToDataTable([
    ['Produto', 'FA', { role: 'style' }],
    

       // barras
    ['COBERTURAS', 0.0,'#007eff'],
    ['MATERIAL', 0.0, '#1c2e9a' ] // título , valor, cor 
 ]);

  // opções de tamanho, titulo e legendas.
   var options = {
   'width':620,
   'height':300,
   legend: {  position: 'none' },
   bar: { groupWidth: '75%' },
   isStacked: true
 };
   // escolhe o modelo do gáfico.
   var chart = new google.visualization.BarChart(document.getElementById('grafico_FA-MAI'));

chart.draw(data, options);
}
//--------------------------------MIDIA SOCIAL ------------------------------------------------

// define o callback que carrega a  API do google.
 google.charts.setOnLoadCallback(graficoMS);

// chama a função
 function graficoMS() {

   // Criar tabela
   var data = google.visualization.arrayToDataTable([
    ['Produto', 'MS', { role: 'style' }],
       // barras
       
    ['SEGUIDORES', 28.369,'#a588dc'],
    ['ALCANCE', 753.608, '#60409f' ] // título , valor, cor 
 ]);

  // opções de tamanho, titulo e legendas.
   var options = {
   'width':620,
   'height':300,
   legend: {  position: 'none' },
   bar: { groupWidth: '75%' },
   isStacked: true,
    vAxis: {
      title: '115 POSTS'
    },
    hAxis: {
      title: '*Principal rede social utilizada no Brasil'
    },
 };

   // escolhe o modelo do gáfico.
   var chart = new google.visualization.BarChart(document.getElementById('grafico_MS-MAI'));
// finaliza e executa.
chart.draw(data, options);
}
//---------------------------------------------------------------------------------------------------

//--------------------------------MIDIA SOCIAL ------------------------------------------------

// define o callback que carrega a  API do google.
 google.charts.setOnLoadCallback(graficoMS);

// chama a função
 function graficoMS() {

   // Criar tabela
   var data = google.visualization.arrayToDataTable([
    ['Produto', 'MS', { role: 'style' }, ],
       // barras
       
    ['SEGUIDORES', 28.369,'#a588dc'],
    ['ALCANCE', 753.608, '#60409f' ], // título , valor, cor 
 ]);

  // opções de tamanho, titulo e legendas.
   var options = {
   'width':620,
   'height':300,
   legend: {  position: 'none' },
   bar: { groupWidth: '75%' },
   isStacked: true,
    vAxis: {
      title: '115 POSTS'
    },
    hAxis: {
      title: '*Principal rede social utilizada no Brasil'
    },
 };

   // escolhe o modelo do gáfico.
   var chart = new google.visualization.BarChart(document.getElementById('grafico_MS-MAI'));
// finaliza e executa.
chart.draw(data, options);
}
//---------------------------------------------------------------------------------------------------
