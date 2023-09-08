<html>

<head>
    <title>Restaurants App</title>

<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="icon" type="image/x-icon" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@livewireStyles
</head>

<body>
    <div class="allcontent">
<nav>
<ul>
<li> <a href ="{{ route('make-order') }}"> Make Order </a> </li>

<li> <a href ="{{ route('addNewRestaurant') }}">Add Restaurant </a> </li>
<li> <a href ="{{ route('myOrders') }}">My Orders </a> </li>
<li> <a href ="{{ route('lists') }}">Show Restaurants  </a> </li>
<li> <a href ="{{ route('add-review') }}"> Review Restaurant  </a></li>
<li> <a href ="{{ route('get-reviews') }}">Show Reviews  </a> </li>
<li> <a href ="{{ route('searchRestaurants') }}">Search  </a> </li>

<li class="user-item"> welcome, <b>{{ Auth::user()->name }}</b>! </li>
</ul>   
</nav>
<div class="main">
    @yield('content')
</div>
</div>
@livewireScripts
</body>

</html>