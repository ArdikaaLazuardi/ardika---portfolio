@extends('layouts.app')

@section('title','Home — Portfolio')

@section('content')
  @include('sections.about')
  @include('sections.projects')
  @include('sections.interests')
  @include('sections.contact')
@endsection
