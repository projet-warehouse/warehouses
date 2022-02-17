<style>
    .bg-titre{
    background-color: rgb(255, 255, 255, 0.7);
    }
    .single-slider{
        background-image: url("{{asset('images/'. $banner->pluck('image')->last())}}");
    }
</style>
<div class="single-slider">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-9 offset-lg-3 col-12">
                <div class="text-inner">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="hero-text bg-titre p-4 ">
                                <h1>{{$banner->pluck('titre')->last()}}</h1>
                                <p>{{$banner->pluck('description')->last()}}</p>
                                <div class="button">
                                    <a href="{{$banner->pluck('lien-href')->last()}}" class="btn">{{$banner->pluck('lien-text')->last()}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>