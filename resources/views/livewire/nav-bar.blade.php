<div>
    <div style="display: flex; gap:15px;">
        <ul style="display: flex; gap:15px;">
            @auth()
            <li style="list-style: none; "><a style="text-decoration:none; color:black;" wire:navigate href="">dibodibo</a></li>
            <li style="list-style: none"><button wire:click="logout" href="">Logout</button></li>
            @endauth
            @guest()
            <li style="list-style: none; text-decoration:none;"><a style="text-decoration:none;" wire:navigate href="">Register</a></li>
            <li style="list-style: none; text-decoration:none;"><a style="text-decoration:none;" wire:navigate href="">Login</a></li>
            @endguest
        </ul>


    </div>
</div>
