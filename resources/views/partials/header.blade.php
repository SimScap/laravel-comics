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
</div>