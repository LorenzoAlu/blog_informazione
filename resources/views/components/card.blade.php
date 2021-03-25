{{-- @props(['title','slug','body','img','user_id','category_id']), --}}
{{-- {{route('articles.show',$article)}} --}}

                <li class="articles__article" style="--animation-order:1"><a class="articles__link" href="{{$route}}">
                        <div class="articles__content articles__content--lhs">
                            <h2 class="articles__title">{{substr($title,0,18)}}...</h2>
                            <p class="articles__body">{{substr($slug,0,16)}}...</p>
                            <p class="articles__body">{{substr($body,0,15)}}[...]</p>
                            <p class="articles__subtitle">Vai All'Articolo</p>
                            <div class="articles__footer">
                                <p>{{$category}}</p>
                                <time>{{$date}}</time>
                            </div>
                        </div>
                        <div class="articles__content articles__content--rhs">
                            <h2 class="articles__title">{{substr($title,0,18)}}...</h2>
                            <p class="articles__body">{{substr($slug,0,16)}}...</p>
                            <p class="articles__body">{{substr($body,0,15)}}[...]</p>
                            <p class="articles__subtitle">Vai All'Articolo</p>
                            <div class="articles__footer">
                                <p>{{$category}}</p>
                                <time>{{$date}}</time>
                            </div>
                        </div>
                    </a>
                </li>


