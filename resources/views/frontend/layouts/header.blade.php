
    <div class="row">
        <div class="col-lg-8 offset-lg-2 mt-3">
            <form action="">
                <div class="form-group">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Product">
                    <div style="position: relative; left: 10px; right: -10px; margin-top: 10px" id="searchProduct"></div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
