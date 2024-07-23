<div>
    @if(session()->has('success'))
       <div style="background-color: green; padding:5px">
        {{ session('success') }}
       </div>

    @endif
</div>
