@if(session('alert-section-error'))

    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>&times; خطا </strong>{{ session('alert-section-error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
