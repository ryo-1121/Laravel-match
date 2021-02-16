@extends('layouts.layout')

@section('content')

<div class='usershowPage'>
  <div class='container'>
    <div class='userInfo'>
      <div class="photo-flex" style="margin-top: 20px;">
        @if ($user -> img_name1)
        <div class='userInfo_img'>
          <img src="/storage/images/{{$user -> img_name1}}">
        </div>
        @endif
        @if ($user -> img_name2)
        <div class='userInfo_img'>
          <img src="/storage/images/{{$user -> img_name2}}">
        </div>
        @endif
        @if ($user -> img_name3)
        <div class='userInfo_img'>
          <img src="/storage/images/{{$user -> img_name3}}">
        </div>
        @endif
      </div>
      <div class='userInfo_name'>{{ $user -> name }}</div>
      <div class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</div>
    </div>

  </div>
</div>

@endsection