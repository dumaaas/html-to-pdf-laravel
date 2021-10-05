    var graphs = [ 
        {
            id: 0,
            height: '200px'
        },
        {
            id: 1,
            height: '60px'
        },
        {
            id: 2,
            height: '120px'
        }, 
        {
            id: 3,
            height: '30px'
        },
        {
            id: 4,
            height: '160px'
        },
        {
            id: 5,
            height: '45px'
        }
    ]


    var charts = [
        {
            id: 1,
            marketV: 1900,
            europeV: 1100,
            ukV: 2800
        },
        {
            id: 2,
            marketV: 1000,
            europeV: 1900,
            ukV: 2800
        },
        {
            id: 3,
            marketV: 2800,
            europeV: 1000,
            ukV: 1900
        },
        {
            id: 4,
            marketV: 900,
            europeV: 2300,
            ukV: 1200
        },
        {
            id: 5,
            marketV: 2100,
            europeV: 900,
            ukV: 1700
        },
        {
            id: 6,
            marketV: 1900,
            europeV: 1100,
            ukV: 2800
        },
        {
            id: 7,
            marketV: 800,
            europeV: 2200,
            ukV: 1300
        },
    ]

    graphs.forEach(function( graph, i) {
        var getGraph = document.getElementById("graph"+graph.id);
        getGraph.style.height = graph.height;
    });

    charts.forEach(function (chart, i) {
        var pie = window.piechart;
        new pie({
            canvas: document.getElementById("myCanvas"+chart.id),
            data: {
                market: chart.marketV,
                europe: chart.europeV,
                uk: chart.ukV
            },
            colors: ['#F23801', '#7E748C', '#EE8F57', '#EFB817', '#F7E4D6', '#08050F', '#C62D00'],
            doughnutHoleSize: 0.9,
            offset: 52,
        }).draw();
    });


