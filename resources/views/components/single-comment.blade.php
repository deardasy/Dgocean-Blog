@props(['comment'])
<x-card-wrapper class="blade php">
            <div class="d-flex">
              <div>
                <img 
                src="{{$comment->author->avatar}}"
                width="50"
                height="50"
                class="rounded-circle"
                 alt="">
              </div>
              <div class="ms-3">
                <h6>{{$comment->author->name}}</h6>
                <p class="text-secondary">{{$comment->created_at->format("F j, Y, g:i a")}}</p>
                <p class="mt-1">
                  {{$comment->body}}
                </p>
              </div>
            </div>
</x-card-wrapper>