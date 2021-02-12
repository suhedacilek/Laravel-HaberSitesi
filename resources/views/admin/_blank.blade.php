@extends('layouts.admin')

@section('title', 'Admin Panel Sayfası')

@section('description')
    Bilgisayar Dünyasının en yeni haberleri..
@endsection
@section('keywords','Bilgisayar','Teknoloji', 'Yazılım')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Blank Page</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blank Page</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    @include('home.message')
                </div>



             </div>
        </div>
    </div>


@endsection

