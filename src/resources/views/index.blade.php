@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="home">
    <div class="section__title">
        Game 今日の素材
    </div>
    <div class="date">
        {{ now()->isoFormat('Y年 M月D日（ddd）') }}
    </div>

</div>
@endsection