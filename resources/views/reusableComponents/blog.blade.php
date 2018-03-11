<section id="blog">
    <div class="container">
        <div class="row">
            <h3 class="center heading">Blog</h3>
        </div>
        <div class="row text-center">
            <p class="center text-muted" style="max-width:500px;">
                In unserem Blog können Sie unsere aktuellen Beiträge zum Thema Digitalbildung und Sozialunternehmertum in der Bildungsbranche lesen.
            </p>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4  col-6" style="margin-left:auto;margin-right:auto;">
                <div class="card shadow">
                    <img class="card-img-top" src="{{$post->image}}" alt="Post Image">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">{{substr($post->body,0,100)}}</p>
                        <a href="{{route('showPost',['post' => $post->id])}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>