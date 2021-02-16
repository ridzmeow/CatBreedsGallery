@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create new Cat breed</div>
                <div class="card-body">
                  <form action="/cats" method="POST">
                  @csrf 
                    <div class="form-group row">
                      <label for="breed" class="col-md-4 col-form-label text-md-right">Input Breed:</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="breed" name="breed">
                        </div>
                    </div>
                    <div class="form-group row">
                          <label for="type" class="col-md-4 col-form-label text-md-right">Choose Type:</label>
                          <div class="col-md-6">
                            <fieldset>
                          <input type="checkbox" name="type[]" value="natural">Natural<br />
                          <input type="checkbox" name="type[]" value="mutation">Mutation<br />
                          <input type="checkbox" name="type[]" value="crossbreed">Crossbreed
                        </fieldset>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="coatLength" class="col-md-4 col-form-label text-md-right">Coat Length:</label>
                      <div class="col-md-6">
                        <select name="coatLength" id="coatLength" class="form-control">
                          <option value="short">Short</option>
                          <option value="semi-long">Semi-long</option>
                          <option value="rex">Rex</option>
                          <option value="all">All</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>                       
                            </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

