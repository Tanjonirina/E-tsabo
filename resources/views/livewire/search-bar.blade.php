<div>
    <input type="text" wire:model="searchTerm" class="form-control" placeholder="Rechercher...">

    @if(!empty($results))
        <ul>
            @foreach($results as $result)
                <li>{{ $result }}</li>
            @endforeach
        </ul>
    @endif
</div>
