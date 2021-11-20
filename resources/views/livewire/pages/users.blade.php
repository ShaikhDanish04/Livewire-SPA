<div>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Users Page</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-8">
                @livewire('components.users.listing')
            </div>
            <div class="col-md-4">
                @livewire('components.users.manage')

            </div>
        </div>
    </div>

</div>
