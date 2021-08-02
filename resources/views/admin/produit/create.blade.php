@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Produit</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/produit') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/produit') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
        @method('POST')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom</strong>
                    <input type="text" name="nom" value="" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reference</strong>
                    <input type="text" name="reference" value="" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:150px" name="description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prix</strong>
                    <input type="text" name="prix" value="" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
