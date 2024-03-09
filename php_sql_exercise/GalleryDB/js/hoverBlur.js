document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('mouseenter', function() {
        const altText = this.querySelector('img').getAttribute('alt');
        
        const span = document.createElement('span');
        span.classList.add('alt-text');
        span.innerText = altText;
        
        this.appendChild(span);
    });

    item.addEventListener('mouseleave', function() {
        this.querySelector('.alt-text').remove();
    });
});
