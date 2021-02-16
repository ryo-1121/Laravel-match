@extends('layouts.layout')

@section('content')
<div class="signupPage">
  <header class="header">
    <div>プロフィールを編集</div>
  </header>

  <form class="form mt-5" method="POST" action="/users/update/{{ $user->id }}" enctype="multipart/form-data">
    @csrf

    @error('email')
    <span class="errorMessage">
      {{ $message }}
    </span>
    @enderror

    <div class="photo-flex">
      <div>
        <label for="file_photo1" class="rounded-circle userProfileImg">
          <div class="userProfileImg_description">画像をアップロード</div>
          <i class="fas fa-camera fa-3x"></i>
          <input type="file" id="file_photo1" name="img_name1">
        </label>
        <p>トップの写真</p>
        <div class="userImgPreview" id="userImgPreview1">
          <img id="thumbnail1" class="userImgPreview_content" accept="image/*" src="">
          <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
      </div>

      <div style="margin: 0 20px;">
        <label for="file_photo2" class="rounded-circle userProfileImg">
          <div class="userProfileImg_description">画像をアップロード</div>
          <i class="fas fa-camera fa-3x"></i>
          <input type="file" id="file_photo2" name="img_name2">
        </label>
        <p>2枚目の写真</p>
        <div class="userImgPreview" id="userImgPreview2">
          <img id="thumbnail2" class="userImgPreview_content" accept="image/*" src="">
          <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
      </div>

      <div>
        <label for="file_photo3" class="rounded-circle userProfileImg">
          <div class="userProfileImg_description">画像をアップロード</div>
          <i class="fas fa-camera fa-3x"></i>
          <input type="file" id="file_photo3" name="img_name3">
        </label>
        <p>3枚目の写真</p>
        <div class="userImgPreview" id="userImgPreview3">
          <img id="thumbnail3" class="userImgPreview_content" accept="image/*" src="">
          <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>名前</label>
      <input type="text" name="name" class="form-control" value="{{ $user->name }}">
    </div>
    <div class="form-group">
      <label>メールアドレス</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
    </div>
    <div class="form-group">
      <div><label>性別</label></div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="sex" value="0" type="radio" id="inlineRadio1" @if($user->sex === 0) checked @endif>
        <label class="form-check-label" for="inlineRadio1">男</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="sex" value="1" type="radio" id="inlineRadio2" @if($user->sex === 1) checked @endif>
        <label class="form-check-label" for="inlineRadio2">女</label>
      </div>
    </div>
    <div class="form-group">
      <label>自己紹介文</label>
      <textarea class="form-control" name="self_introduction" rows="10">{{$user->self_introduction}}
      </textarea>
    </div>
</div>

<div class="text-center">
  <button type="submit" class="btn submitBtn" style="border:1px solid #ced4da">変更する</button>
</div>
</form>
</div>
</div>
@endsection