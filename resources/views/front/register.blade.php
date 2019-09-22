@extends('front.layouts.base')

@section('content')
<!-- Main Content -->
<main class="main-content">
    <section class="section text-center">
        <div class="container">
            <header class="section-header">
                <h2 class="lead-8"><strong>Register</strong></h2>
                <hr>
                <p class="lead">We waited until we could do it right. Then we did! Instead of creating a carbon copy.</p>
            </header>
            <div class="row">
                <form class="col-md-4 col-xl-4 mx-auto input-border">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Firstname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <button class="btn btn-block btn-xl btn-success">Sign up</button>
                </form>
            </div>

        </div>
    </section>
</main>
@endsection