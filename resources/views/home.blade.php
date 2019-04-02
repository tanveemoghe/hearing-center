@extends('layouts.app')

@section('content')
<div class="row" role="main">
    <h3></h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                Dashboard
            </div>
            @if($flash = session('msg')) 
            <div class="alert alert-success text-center alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $flash }}
            </div>
            @endif

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <div class="card text-white bg-warning">
                        <div class="card-body">
                          <div class="h1 text-muted text-right mb-4">
                            <i class="icon-basket-loaded"></i>
                          </div>
                          <div class="text-value">
                              <a href="/invoice/create">
                                  <small class="text-muted text-uppercase font-weight-bold">Create Invoice</small>
                              </a>
                          </div>
                          <div class="progress progress-white progress-xs mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-md-4">
                      <div class="card text-white bg-success">
                        <div class="card-body">
                          <div class="h1 text-muted text-right mb-4">
                            <i class="icon-basket-loaded"></i>
                          </div>
                          <div class="text-value">
                              <a href="/invoice">
                                  <small class="text-muted text-uppercase font-weight-bold">View All Invoices</small>
                              </a>
                          </div>
                          <div class="progress progress-white progress-xs mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <!--/.col-->
                    <div class="col-sm-6 col-md-4">
                      <div class="card text-white bg-primary">
                        <div class="card-body">
                          <div class="h1 text-muted text-right mb-4">
                            <i class="icon-layers"></i>
                          </div>
                          <div class="text-value">
                              <a href="/product/create">
                                  <small class="text-muted text-uppercase font-weight-bold">Add Product</small>
                              </a>
                          </div>
                          <div class="progress progress-white progress-xs mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-md-4">
                      <div class="card text-white bg-danger">
                        <div class="card-body">
                          <div class="h1 text-muted text-right mb-4">
                            <i class="icon-layers"></i>
                          </div>
                          <div class="text-value">
                              <a href="/product">
                                  <small class="text-muted text-uppercase font-weight-bold">View Products</small>
                              </a>
                          </div>
                          <div class="progress progress-white progress-xs mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
              <!--/.col-->
            </div>
            <!--/.row-->
            
            </div>
        </div>
    </div>
</div>
@endsection