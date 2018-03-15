$(function () {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2016 Q1',
            consultation: 2666,
        }, {
            period: '2016 Q2',
            consultation: 2778,
        }, {
    period: '2016 Q3',
            consultation: 4912,
        }, {
            period: '2016 Q4',
            consultation: 3767,
        }, {
            period: '2017 Q1',
            consultation: 6810,
        }, {
            period: '2017 Q2',
            consultation: 5670,
        }, {
            period: '2017 Q3',
            consultation: 4820,
        }, {
            period: '2017 Q4',
            consultation: 15073,
        }, {
            period: '2018 Q1',
            consultation: 10687,
        }, {
            period: '2018 Q2',
            consultation: 8432,
        }],
        xkey: 'period',
        ykeys: ['consultation'],
        labels: ['consultation'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'Décemebre 2017',
            a: 100,
            b: 90
        }, {
            y: 'Janvier 2018',
            a: 75,
            b: 65
        }, {
            y: 'Février 2018',
            a: 50,
            b: 40
        }, {
            y: 'Mars 2018',
            a: 75,
            b: 65
        }, {
            y: 'Avril 2018',
            a: 50,
            b: 40
        }, {
            y: 'Mai 2018',
            a: 75,
            b: 65
        }, {
            y: 'Juin 2018',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
