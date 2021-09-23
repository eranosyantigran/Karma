$( document ).ready(function() {
    $(".addCart").click(function () {
        let id = $(this).attr('data-id');
            $.ajax({
                url: '/cart/index/' + id,
                data: id,
                method: "POST",
                success: function (res) {
                    console.log(res);
                },
                error: function () {
                    console.log('An error occurred.');
                }
            })
            $.ajax({
                url: '/cart/count',
                method: "POST",
                success: function (data){
                    $('.bagCount').text(data);
                }
            });
        return false;
    });
});
