@if ($errors->any() || session('success'))
    <!--Toast-->
    <div class="toast fixed-top mx-auto text-white {{ $errors->any() ? 'bg-danger' : "" }}{{ session('success') ? 'bg-success' : '' }}" role="alert" data-animation="true" data-autohide="false" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
        @if ($errors->any())
            <div class="fw-bold">Errors</div>
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        @endif
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        </div>
    </div>
    <!--Toast End-->
    <script>
        $(document).ready(function(){
            var toast = new bootstrap.Toast($('.toast'));
            toast.show();
        });
    </script>
@endif