@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i><a href="#">{{ __('Usuarios')}}</a></h1>
@endsection


@section('maincontent')

<div class="page  height-full"> 
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card" style="margin-top: 80px;">
                <div class="form-group">
                    <div class="card-header white">
                        <div class="form-group row">
                            <div class="col-sm-10" style="margin-top: 5px;"><h6>{{ __('LISTA DE USUARIOS') }}</h6>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('users')
                </div>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->

</div>
@endsection
@section('js')
@endsection
