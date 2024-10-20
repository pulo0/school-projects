function onOpen() {
    const table = document.getElementById('add-form');
    const button = document.getElementById('open-new');
    const tableDispStyle = table.style.display;
    const textButton = button.innerHTML;
    table.style.display = tableDispStyle === 'none' ? 'block' : 'none';
    button.innerHTML = textButton === 'Utwórz nowe TODO' ? 'Przestań tworzyć TODO' : 'Utwórz nowe TODO';
}