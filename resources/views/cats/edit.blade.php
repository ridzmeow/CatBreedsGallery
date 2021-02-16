@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update cat breed</div>
                <div class="card-body">
                  <form action="/update" method="POST">
                  @csrf 
                  <input type="hidden" name="id" value="{{$cat->id}}">
                  <!--cross sign request feature -->
                    <div class="form-group row">
                      <label for="breed" class="col-md-4 col-form-label text-md-right">Input Breed:</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="breed" name="breed" value="{{ $cat->breed }}">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="type" class="col-md-4 col-form-label text-md-right">Choose Type:</label>
                      <div class="col-md-6">
                        <fieldset>
                          <input type="checkbox" name="type[]" value="natural" {{ in_array("natural", $cat->type) ? 'checked' : '' }}>Natural<br />
                          <input type="checkbox" name="type[]" value="mutation" {{ in_array("mutation", $cat->type) ? 'checked' : '' }}>Mutation<br />
                          <input type="checkbox" name="type[]" value="crossbreed" {{ in_array("crossbreed", $cat->type) ? 'checked' : '' }}>Crossbreed
                        </fieldset>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="coatLength" class="col-md-4 col-form-label text-md-right">Coat Length:</label>
                      <div class="col-md-6">
                        <select name="coatLength" id="coatLength" class="form-control">
                          <option value="short" {{$cat->coatLength=='short' ? 'selected' : ''}}>Short</option>
                          <option value="semi-long" {{$cat->coatLength=='semi-long' ? 'selected' : ''}}>Semi-long</option>
                          <option value="rex" {{$cat->coatLength=='rex' ? 'selected' : ''}}>Rex</option>
                          <option value="all" {{$cat->coatLength=='all' ? 'selected' : ''}}>All</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection