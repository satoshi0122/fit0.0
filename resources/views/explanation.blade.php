@extends('first_layout')

@section('content')
  <h3>システムの説明・概要</h3>

  <p>こちらのサイトは、FIT隊員専用の空きコマを管理するスケジュールシステムです。ミーティングや研修などのイベントで、どの日程のコマが多く参加できるかをわかりやすく表示するために作られたものです。</p><br>

    <img src="img/1.png">
    <p>基本のホーム画面がこちらです。ラインなどで入力を指示されたグループを選択してください。</p><br>
    <img src="img/2.png"><br>
    <p>ご自身のスケジュールを、フォームに沿って入力してください。<br>また、スケジュールの見方としては、黒文字で書かれている名前が、そのコマは参加可能であり、赤文字が、わからない・不明な方です。参加不可は表示されません。黒文字が一番多いコマで、ミーティングや研修などを行うと、集合率が良いです。</p><br>





<br>
  <a href="{{ route('index') }}" class="btn btn--orange btn-c left btn_margin">利用する</a><br><br>

<style>

</style>
  @endsection