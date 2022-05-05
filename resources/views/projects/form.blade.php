{{-- Project Title --}}
<div class="row mt-5">
    <label for="title" class="col col-form-label text-white-color hyper-helix text-h3">Project Title: </label>
</div>
<div class="row">
    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')??$project->title }}" required autofocus>

        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Project Description --}}
<div class="row mt-5">
    <label for="description" class="col col-form-label text-white-color hyper-helix text-h3">Description: </label>
</div>
<div class="row">
    <div class="col">
        <editor-component data="{{ old('description')??$project->description }}" inputName='description' inputID='description'></editor-component>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Project Date --}}
<div class="row mt-5">
    <label for="date" class="col col-form-label text-white-color hyper-helix text-h3">Project Date: </label>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4">
        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date')??$project->date }}" required>

        @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
