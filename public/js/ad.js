$('#add-image').click(function(){
    /* Je récupère l'indice des futurs champs à créer : */
    // const index = $('#ad_images div.form-group').length;
    const index = +$('#widgets-counter').val();

    /* Je récupère le Prototype des "entry" : */
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);

    /* J'injecte "tmpl" au sein de la "div#ad_images" : */
    $('#ad_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    /* Je gère le bouton "Supprimer" : */
    handleDeleteButtons();
});

function handleDeleteButtons() {
    $('button[data-action="delete"]').click(function() {
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter() {
    const count = +$('#ad_images div.form-group').length;
    $('#widgets-counter').val(index + 1);
}

updateCounter();
handleDeleteButtons();