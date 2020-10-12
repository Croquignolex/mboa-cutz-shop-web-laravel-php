@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger fade show" role="alert">
        <i class="oi oi-warning mr-1"></i> {{ session('toast.message') }}
    </div>
@endif