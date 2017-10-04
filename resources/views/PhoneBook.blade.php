<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div id="app">
   <Myheader></Myheader>
    <div class="container">
      <router-view></router-view>
  </div>
  <Myfooter></Myfooter>
</div>

<script src="{{ asset('js/app.js') }}"></script>