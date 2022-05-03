<div class="project-card">
    <svg class="card-background" width="400" viewBox="0 0 500 325" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.5 305.508V19.9892L21.772 1.5H479.709L498.5 19.9563V305.541L479.721 323.5H21.7606L1.5 305.508Z" fill="#111119" stroke="#00FC92" stroke-width="3"/>
    </svg>
    <h3 class="project-card-title text-h3 text-white-color hyper-helix">
        {{ $project->title??"Project Title" }}
    </h3>
    <img src="{{ $project->thumb()->url??"https://via.placeholder.com/200x130.png/111119?text=image" }}" alt="project-img" class="project-card-img">
    <a href="{{ route('project.show',$project) }}" class="project-link">
        @include('components.buttons.smallbutton',['text'=>'view'])
    </a>
    <p class="project-description text-white-color savec">
        {{ $project->description??"Project Description goes here" }}
    </p>
</div>  