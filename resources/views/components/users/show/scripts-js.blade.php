<script>
    (function() {
    $(document).on('click', '.follow-button-input', function(e){
        //e.preventDefault()

        const userId = $(this).attr('data-user-id')

        @if(\Illuminate\Support\Facades\Auth::guest())
            $('.follow-label[data-user-id="' + userId + '"]').html('Follow')
            $('.follow-button-input[data-user-id="' + userId + '"]').prop('checked', false)
            $('.choice-tag--checked[data-user-id="' + userId + '"]').removeClass('choice-tag--checked')
            location.href = '/login'
        @endif

        $.ajax({
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                userId: userId,
            },
            url: '{{route('users.follow')}}',
            type: 'POST',
            success:function(response){
                if(response.message === 'Unauthenticated.'){
                    location.href = '/login'
                }

                if(parseInt(response.status) === 1){
                    $('.follow-label[data-user-id="' + userId + '"]').html('Unfollow')
                    $('.follow-button-input[data-user-id="' + userId + '"]').prop('checked', true)
                }   else{
                    $('.follow-label[data-user-id="' + userId + '"]').html('Follow')
                    $('.follow-button-input[data-user-id="' + userId + '"]').prop('checked', false)
                    $('.choice-tag--checked[data-user-id="' + userId + '"]').removeClass('choice-tag--checked')
                }
            }
        });
    })

    $(document).on('keyup', '#userBio', function(e){
        $('#bioLength').html(300 - $(this).val().length)
    })
}());
</script>