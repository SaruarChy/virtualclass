@extends('layout')
@section('content')

<section>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:100px;">
            <div class="col-12">
                <h2 class="text-center text-primary">teacher signup</h2>
            </div>
            <div class="col-12 col-sm-10 col-md-5 align-items-center my-auto">

                <form action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection