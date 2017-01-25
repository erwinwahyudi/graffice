  @extends('layout.main_template')
  @section('judul_konten', 'Notifikasi Ni Bro')

  @section('konten')
          {{-- <ul>
          @foreach($data['suratmasuk'] as $surat)
              @if($surat->total_surat !== 0)
                  <li> { y : '{{ $surat->username }}', value : {{ $surat->total_surat }} }, </li>
              @endif
          @endforeach
          </ul> --}}
                        
                        
            <!-- BAR Chart -->
            <div class="row">              
              <!-- col -->
              <div class="col-sm-12">
                <div class="portlet">
                  <!-- /primary heading -->
                  <div class="portlet-heading">
                    <h3 class="portlet-title text-dark"> Grafik Surat Masuk dari 2016-Sekarang</h3>
                    <div class="portlet-widgets">
                      <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                      <span class="divider"></span>
                      <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                      <span class="divider"></span>
                      <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                      <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                          <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Series A</h5>
                          </li>
                          <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Series B</h5>
                          </li>
                        </ul>
                      </div>
                      <div id="morris-bar-stacked" style="height: 300px;"></div>
                    </div>
                  </div>
                </div>
                <!-- /Portlet -->
              </div>
              <!-- col -->
            </div>
            <!-- End row-->                                    
            
@stop
