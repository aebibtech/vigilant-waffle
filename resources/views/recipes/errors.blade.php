@if ($errors->any())
    <!--Toast-->
    <div class="toast fixed-top mx-auto bg-danger text-white" role="alert" data-animation="true" data-autohide="false" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <div class="fw-bold">Errors</div>
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
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