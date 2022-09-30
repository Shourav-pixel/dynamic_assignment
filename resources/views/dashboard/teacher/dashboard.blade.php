@extends('layout')
@section('content')

<h2 style="text-align:center;">Hi,{{ session('username') }}</h2>
<style>
    body {
  background-image: url('tdashboard.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


@endsection
