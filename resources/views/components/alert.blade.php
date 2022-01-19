@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block text-center">
        <strong>{{ $message }}</strong>
    </div>
@endif
