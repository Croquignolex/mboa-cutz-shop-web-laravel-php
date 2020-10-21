@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger fade show" role="alert">
        <i class="fe fe-alert-circle mr-2"></i> {{ session('toast.message') }}
    </div>
@endif
