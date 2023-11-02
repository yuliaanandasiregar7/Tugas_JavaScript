@include('admin.layout.sidebar')
<div id="content-wrapper" class="d-flex-column">

<div id="content">

@include('admin.layout.top')
<div class="container-fluid">

@yield('content')

</div>
    </div>
        </div>
            </div>
@include('admin.layout.footer')