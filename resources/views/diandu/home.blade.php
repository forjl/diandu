@extends('diandu.default')
@section('title','电镀溶液智慧检测系统')

@section('content')
  <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3500">

  <!-- 指示符 -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- 轮播图片 -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/pic/1.jpg">
    </div>
    <div class="carousel-item">
      <img src="pic/2.jpg">
    </div>
    <div class="carousel-item">
      <img src="pic/3.jpeg">
    </div>
  </div>

  <!-- 左右切换按钮 -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

  </div>
  <br>
  <div id="cardcard">
    <a class="text-white" href="diandu/livedata">
      <img src="/pic/ss.png">
      实时数据
    </a>
  </div>
  <br>
  <div id="cardcard">
    <a class="text-white" href="diandu/historycurve">
      <img src="/pic/ls.png">
         历史曲线</a>
    </div>
  </div>
@stop
