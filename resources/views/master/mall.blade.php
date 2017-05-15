{{-- 模板继承自 master 里的 master.blade.php --}}
@extends('master.master')

{{-- 定义网站的标题 --}}
@section('title', '家具商城')

{{-- 定义项目中通用的样式 --}}
@section('required-style')
  <link href="/resource/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="/resource/css/style.css" rel='stylesheet' type='text/css' />
@endsection

{{-- 定义项目中的插件样式 --}}
@section('vendor-style')
  <link href="/resource/css/magnific-popup.css" rel="stylesheet" type="text/css">
@endsection

{{-- 定义项目中通用的脚本 --}}
@section('required-script')
  <script src="/resource/js/jquery.min.js"></script>
@endsection

@section('vendor-script')
  <script src="/resource/js/jquery.easydropdown.js"></script>
  <script src="/resource/js/jquery.magnific-popup.js" type="text/javascript"></script>
@endsection

{{-- 定义通用的头部 --}}
@section('header')
  {{-- 导入 header 文件 --}}
  @include('master.mall.header')
@endsection

