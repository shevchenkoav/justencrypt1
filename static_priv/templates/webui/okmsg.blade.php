@extends('html')

@section('head')
  <title>OK</title>
@append

@section('body')

<table class='messageScreen'><tr><td>
  <div class='messageBox'>
    <div class='messageHeader'>
      <div class='logo'><img src='/pic/message-logo.png'></div>
      <div class='label'><span>JustEncrypt</span></div>
      <div class='borderLeft'></div>
      <div class='borderRight'></div>
    </div>
    <div>{!! $html ? $message : escapeHTML($message) !!}</div>
    <a href='{{ empty($backLink) ? SITE_URI : $backLink }}' class='backLink'><span>{{ empty($backLabel) ? 'Вернуться на сайт' : $backLabel }}</span></a>
  </div>
</td></tr></table>

@stop