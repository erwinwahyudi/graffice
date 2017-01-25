
/**
* Theme: Ubold Admin Template
* Author: Coderthemes
* Morris Chart
*/

!function($) {
    "use strict";

    var MorrisCharts = function() {};
    
    //creates Stacked chart
    MorrisCharts.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },

    MorrisCharts.prototype.init = function() {

     
        //creating Stacked chart
        var $stckedDataX  = [
            { y : 'KaPuskom', value : 73 },
            { y : 'purek4', value : 4 },
            { y : 'dekanmipa', value : 735 },
            { y : 'subtupuskom', value : 11 },
            { y : 'dekanfh', value : 3 },
            { y : 'kadivjarmul', value : 22 },
            { y : 'muanuddin', value : 2 },
            { y : 'zuhri', value : 1 },
            { y : 'purek3', value : 10 },
            { y : 'purek2', value : 63 },
            { y : 'purek1', value : 13 },
            { y : 'rektor', value : 8454 },
            { y : 'kalpppm', value : 3 },
            { y : 'sekrelpppm', value : 1 },
            { y : 'kabagakad', value : 1 },
            { y : 'arsipbagkemal', value : 1 },
            { y : 'kabagkbuk', value : 1 },
            { y : 'kabaghkbuk', value : 2 },
            { y : 'mbpi', value : 1 },
        ];

        // $.getJSON('http://localhost:2003/api', function(data) {
        //     var stckedData = {'y': 'a', 'value' : 1};
        //     $.each(data.suratmasuk, function(index, val) {             
        //          var stckedData = { 
        //             'y': val.username,
        //             'value': val.total_surat
        //          }                
        //     });
        // });
        // console.log(stckedData);

        var url = window.location.origin + "/api/suratmasuk";
        var $stckedData = jQuery.parseJSON(
                                jQuery.ajax({
                                url: url, 
                                async: false,
                                dataType: 'json'
                            }).responseText
                        );

       this.createStackedChart('morris-bar-stacked', $stckedData, 'nama', ['total_surat'], ['Series A', 'Series B'], ['#5d9cec', '#ebeff2']);

    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);
