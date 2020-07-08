@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
            <img src="https://s.ftcdn.net/v2013/pics/all/curated/RKyaEDwp8J7JKeZWQPuOVWvkUjGQfpCx_cover_580.jpg?r=1a0fc22192d0c808b8bb2b9bcfbf4a45b1793687" alt="" class="rounded-circle" style="height: 100px; width: 100px">
      </div>
      <div class="vol-9 pt-5 ">
          <div><h1>{{ $user->name }}</h1></div>
          <div class="d-flex">
              <div class="pr-5"><strong>123</strong> Followers</div>
              <div class="pr-5"><strong>25k</strong> Likes</div>
              <div class="pr-5"><strong>45</strong> Applouse</div>
          </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
          <div>
            <a href="#">{{$user->profile->url}}</a>
          </div>
      </div>
  </div>
</div>
@endsection
