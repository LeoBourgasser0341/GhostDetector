function toggleInvert(element) {
    if (element.classList.contains('inverted')) {
        element.classList.remove('inverted');
    } else {
        element.classList.add('inverted');
    }
}