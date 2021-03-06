@extends('layouts.app')
<style>
    #menu * { list-style:none;}
#menu li{ line-height:180%;}
#menu li a{color:#222; text-decoration:none;}
#menu li a:before{ content:"\025b8"; color:#ddd; margin-right:4px;}
#menu input[name="list"] {
	position: absolute;
	left: -1000em;
	}
#menu label:before{ content:"\025b8"; margin-right:4px;}
#menu input:checked ~ label:before{ content:"\025be";}
#menu .interior{display: none;}
#menu input:checked ~ ul{display:block;}
</style>
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i><a href="#">{{ __('Grupos')}}</a></h1>
@endsection


@section('maincontent')

<div class="page  height-full"> 
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card" style="margin-top: 80px;">
                <div class="form-group">
                    <div class="card-header white">
                        <div class="form-group row">
                            <div class="col-sm-10" style="margin-top: 5px;"><h6>{{ __('LISTA DE GRUPOS') }}</h6>
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
                    <div class="row" style="margin-top:-100px;">
                    <div class="col-md-4">
                    <div class="white">
                        <div class="card">
                         
                            <div class="card-body no-p">
                                <div class="tab-content">
                                    <div class="tab-pane animated fadeIn show active" id="v-pills-tab4" role="tabpanel" aria-labelledby="v-pills-tab1">
                                    @livewire('groups')
                                        <div class="slimScroll b-b" data-height="385">
                                        <ul id="menu">
                                            <li><input type="checkbox" name="list" id="nivel1-1"><label for="nivel1-1">Nivel 1</label>
                                            <ul class="interior">
                                                    <li><input type="checkbox" name="list" id="nivel2-1"><label for="nivel2-1">Nivel 2</label>
                                                    <ul class="interior">
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><input type="checkbox" name="list" id="nivel2-2"><label for="nivel2-2">Nivel 2</label>
                                                    <ul class="interior">
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#r">Nivel 2</a></li>
                                                </ul>
                                            </li>
                                            <li><input type="checkbox" name="list" id="nivel1-2" checked=""><label for="nivel1-2">Nivel 1</label>
                                                <ul class="interior">
                                                    <li><a href="#r">Nivel 2</a></li>
                                                    <li><input type="checkbox" name="list" id="nivel2-3"><label for="nivel2-3">Nivel 2</label>
                                                    <ul class="interior">
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><input type="checkbox" name="list" id="nivel2-4"><label for="nivel2-4">Nivel 2</label>
                                                    <ul class="interior">
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        <li><a href="#r">Nivel 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#r">Nivel 1</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeIn" id="v-pills-tab2" role="tabpanel" aria-labelledby="v-pills-tab2">
                                        <div class="bg-primary text-white lighten-2">
                                            <div class="pt-5 pb-2 pl-5 pr-5">
                                                <h5 class="font-weight-normal s-14">Yesterday's Income</h5>
                                                <span class="s-48 font-weight-lighter text-primary">
                                    <small>$</small>1100</span>
                                                <div class="float-right">
                                                    <span class="icon icon-money-bag s-48"></span>
                                                </div>
                                            </div>
                                            <canvas width="378" height="94" data-chart="spark" data-chart-type="line" data-dataset="[[620,20,700,50]]" data-labels="['a','b','c','d']"
                                                    data-dataset-options="[
                                    { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                    ]">
                                            </canvas>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover earning-box">
                                                <thead class="no-b">
                                                <tr>
                                                    <th colspan="2">Client Name</th>
                                                    <th>Item Purchased</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u1.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u2.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u3.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u4.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u5.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="white">
                        <div class="card">
                            <div class="card-header bg-primary text-white b-b-light">
                                <div class="row justify-content-end">
                                    <div class="col">
                                        <ul id="myTab4" role="tablist" class="nav nav-tabs card-header-tabs nav-material nav-material-white float-right">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="tab1" data-toggle="tab" href="#v-pills-tab1" role="tab" aria-controls="tab1" aria-expanded="true"
                                                   aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab2" data-toggle="tab" href="#v-pills-tab2" role="tab" aria-controls="tab2" aria-selected="false">Yesterday</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-p">
                                <div class="tab-content">
                                    <div class="tab-pane animated fadeIn show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-tab1">
                                        <div class="bg-primary text-white lighten-2">
                                            <div class="pt-5 pb-2 pl-5 pr-5">
                                                <h5 class="font-weight-normal s-14">Today's Income</h5>
                                                <span class="s-48 font-weight-lighter text-primary">
                                    <small>$</small>960</span>
                                                <div class="float-right">
                                                    <span class="icon icon-money-bag s-48"></span>
                                                </div>
                                            </div>
                                            <canvas width="378" height="94" data-chart="spark" data-chart-type="line" data-dataset="[[28,530,200,430]]" data-labels="['a','b','c','d']"
                                                    data-dataset-options="[
                                    { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                    ]">
                                            </canvas>
                                        </div>
                                        <div class="slimScroll b-b" data-height="385">
                                            <div class="table-responsive">
                                                <table class="table table-hover earning-box">
                                                    <thead class="no-b">
                                                    <tr>
                                                        <th colspan="2">Client Name</th>
                                                        <th>Item Purchased</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u6.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u5.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u4.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u3.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u2.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeIn" id="v-pills-tab2" role="tabpanel" aria-labelledby="v-pills-tab2">
                                        <div class="bg-primary text-white lighten-2">
                                            <div class="pt-5 pb-2 pl-5 pr-5">
                                                <h5 class="font-weight-normal s-14">Yesterday's Income</h5>
                                                <span class="s-48 font-weight-lighter text-primary">
                                    <small>$</small>1100</span>
                                                <div class="float-right">
                                                    <span class="icon icon-money-bag s-48"></span>
                                                </div>
                                            </div>
                                            <canvas width="378" height="94" data-chart="spark" data-chart-type="line" data-dataset="[[620,20,700,50]]" data-labels="['a','b','c','d']"
                                                    data-dataset-options="[
                                    { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                    ]">
                                            </canvas>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover earning-box">
                                                <thead class="no-b">
                                                <tr>
                                                    <th colspan="2">Client Name</th>
                                                    <th>Item Purchased</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u1.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u2.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u3.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u4.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u5.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <div class="col-md-4">
                    <div class="white">
                        <div class="card">
                            <div class="card-header bg-primary text-white b-b-light">
                                <div class="row justify-content-end">
                                    <div class="col">
                                        <ul id="myTab4" role="tablist" class="nav nav-tabs card-header-tabs nav-material nav-material-white float-right">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="tab1" data-toggle="tab" href="#v-pills-tab1" role="tab" aria-controls="tab1" aria-expanded="true"
                                                   aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab2" data-toggle="tab" href="#v-pills-tab2" role="tab" aria-controls="tab2" aria-selected="false">Yesterday</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-p">
                                <div class="tab-content">
                                    <div class="tab-pane animated fadeIn show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-tab1">
                                        <div class="bg-primary text-white lighten-2">
                                            <div class="pt-5 pb-2 pl-5 pr-5">
                                                <h5 class="font-weight-normal s-14">Today's Income</h5>
                                                <span class="s-48 font-weight-lighter text-primary">
                                    <small>$</small>960</span>
                                                <div class="float-right">
                                                    <span class="icon icon-money-bag s-48"></span>
                                                </div>
                                            </div>
                                            <canvas width="378" height="94" data-chart="spark" data-chart-type="line" data-dataset="[[28,530,200,430]]" data-labels="['a','b','c','d']"
                                                    data-dataset-options="[
                                    { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                    ]">
                                            </canvas>
                                        </div>
                                        <div class="slimScroll b-b" data-height="385">
                                            <div class="table-responsive">
                                                <table class="table table-hover earning-box">
                                                    <thead class="no-b">
                                                    <tr>
                                                        <th colspan="2">Client Name</th>
                                                        <th>Item Purchased</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u6.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u5.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u4.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u3.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u2.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeIn" id="v-pills-tab2" role="tabpanel" aria-labelledby="v-pills-tab2">
                                        <div class="bg-primary text-white lighten-2">
                                            <div class="pt-5 pb-2 pl-5 pr-5">
                                                <h5 class="font-weight-normal s-14">Yesterday's Income</h5>
                                                <span class="s-48 font-weight-lighter text-primary">
                                    <small>$</small>1100</span>
                                                <div class="float-right">
                                                    <span class="icon icon-money-bag s-48"></span>
                                                </div>
                                            </div>
                                            <canvas width="378" height="94" data-chart="spark" data-chart-type="line" data-dataset="[[620,20,700,50]]" data-labels="['a','b','c','d']"
                                                    data-dataset-options="[
                                    { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                    ]">
                                            </canvas>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover earning-box">
                                                <thead class="no-b">
                                                <tr>
                                                    <th colspan="2">Client Name</th>
                                                    <th>Item Purchased</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u1.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u2.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u3.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u4.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                             <span class="round">
                                             <img src="assets/img/dummy/u5.png" alt="user">
                                             </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->

</div>
@endsection
@section('js')
@endsection
