document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', function() {
        
        const imageUrl = this.querySelector('img').getAttribute('src');
        
        window.open(imageUrl, '_blank');
    });
});
