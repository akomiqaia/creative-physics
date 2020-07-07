@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
            <img src="https://s.ftcdn.net/v2013/pics/all/curated/RKyaEDwp8J7JKeZWQPuOVWvkUjGQfpCx_cover_580.jpg?r=1a0fc22192d0c808b8bb2b9bcfbf4a45b1793687" alt="" class="rounded-circle" style="height: 100px; width: 100px">
      </div>
      <div class="vol-9 p-5 ">
          <h1>{{ $user->name }}</h1>
          <div class="d-flex">
              <p class="pr-5"><strong>123</strong> Followers</p>
              <p class="pr-5"><strong>25</strong> Likes</p>
              <p class="pr-5"><strong>45</strong> Applouse</p>
          
          </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quasi, fugit magni debitis nemo distinctio quaerat velit labore! Laudantium consequuntur quidem omnis voluptatibus inventore rerum, dicta doloribus blanditiis assumenda officia?
              </p>
              <a href="akom.netlify.app">akom.netlify.app</a>
      </div>
  </div>
</div>
@endsection
