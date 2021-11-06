<div>
    @if (session()->has('success'))
        <p style="color:green"> {{ session()->get('success') }}</p>
    @else
        <p style="color:red"> {{ session()->get('failed') }}</p>
    @endif
</div>
