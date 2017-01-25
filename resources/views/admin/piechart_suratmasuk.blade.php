  @extends('layout.main_template')
  @section('judul_konten', 'Grafik')

  @section('konten')

           <div class="row">              
              <!-- col -->
              <div class="col-sm-12">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div>
            </div>
        

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        
        <script type="text/javascript">
           $(function () {
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: '<br>E-Office Pie Chart dari 2016-Sekarang'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{                          
                        name: 'Brands',
                        colorByPoint: true,
                        data: [
                                @foreach($data['suratmasuk'] as $surat)
                                    @if($surat->total_surat !== 0)
                                        { name:  '{{ $surat->realname }} - {{ $surat->jabatan }}', y: {{ $surat->total_surat }} },
                                    @endif
                                @endforeach    
                        ]
                    }]
                });
            });
        </script>



                                    
            
@stop
