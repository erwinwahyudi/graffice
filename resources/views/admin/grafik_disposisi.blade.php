  @extends('layout.main_template')
  @section('judul_konten', 'Grafik')

  @section('konten')

           <div class="row">              
              <!-- col -->
              <div class="col-sm-12">
                <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
              </div>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <!-- ./plugin ni bro -->       

        

        <script type="text/javascript">
           $(function () {
                Highcharts.chart('container', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Grafik Disposisi Masuk Masuk 2016-Sekarang'
                    },
                    subtitle: {
                        text: 'Source: e-office.untan.ac.id'
                    },
                    xAxis: {
                        type: 'category',
                        scrollbar: {
                            enabled: true
                        },
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Surat Masuk (surat)'
                        },
                        scrollbar: {
                            enabled: true
                        },
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total surat masuk: <b>{point.y:.1f} surat</b>'
                    },
                    series: [{
                        name: 'Surat Masuk',
                        data: [
                              @foreach($data['disposisi'] as $disposisi)
                                  @if($disposisi->total_disposisi !== 0)
                                      [ '{{ $disposisi->realname }} - {{ $disposisi->jabatan }}', {{ $disposisi->total_disposisi }} ],
                                  @endif
                              @endforeach                       
                        ],
                        dataLabels: {
                            enabled: true,
                            rotation: -90,
                            color: '#FFFFFF',
                            align: 'right',
                            format: '{point.y:.1f}', // one decimal
                            y: 10, // 10 pixels down from the top
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    }]
                });
            });
        </script>



                                    
            
@stop
