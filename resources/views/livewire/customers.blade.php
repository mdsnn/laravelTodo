<div style="width: 650px">

    <div style="display: flex">
        <h3>Customers</h3>
        <a style="margin: 22px; text-decoration:none; color:black; " wire:navigate href='/customers/create'>Create Customers</a>
    </div>
    <div>
        <input style="margin: 5px; padding:5px; border-radius:5px;" wire:model.live.debounce.150ms="search" type="text" name="search" id="" placeholder="search customers">
    </div>
    <livewire:flash-messages/>
    <table>
        <tr class="tableHeader">
            <th id="tableHead">ID</th>
            <th id="tableHead">Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            <th></th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td class="titleA"> <b>{{$customer->id}}</b></td>
            <td class="titleA"> <b>{{$customer->name}}</b></td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>

            <td><button wire:navigate href="/customers/{{$customer->id}}" style="background-color: blue; padding:5px; color:white">view</button></td>
            <td><button wire:navigate href="/customers/{{$customer->id}}/edit" style="background-color: rgb(72, 72, 82); padding:5px; color:white" >edit</button></td>
            <td><button wire:click="destroy({{$customer->id}})"  style="background-color: red; padding:5px; color:white">delete</button></td>

        </tr>
        @endforeach


    </table>

</div>
