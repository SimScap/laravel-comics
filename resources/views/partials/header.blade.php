<div>
    <div class="centered-container">
        <div class="header-img-container">
        <img src="{{asset("images/dc-logo.png")}}" alt="dc-logo-header">
    </div>    
        <nav class="header-nav">
        <ul>
            @foreach ($headerNav as $data)           
            <li>
            <a>{{$data['text']}}</a>
            </li>
            @endforeach        
        </ul>
        </nav>
    </div>
    <div class="my-jumbotron">
        <img src="{{asset("images/jumbotron.jpg")}}" alt="jumbotron">
    </div>
    <div class="content-goes">
        <div class="my-centered-container">
            @foreach ($headerProduct as $item)                          
            <div class="my-card" >
                <img src="{{$item['thumb']}}" alt="{{$item['type']}}">
            <h4>{{$item['series']}}</h4>
        </div>
        @endforeach
    </div>
    </div>
</div>