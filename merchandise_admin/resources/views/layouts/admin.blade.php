

@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.topbar')


<body>
   @include('layouts.sidebar')
   <div class="pc-container">
       @yield('content')
   </div>
</body>

@include('layouts.footer')


