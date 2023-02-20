<form action="{{route('product.search')}}">
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search for products">
        <div class="input-group-append">
            <span class="input-group-text bg-transparent text-primary">
                <span><i class="fa fa-search"></i></span>
            </span>
        </div>
    </div>
</form>