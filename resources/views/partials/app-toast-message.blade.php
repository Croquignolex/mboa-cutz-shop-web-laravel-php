@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger fade show" role="alert">
        <i class="fe fe-x-circle mr-2"></i> {{ session('toast.message') }}
    </div>
@endif
@if(session()->has('toast.type') && session('toast.type') === "info")
    <div class="alert alert-info fade show" role="alert">
        <i class="fe fe-alert-circle mr-2"></i> {{ session('toast.message') }}
    </div>
@endif
@if(session()->has('toast.type') && session('toast.type') === "success")
    <div class="alert alert-success fade show" role="alert">
        <i class="fe fe-check-circle mr-2"></i> {{ session('toast.message') }}
    </div>
@endif
