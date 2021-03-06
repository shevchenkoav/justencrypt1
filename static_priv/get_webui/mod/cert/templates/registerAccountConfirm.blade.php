@extends('cabinet')

@section('head')
  <script type='text/javascript' src='/js/mod_cert.js'></script>
@append

@section('modcontent')
<form method='POST' action='{{ $confirmLink }}' class='registerAccountForm'>
  <strong>Внимание:</strong> на ваш почтовый ящик {{ $adminEmail }} будет зарегистрирован аккаунт Let`s Encrypt.
  Указать email перед регистрацией аккаунта можно в <a href='{{ $configLink }}'>настройках системы</a>.
  После регистрации аккаунта Let`s Encrypt изменить его почтовый ящик <strong>будет уже невозможно</strong>, так что
  хорошо подумайте над тем, на какой ящик регистрируете аккаунт. Также для вас будет сгенирирован приватный ключ
  аккаунта, храните его в надёжном месте. Без приватного ключа вы потеряете доступ к вашему аккаунту Let`s Encrypt
  со всеми вашими сертификатами, причём восстановить доступ по email будет также невозможно.<hr>
  <input type='submit' name='understand' value='Я понял. Зарегистрировать аккаунт.'>
</form>
@stop