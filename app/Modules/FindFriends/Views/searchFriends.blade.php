@include('components.header', ['head' => [ 'title' => 'Find Friends' ]])
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="h1 m-b-md">
                Find Friends
            </div>

            <div class="p_20">
                @if (count($friends))
                	<div class="row">
                    	<div class="col-sm-2 col-lg-3">&nbsp;</div>
                    	<div class="col-sm-4 col-lg-3 border-bottom h3">
                    		Name:
                    	</div>
                    	<div class="col-sm-4 col-lg-3 border-bottom h3">
                    		Country:
                    	</div>
                	</div>
            	@endif
                @forelse ($friends as $friend)
                	<div class="row">
                    	<div class="col-sm-2 col-lg-3">&nbsp;</div>
                    	<div class="col-sm-4 col-lg-3 p_10 border-bottom">
                    		{{ $friend['title'] }}
                    	</div>
                    	<div class="col-sm-4 col-lg-3 p_10 border-bottom">
                    		{{ $friend['country']['language_name'] }}
                    	</div>
                	</div>
                @empty
                	<div class="error-msg text-center">
                    	No friends to show
                    </div>
                @endforelse
                @if (count($friends))
                	<div class="text-center">
                		{!! $friends->render() !!}
                	</div>
            	@endif
			</div>
        </div>
    </div>
@include('components.footer')
