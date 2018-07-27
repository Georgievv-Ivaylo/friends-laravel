@include('components.header', ['head' => [ 'title' => 'Find Friends' ]])
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="h1 m-b-md">
                Welcome
            </div>

            <a href='{{ route('searchFriends', ['id' => 1]) }}' class="info-btn pointer block-center">Find Friends</a>
        </div>
    </div>
@include('components.footer')
