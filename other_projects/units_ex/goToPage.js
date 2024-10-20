function goToSubsite(id, unitType) {
    window.location.href = `subsites/${unitType}/${id}.html`;
}

function goBack() {
    window.history.back();
}