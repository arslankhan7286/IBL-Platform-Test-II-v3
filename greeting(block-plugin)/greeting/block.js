( function ( blocks, element ) {
    var el = element.createElement;

    blocks.registerBlockType( 'greeting-block/greeting-01-basic', {
        edit: function () {
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
              };

            var response = fetch("http://localhost:8000/wp-json/wp/v2/posts?slug=greeting", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
        return response.title.rendered;
        },
        save: function () {
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
              };

            var response = fetch("http://localhost:8000/wp-json/wp/v2/posts?slug=greeting", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
        return response.title.rendered;
        },
    } );
} )( window.wp.blocks, window.wp.element );