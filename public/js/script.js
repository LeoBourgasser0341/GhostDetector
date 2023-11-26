function toggleInvert(bouton) {
    switchButton(bouton);
    switchAllClue(bouton);
    sortEntite(bouton);
}

function switchButton(bouton)
{
    if (bouton.classList.contains('enable')) {
        bouton.classList.remove('enable');
        bouton.classList.add('disable');
    }
    else if(bouton.classList.contains('disable')){
        bouton.classList.remove('disable');
    }
    else {
        bouton.classList.add('enable');
    }
}

function switchAllClue(bouton)
{
    const altValue = bouton.getAttribute('data-alt');

    const images = document.querySelectorAll(`.img_clue[alt="${altValue}"]`);

    images.forEach(function(img) {
        switchClue(bouton,img,altValue);
    });
}
function switchClue(bouton,image,clue)
{
    if (bouton.classList.contains('enable')) {
        image.src = `/image/Clue/enable/${clue}.png`;
    }
    else if(bouton.classList.contains('disable')){
        image.src = `/image/Clue/disable/${clue}.png`;
    }
    else {
        image.src = `/image/Clue/${clue}.png`;
    }
}

function sortEntite(bouton)
{
    const entites = document.querySelectorAll('.entite');
    entites.forEach(function (ent) {
        const clues = ent.getAttribute('data-clues').split(',');
        ent.style.display = 'block'
        getBoutons("enable").forEach(function(bouton) {
            if (!clues.includes(bouton.trim())) {
                ent.style.display = 'none';
            }
        })

        getBoutons("disable").forEach(function(bouton) {
            if (clues.includes(bouton.trim())) {
                ent.style.display = 'none';
            }
        })
    })
}

function getBoutons(mode)
{
    const buttons = document.querySelectorAll("button");
    let button_pressed =[];
    buttons.forEach(function (but){
        if(but.classList.contains(mode)){
            button_pressed.push(but.getAttribute('data-alt'))
        }
    })
    return button_pressed;
}