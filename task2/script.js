document.getElementById('link_btn_js').addEventListener('click', function() {
    imgList = document.getElementsByTagName('img');

    if (typeof imgList !== 'undefined') 
    {
        btnJs = document.getElementById('link_btn_js');
        btnPhp = document.getElementById('link_btn_php');
        
        for (let item of imgList) {
            hrefAttr = item.currentSrc;
            wrapper = document.createElement('a');
            wrapper.setAttribute('href', hrefAttr);
            wrapper.setAttribute('target', '_blank');
            item.parentNode.insertBefore(wrapper, item);
            wrapper.appendChild(item);
        }

        btnJs.textContent = 'Complete!';
        btnJs.setAttribute('disabled', '');  

        btnPhp.textContent = 'Complete!';
        btnPhp.setAttribute('class', 'btn btn-outline-primary disabled');
    }

});