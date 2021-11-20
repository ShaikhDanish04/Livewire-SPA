<div>
    @livewire('pages.'.(empty($page) ? 'dashboard' : $page), key(strval(now())))
</div>
