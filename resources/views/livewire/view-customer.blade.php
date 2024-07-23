<div>
    <h3>Show Customer</h3>
    <h5>{{ $customer->name }}</h5>
    <h5>{{ $customer->email }}</h5>
    <h5>{{ $customer->phone }}</h5>
    <a wire:navigate href="/customers"></a>
</div>
