<div style="width: 650px">
    <div style="display: flex">
        <h3>Login</h3>


    </div>
    <hr>
    <form wire:submit="loginUser">

        <label for="">Email</label><br>
        <input wire:model="email" type="email">
        <div>
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div><br>
        <label for="">Password</label><br>
        <input wire:model="password" type="password">
        <div>
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div><br>
        <button type="submit">Submit</button>
    </form>
    <div class="">
        Don't have an account? <a wire:navigate style="text-decoration: none" href="/login"><span>Register</span></a>
    </div>
</div>
