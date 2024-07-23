<div style="width: 650px">
    <div style="display: flex">
        <h3>Edit Customer</h3>
        <a style="margin: 22px; text-decoration:none;" wire:navigate href='/customers'>All Customers</a>

    </div>
    <hr>
    <form wire:submit="update">

        <label for="">name</label><br>
        <input wire:model="name" type="text">
        <div>
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div><br>
        <label for="">Email address</label><br>
        <input wire:model="email" type="email">
        <div>
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div><br>
        <label for="">Phone</label><br>
        <input wire:model="phone" type="number">
        <div>
            @error('phone')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div><br>
        <button type="submit">Submit</button>
    </form>
</div>
