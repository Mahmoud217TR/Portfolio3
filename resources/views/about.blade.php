@extends('layouts.app')
@section('title','About Me')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">General</h3>
            <p class="text-white-color savec mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus dolorem sed non qui asperiores aliquid tenetur molestiae doloremque, porro perspiciatis quisquam recusandae repellat eos sequi fugit ad error iusto corrupti! Repudiandae officia vel molestias, corporis quas, facilis placeat doloribus id expedita deleniti ea molestiae perferendis asperiores? Facere sed aliquam nesciunt recusandae ducimus ullam vero atque hic! Ad iure sunt corporis labore non, provident ipsam deserunt ipsum expedita quidem culpa dolore odio voluptatibus dolores, sed iste saepe pariatur aut! Est a ducimus commodi illo alias! Deleniti qui suscipit consectetur quidem dolores. Molestias ullam quae est temporibus inventore molestiae quasi assumenda? Repellendus!
            </p>
        </div>
        <div class="col-lg d-flex justify-content-center align-items-center">
            <div class="attachment">
                @include('info')
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">Education</h3>
            <p class="text-white-color savec mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus dolorem sed non qui asperiores aliquid tenetur molestiae doloremque, porro perspiciatis quisquam recusandae repellat eos sequi fugit ad error iusto corrupti! Repudiandae officia vel molestias, corporis quas, facilis placeat doloribus id expedita deleniti ea molestiae perferendis asperiores? Facere sed aliquam nesciunt recusandae ducimus ullam vero atque hic! Ad iure sunt corporis labore non, provident ipsam deserunt ipsum expedita quidem culpa dolore odio voluptatibus dolores, sed iste saepe pariatur aut! Est a ducimus commodi illo alias! Deleniti qui suscipit consectetur quidem dolores. Molestias ullam quae est temporibus inventore molestiae quasi assumenda? Repellendus!
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">Work Experinces</h3>
            <p class="text-white-color savec mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus dolorem sed non qui asperiores aliquid tenetur molestiae doloremque, porro perspiciatis quisquam recusandae repellat eos sequi fugit ad error iusto corrupti! Repudiandae officia vel molestias, corporis quas, facilis placeat doloribus id expedita deleniti ea molestiae perferendis asperiores? Facere sed aliquam nesciunt recusandae ducimus ullam vero atque hic! Ad iure sunt corporis labore non, provident ipsam deserunt ipsum expedita quidem culpa dolore odio voluptatibus dolores, sed iste saepe pariatur aut! Est a ducimus commodi illo alias! Deleniti qui suscipit consectetur quidem dolores. Molestias ullam quae est temporibus inventore molestiae quasi assumenda? Repellendus!
            </p>
        </div>
    </div>
</div>
@endsection