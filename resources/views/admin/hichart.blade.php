  @extends('layout.main_template')
  @section('judul_konten', 'Grafik Surat Masuk')

  @section('konten')

        <div class="row">  
            <div class="col-sm-12">
                <div id="container" style="min-width: 320px; margin: 0 auto;height: 800px;"></div>
                <button id="plain">Plain</button>
                <button id="inverted">Inverted</button>
                <button id="polar">Polar</button>
            </div>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>        

        <script type="text/javascript">
           $(function () {
                var chart = Highcharts.chart('container', {

                    title: {
                        text: 'Grafik Surat Masuk'
                    },

                    subtitle: {
                        text: 'Inverted'
                    },

                    xAxis: {
                        
                        categories: [
                                        @foreach($data['suratmasuk'] as $surat)
                                            @if($surat->total_surat !== 0)
                                                '{{ $surat->realname }} - {{ $surat->jabatan }}',
                                            @endif
                                        @endforeach     
                        ]
                    },

                    series: [{
                        name: 'Surat Masuk',
                        type: 'column',
                        colorByPoint: true,                          
                        data: [
                                @foreach($data['suratmasuk'] as $surat)
                                    @if($surat->total_surat !== 0)
                                        {{ $surat->total_surat }},
                                    @endif
                                @endforeach  
                        ],
                        showInLegend: false
                    }]

                });


                $('#plain').click(function () {
                    chart.update({
                        chart: {
                            inverted: false,
                            polar: false
                        },
                        subtitle: {
                            text: 'Plain'
                        }
                    });
                });

                $('#inverted').click(function () {
                    chart.update({
                        chart: {
                            inverted: true,
                            polar: false
                        },
                        subtitle: {
                            text: 'Inverted'
                        }
                    });
                });

                $('#polar').click(function () {
                    chart.update({
                        chart: {
                            inverted: false,
                            polar: true
                        },
                        subtitle: {
                            text: 'Polar'
                        }
                    });
                });

            });
        </script>



                                    
            
@stop
