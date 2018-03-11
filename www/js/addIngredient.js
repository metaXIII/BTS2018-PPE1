function AddInput(i) {
    if (i < 20) {
        $(".font-weight-bold").hide();
        $("<div id='ingredient" + i + "'><label for='ingredient" + i + "'>Ingrédient " + i + "</label>" +
            "<input type='text' name='ingredient" + i + "'" + "placeholder='Ingredients'" +
            "class='form-control'><button class='font-weight-bold' onclick='AddInput(" + (i + 1) + ");return " +
            "false;" +
            "'>+</button></div>")
            .insertAfter("#ingredient" + (i - 1));
    }
    else {
        $(".font-weight-bold").hide();
        $("<div id='ingredient" + i + "'><label for='ingredient" + i + "'>Ingrédient " + i + "</label>" +
            "<input type='text' name='ingredient" + i + "'" + "placeholder='Ingredients'" +
            "class='form-control'></div>")
            .insertAfter("#ingredient" + (i - 1));
    }
}