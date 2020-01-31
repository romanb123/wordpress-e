

$("#search").keyup(function (event) {
    var val = $("#search").val();
    $('#search-result').html('');
    $.get("http://project1.local/wp-json/wp/v2/posts?search=" + val, function (data, status) {
        data.forEach(element => {
            $('#search-result').append(
`<p>${element.slug}</p>`
            );
            console.log(element.slug);
        });
    });

});

