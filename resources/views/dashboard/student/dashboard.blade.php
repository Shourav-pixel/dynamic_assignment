@extends('studentlayout')
@section('content')

<h2 style="text-align:right;">Hi,{{ session('username') }}</h2>

<div class="col-sm-6">
	<iframe src="http://free.timeanddate.com/clock/i616j2aa/n1993/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
</div>

<style>
body {
  background-image: url('sdashboard.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
@endsection