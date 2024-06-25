@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
               <ul class="list-group">
                <a href="" class="list-group-item list-group-item-action">View</a>
                <a href="" class="list-group-item list-group-item-action">Create</a>
               </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game it up</div>

                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>

                  <div class="form-group">
                    <label for="name">Game Description</label>
                    <textarea class="form-control" name="description"></textarea>
                  </div>

                  <div class="form-inline">
                    <label>PS5 CONSOLE(GHC)</label>
                    <input type="number" class="form-control" placeholder="ps5">
                    <input type="number" class="form-control" placeholder="virtual">
                    <input type="number" class="form-control" placeholder="basketball">
                  </div>

                  <div class="form-group">
                    <label for="description">Category</label>
                    <select class="form-control">
                        <option value=""></option>
                        <option value="arcade">Arcade</option>
                        <option value="kids-arcade">Kids arcade</option>
                        <option value="redemption-arcade">Redemption Arcade</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control">
                  </div>

                  <div class="col-12 text-center mt-5">
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
