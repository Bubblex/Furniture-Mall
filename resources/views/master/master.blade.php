{{--
  定义一个通用的模板，用于被其他模板集成
  通过 @section 语法来定义代码块的位置，@yield 来定义变量
--}}

<!DOCTYPE html>
<html class="@yield('html-class')">
<head class="@yield('head-class')">
  {{-- head 标签内前置内容 --}}
  @section('head-before')
  @show

  {{-- 网页的标题 --}}
  <title>@yield('title')</title>

  {{-- meta 块，用于存放网页的 meta 标签，例如编码信息、移动设备尺寸信息等 --}}
  @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @show

  {{-- 页面中必须引用的通用样式或框架样式 --}}
  @section('required-style')
  @show

  {{-- 页面中用到的插件样式 --}}
  @section('vendor-style')
  @show

  {{-- 页面中用到的自定义样式 --}}
  @section('page-style')
  @show

  {{-- head 标签后置内容 --}}
  @section('head-after')
  @show

  {{-- 项目中必须要引用的通用脚本文件 --}}
  @section('required-script')
  @show

  {{-- 页面中用到的插件脚本 --}}
  @section('vendor-script')
  @show

  {{-- 页面中用到的自定义脚本 --}}
  @section('page-script')
  @show
</head>
<body class="@yield('body-class')">
  {{-- body 标签内的前置内容 --}}
  @section('body-before')
  @show

  {{-- 网页中的头部，例如网站logo、网站导航等等 --}}
  @section('header')
  @show

  {{-- 网页中的侧边栏，例如菜单 --}}
  @section('sidebar')
  @show

  {{-- 网页中的主要内容 --}}
  @section('main')
  @show

  {{-- 页面中底部的内容，例如备案信息、公司信息说明 --}}
  @section('footer')
  @show

  {{-- body 标签内的后置内容 --}}
  @section('body-after')
  @show
</body>
</html>
