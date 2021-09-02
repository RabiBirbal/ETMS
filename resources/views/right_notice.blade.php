<div class="col-lg-3 col-md-4 mt-5">
  <div class="container-fluid p-sm-3"> 
  <h2 class="text-center text-light right_title" data-aos="zoom-in">News</h2>
  @foreach($news as $news_data)
  <div class="scrollbar bg-transparent" id="style-5">
    
    <a href="#" class="card-link">
    <div class="first_notice" data-aos="flip-left" data-aos-duration="1000">
        <div class="notice-date">
          <small>Date: {{$news_data->created_at}}</small>
        </div>
      <hr>
        <h5 class="text-success">{{$news_data->title}}</h5><hr>
        <p class="card-text">{{$news_data->content}}</p>
    </div>
  </a>
    <div class="force-overflow"></div>
  </div>
  @endforeach
</div>
  <!-- notice ends -->
</div>