<div class="row mt-3">
    <div class="col d-flex justify-content-center align-items-center">
        <!-- Previous link -->
        @if($objects->currentPage() > 1)
            <a href="{{ $objects->previousPageUrl() }}">@include('components.buttons.smallbutton',['text'=>'Previous'])</a>
        @endif

        <!-- Current Page Number -->
        <span class="pagination-indecator text-white-color mx-2 hyper-helix"> {{ $objects->currentPage() }} </span>

        <!-- Next link -->
        @if($objects->hasMorePages())
            <a href="{{ $objects->nextPageUrl() }}">@include('components.buttons.smallbutton',['text'=>'Next'])</a>
        @endif
    </div>
</div>