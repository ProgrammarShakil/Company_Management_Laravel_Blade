@if ($errors->any())
    <div class="alert alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <div>
            <p>{{ Session::get('success') }}</p>
        </div>
    </div>
@endif

<div>
    @if (session('Status'))
    <div class="alert alert-success">
        {{ session('Status') }}
    </div>
    @endif
</div>
<div>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
</div>