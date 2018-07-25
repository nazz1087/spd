@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" >
            <span >&times;</span>
          </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" >
            <span >&times;</span>
          </button>
    </div>
@endif

