@if(session()->has('toast.type') && session('toast.type') === "danger")
    <div class="alert alert-danger alert-highlighted fade show" role="alert">
        <h5>
            <i class="mdi mdi-alert mr-1"></i>
            {{ session('toast.title') }}
        </h5>
        <p class="mt-2">{{ session('toast.message') }}</p>
    </div>
@endif