@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger">
        <i class="fe fe-alert-circle fe-16 mr-2"></i> {{ session('toast.message') }}
    </div>
@endif