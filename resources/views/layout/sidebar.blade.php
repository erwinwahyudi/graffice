            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                    <li><a href="dashboard_3.html">Dashboard 3</a></li>
                                    <li><a href="dashboard_4.html">Dashboard 4</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i> <span> Grafik </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/suratmasuk') }}">Surat Masuk</a></li>
                                    <li><a href="{{ url('/suratmasuk-pie') }}">Surat Masuk PieChart</a></li>
                                    <li><a href="{{ url('/disposisi-masuk') }}">Disposisi Masuk</a></li>
                                    <li><a href="{{ url('/disposisi-keluar') }}">Disposisi Keluar</a></li>
                                </ul>
                            </li>                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
