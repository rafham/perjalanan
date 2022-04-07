@extends('layout.app')
@section('content')
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <center>
                    <h1 style="color:black;">Selamat Datang {{Auth()->user()->username}}</h1>
                    <h1 style="color:black;">Di Peduli Diri<h1>
                    </center>
                    <img src="{{asset('assets/images/prokes.svg')}}"></img>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @stop