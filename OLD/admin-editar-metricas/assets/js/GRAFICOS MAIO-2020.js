//--------------------------REQUERIMENTOS--------------------------------------------------------------
//carrega a api do google (só precisa ser chamado uma vez por arquivo)
google.charts.load('current', {'packages':['corechart']});

// define o callback que carrega a  API do google.
google.charts.setOnLoadCallback(graficoREQ);

// chama a função
function graficoREQ() {

  // opções de tamanho, titulo e legendas.
  var options = {
                  'width':650,
                 'height':300};

  // escolhe o modelo do gáfico.
  var chart = new google.visualization.PieChart(document.getElementById('grafico_REQ-MAI'));

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
       // Criar tabela
      var data = google.visualization.arrayToDataTable([
         ['Element', 'secretarias', { role: 'style' }],

            // barras
         ['SEMGOV', chartData['maio']['requerimentos'][0]['semgov'],'#ff0000'],
         ['SEMUS', chartData['maio']['requerimentos'][0]['semus'], '#9d2424' ],
         ['SEMAS', chartData['maio']['requerimentos'][0]['semas'], '#9d2424' ] // título , valor, cor 
      ]);      

     chart.draw(data, options);
     console.log(chartData['maio'])
 })();

}








//--------------------------IMPRENSA--------------------------------------------------------------

 // define o callback que carrega a  API do google.
     google.charts.setOnLoadCallback(graficoI);

// chama a função
function graficoI() {

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

           // Criar tabela
         var data = google.visualization.arrayToDataTable([
         ['Produto', 'Imp',  { role: 'style' }],
 
            // barras
         ['CONTEÚDOS', chartData['maio']['imprensa'][0]['conteudos'],'#ff0000'],
         ['CLIPPINGS', chartData['maio']['imprensa'][0]['clipings'], '#9d2424' ] // título , valor, cor 
      ]);            
     
           chart.draw(data, options);
       })();
}

//---------------------------------DESIGNER GRÁFICO------------------------------------------------

// define o callback que carrega a  API do google.
      google.charts.setOnLoadCallback(graficoDG);

// chama a função
      function graficoDG() {

        

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

           // Criar tabela
         // Criar tabela
        var data = google.visualization.arrayToDataTable([
            ['Produto', 'DG', { role: 'style' }],

               // barras
            ['ARTES', chartData['maio']['design'][0]['artes'],'#f5e70d'],
            ['IMPRESSÕES', chartData['maio']['design'][0]['impressoes'], '#ada746' ] // título , valor, cor 
         ]);
                 
           chart.draw(data, options);
       })();
}

//-----------------------------FOTOGRAFIA E AUDIOVISUAL----------------------------------------------------------


// define o callback que carrega a  API do google.
 google.charts.setOnLoadCallback(graficoFA);

// chama a função
 function graficoFA() {

  

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

         // Criar tabela
       var data = google.visualization.arrayToDataTable([
         ['Produto', 'FA', { role: 'style' }],

            // barras
         ['COBERTURAS', chartData['maio']['fotografia'][0]['cobertura'] ,'#007eff'],
         ['MATERIAL', chartData['maio']['fotografia'][0]['material'], '#1c2e9a' ] // título , valor, cor 
   ]);  
        chart.draw(data, options);
    })();
}
//--------------------------------MIDIA SOCIAL ------------------------------------------------

// define o callback que carrega a  API do google.
 google.charts.setOnLoadCallback(graficoMS);

// chama a função
 function graficoMS() {

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

           // Criar tabela
       var data = google.visualization.arrayToDataTable([
         ['Produto', 'MS', { role: 'style' }],
            // barras
            
         ['SEGUIDORES', chartData['maio']['social'][0]['seguidores'] ,'#a588dc'],
         ['ALCANCE', chartData['maio']['social'][0]['alcance'] , '#60409f' ] // título , valor, cor 
      ]);
      
        chart.draw(data, options);
    })();
// finaliza e executa.
}
//---------------------------------------------------------------------------------------------------
