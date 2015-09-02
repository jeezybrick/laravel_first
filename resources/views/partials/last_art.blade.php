    <h5 style="margin-top:5px;">Последняя новость: 
                {!! link_to_action('ArticlesController@show',$latest->title,[$latest->id])!!}</h5>