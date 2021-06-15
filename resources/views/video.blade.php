@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="{{asset('./css/video.css')}}">
<title>Video</title>

@stop
@section('content')
<main>
    <div class="container">
        <div class="card">
            <p>{!! __('video.DOGU FourSeason - о компании') !!}</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MKbrENxtoVY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="card">
            <p>{!! __('video.Компания DOGU') !!}</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/q33OSqSfy1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="card">
            <p>{!! __('video.Компактные моноблочные установки с роторным рекуператором серии RTER') !!}</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/IGAW_qhr_pA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</main>
@stop
