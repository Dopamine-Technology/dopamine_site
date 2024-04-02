<!doctype html>
<html lang="en">
@include('parts.head')
<link rel="stylesheet" href="{{asset('assets/main.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body class="bg-[#F3F4F6] ">
@include('parts.header')
@include('pages.' . $page . '.index')
@include('parts.footer')
<script src="{{asset('assets/main.js')}}"></script>
</body>
</html>
