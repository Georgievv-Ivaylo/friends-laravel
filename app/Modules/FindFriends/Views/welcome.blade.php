@include('components.header', ['head' => [ 'title' => 'Find Friends' ]])
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="h1 m-b-md">
                Find Friends
            </div>
            <div class="h2">{{ $user['title'] }} - {{ $user['country']['language_name'] }}</div>

            <div class="info-msg">
                @if (count($friends))
                	<div class="row">
                    	<div class="col-sm-2 col-lg-3">&nbsp;</div>
                    	<div class="col-sm-1">№</div>
                    	<div class="col-sm-4 col-lg-3">
                    		Name:
                    	</div>
                    	<div class="col-sm-4 col-lg-3">
                    		Country:
                    	</div>
                	</div>
            	@endif
                @forelse ($friends as $friend)
                	<div class="row">
                    	<div class="col-sm-2 col-lg-3">&nbsp;</div>
                    	<div class="col-sm-1 text-right">{{ $friend['id'] }}</div>
                    	<div class="col-sm-4 col-lg-3 text-left pad-2">
                    		{{ $friend['title'] }}
                    	</div>
                    	<div class="col-sm-4 col-lg-3 text-left pad_2">
                    		{{ $friend['country']['language_name'] }}
                    	</div>
                	</div>
                @empty
                	<div class="error-msg">
                    	No friends
                    </div>
                @endforelse
			</div>
        </div>
    </div>
@include('components.header', ['head' => [ 'title' => 'Find Friends' ]])
