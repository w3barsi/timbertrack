@if($paginator->hasPages())
<div>
    <center>
        @if(!$paginator->onFirstPage())
        <span wire:click="previousPage"
            style="padding:5px 5px 5px 5px; margin: 5px 5px 5px 5px; color: white; background-color: black; cursor: pointer;">Prev</span>
        @endif
        @if($paginator->hasMorePages())
        <span wire:click="nextPage"
            style="padding:5px 5px 5px 5px; margin: 5px 5px 5px 5px; color: white; background-color: black; cursor: pointer;">Next</span>
        @endif
    </center>
</div>
@endif
