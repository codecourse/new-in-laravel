<div>
    @foreach($users as $user)
        <div
            @class(['cursor-pointer' => false])
            {!! when(false, 'wire:click="launchEditModal"') !!}
        >{{ $user->name }}</div>
    @endforeach
</div>
