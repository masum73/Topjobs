<div class="text-center">
    <h1>Popular Category</h1>
    <h6 class="text-muted">{{count($jobs)}} jobs live - {{$count}} added today</h6>
    <br><br>

    <div class="container">
        @foreach($categories->chunk(4) as $category_row)

            <div class="row mb-3">
                @foreach($category_row as $category)

                    <div class="col ">
                        <div class="card" style="width: 14rem; margin:10px;">
                            <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->name }}</h5>
                                <h6 class="text-muted">{{ count($category->getAllJobs) }} open positions</h6>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            <a class="btn btn-primary" href="#" role="button">Browse all Category</a>

            <br>
            <br>

        @endforeach
    </div>
</div>