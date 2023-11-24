function toggleInvert(element) {
    if (element.classList.contains('inverted')) {
        element.classList.remove('inverted');
    } else {
        element.classList.add('inverted');
    }
    const altValue = element.getAttribute('data-alt');

    const images = document.querySelectorAll(`.img_clue[alt="${altValue}"]`);

    images.forEach(function(img) {
        if (img.classList.contains('inverted')) {
            img.classList.remove('inverted');
        } else {
            img.classList.add('inverted');
        }
    });

    const buttons = document.querySelectorAll("button");
    let button_pressed =[];
    buttons.forEach(function (but){
            if(but.classList.contains('inverted')){
                button_pressed.push(but.getAttribute('data-alt'))
            }
    })
    console.log(button_pressed);

    const entites = document.querySelectorAll('.entite');
    entites.forEach(function (ent) {
        const clues = ent.getAttribute('data-clues').split(',');
        ent.style.display = 'block'
        button_pressed.forEach(function(pressed) {
            if (!clues.includes(pressed.trim())) {
                ent.style.display = 'none';
            }
        })
    })
}