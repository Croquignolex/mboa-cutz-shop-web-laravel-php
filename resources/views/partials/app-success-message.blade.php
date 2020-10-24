@if(session()->has('toast.type') && session('toast.type') === "success")
    <div class="alert alert-success fade show" role="alert">
        <i class="fe fe-check-circle mr-2"></i> {{ session('toast.message') }}
    </div>
@endif
