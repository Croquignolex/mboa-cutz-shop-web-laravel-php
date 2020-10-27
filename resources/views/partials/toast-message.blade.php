@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger fade show" role="alert">
        <i class="oi oi-circle-x mr-1"></i> {{ session('toast.message') }}
    </div>
@endif
@if(session()->has('toast.type') && session('toast.type') === "info")
    <div class="alert alert-info fade show" role="alert">
        <i class="oi oi-warning mr-1"></i> {{ session('toast.message') }}
    </div>
@endif
@if(session()->has('toast.type') && session('toast.type') === "success")
    <div class="alert alert-success fade show" role="alert">
        <i class="oi oi-circle-check mr-1"></i> {{ session('toast.message') }}
    </div>
@endif