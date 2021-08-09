<!-- sidebar -->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" aria-expanded="true">
                    <i class="fa fa-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="nav-text">Konfigurasi</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('website-identity.index') }}">Identitas Website</a>
                    </li>
                    <li>
                        <a href="{{ route('telp-identity.index') }}">Identitas Telepon</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('link-master-ct.index') }}">Link Master CT</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('link-ea.index') }}">Link EA</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('our-service.index') }}">Layanan Kami</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="fa fa-refresh"></i>
                    <span class="nav-text">Widget</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('testimoni.index') }}">Testimoni</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}">Gallery</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('paket-ea.index') }}" aria-expanded="false">
                    <i class="fa fa-line-chart"></i>
                    <span class="nav-text">Paket EA</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #/ nk nav scroll -->
</div>
<!-- #/ sidebar -->
