var forEach=function(t,o,r){
    if("[object Object]"===Object.prototype.toString.call(t))
        for(var c in t)
            Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);
    else 
        for(var e=0,l=t.length;l>e;e++)
            o.call(r,t[e],e,t)
};
    
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          if(mobileMenu.classList != 'mobile-menu__modal showMenu'){
            this.classList.toggle("is-active");
          }
          else if(mobileMenu.classList != 'mobile-menu__modal showSearch'||mobileMenu.classList != 'mobile-menu__modal'){
            this.classList.remove("is-active");
          }
         
        }, false);
      });
    }
    const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
    let priceGap = 1000;
    priceInput.forEach(input =>{ 
        input.addEventListener("input", e =>{
            let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);
            
            if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
                if(e.target.className === "input-min"){
                    rangeInput[0].value = minPrice;
                    range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                }else{
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });
    rangeInput.forEach(input =>{
        input.addEventListener("input", e =>{
            let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);
            if((maxVal - minVal) < priceGap){
                if(e.target.className === "range-min"){
                    rangeInput[0].value = maxVal - priceGap
                }else{
                    rangeInput[1].value = minVal + priceGap;
                }
            }else{
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });
    const textContainer = document.querySelector('.text-container');
    const expandButton = document.querySelector('.expand-button');
    const arrow = document.querySelector('.text-container-arrow'); 
    const filtersModal = document.querySelector('.form-modal__btn');
    const categoriesModal = document.querySelector('#form-modal__btn')
    const body = document.querySelector('body')
    const shading = document.querySelector('.shading');
    const filterClose = document.querySelector('.form-modal_close');
    const filterModalClose = document.querySelector('#form-modal_close');
    expandButton.addEventListener('click', function() {
      textContainer.classList.toggle('expanded');
      textContainer.classList.toggle('text-open__container');

      arrow.classList.toggle('turned-arrow')
    });
   
    filtersModal.addEventListener('click', function() {
        shading.classList.toggle('showModal');
        body.classList.toggle('overflow-lock');
    });
    categoriesModal.addEventListener('click', function() {
       
        body.classList.toggle('overflow-lock');
    });
  
    filterClose.addEventListener('click',function(){
        shading.classList.remove('showModal');
        body.classList.remove('overflow-lock')
    })
    filterModalClose.addEventListener('click',function(){
       
        body.classList.remove('overflow-lock')
    })

    const form = document.getElementById('filters__modal');
    const range1Input = document.getElementById('input-min');
    const range2Input = document.getElementById('input-max');
    const checkboxGroup1Inputs = document.querySelectorAll('input[name="checkboxGroup1"]');
    const checkboxGroup2Inputs = document.querySelectorAll('input[name="checkboxGroup2"]');
    
   
 
    
   
   
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
      
      
        const range1Value = range1Input.value;
        const range2Value = range2Input.value;
        const checkboxGroup1Values = Array.from(checkboxGroup1Inputs).map(input => {
          const isChecked = input.checked;
          localStorage.setItem(input.id, isChecked);
          return { value: input.value, isChecked };
        });
        const checkboxGroup2Values = Array.from(checkboxGroup2Inputs).map(input => {
          const isChecked = input.checked;
          localStorage.setItem(input.id, isChecked);
          return { value: input.value, isChecked };
        });
      
        localStorage.setItem('range1Value', range1Value);
        localStorage.setItem('range2Value', range2Value);
      
        const params = new URLSearchParams();
        params.set('min-price', range1Value);
        params.set('max-price', range2Value);
        checkboxGroup1Values.forEach(valueObj => {
          if (valueObj.isChecked) {
            params.append('RAM', valueObj.value);
          }
        });
        checkboxGroup2Values.forEach(valueObj => {
          if (valueObj.isChecked) {
            params.append('type', valueObj.value);
          }
        });
       
        const newUrl = `${window.location.pathname}?${params.toString()}`;
        window.location.href = newUrl;
       
     
      });
      const rangeMinValue= document.getElementById('range-min');
      const rangeMaxValue= document.getElementById('range-max');
      range1Input.value = localStorage.getItem('range1Value') || range1Input.value;
      range2Input.value = localStorage.getItem('range2Value') || range2Input.value;
      rangeMinValue.value = localStorage.getItem('range1Value') ||  rangeMinValue.value;
      rangeMaxValue.value = localStorage.getItem('range2Value') ||  rangeMaxValue.value;
      
      checkboxGroup1Inputs.forEach(input => {
        input.checked = localStorage.getItem(input.id) === 'true';
      });
      
      checkboxGroup2Inputs.forEach(input => {
        input.checked = localStorage.getItem(input.id) === 'true';
      });
      
      const clearButton = document.getElementById('clearButton');
      clearButton.addEventListener('click', function(e) {
     e.preventDefault(); 
        const params = new URLSearchParams(window.location.search);
        params.delete('RAM');
        params.delete('type');
        params.delete('min-price');
        params.delete('max-price');
        params.delete('min-price');
        params.delete('max-price');
        localStorage.setItem('range1Value', 1800);
        localStorage.setItem('range2Value', 5000);
        const checkboxGroup1Values = Array.from(checkboxGroup1Inputs).map(input => {
        
          localStorage.setItem(input.id, 'false');
          
        });
        const checkboxGroup2Values = Array.from(checkboxGroup2Inputs).map(input => {
       
          localStorage.setItem(input.id,'false');
         
        });
        
        const newUrl = `${window.location.pathname}?${params.toString()}`;
        window.location.href = newUrl;
      });
      const sortLinks = document.querySelectorAll('.dropdown-item');
      const selectedText = document.getElementById('selected-text');
      sortLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
         
          const sortParam = this.getAttribute('data-sort');
          const linkText = this.textContent;
          const currentUrl = window.location.href;          
          let url;
          
          if (currentUrl.includes('?')) {
            const baseUrl = currentUrl.split('?')[0];
            const queryParams = new URLSearchParams(window.location.search);
            
            queryParams.set('sort', sortParam);
            url = `${baseUrl}?${queryParams.toString()}`;
          } else {
            url = `${currentUrl}?sort=${sortParam}`;
          }
          selectedText.textContent = `${linkText}`;
          localStorage.setItem('selectedText',`${linkText}`);
        
         
        window.location.href = url;
        });
      });
      const savedText = localStorage.getItem('selectedText');
        if (savedText) {
            sortLinks.forEach(function(item){
              if(savedText == item.textContent){
                item.classList.toggle('picked')
              }
            })
            selectedText.textContent = savedText;
        }
        const mobileMenu = document.querySelector('.mobile-menu__modal')
        const mobileMenuButton = document.querySelector('.hamburger')
        mobileMenuButton.addEventListener('click', function() {
          if(mobileMenu.classList != 'mobile-menu__modal showSearch'){
            body.classList.toggle('overflow-lock');
          }
          else if(mobileMenu.classList == 'mobile-menu__modal'){
            body.classList.remove('overflow-lock');
          }
          mobileMenu.classList.toggle('showMenu');
        
          mobileMenu.classList.remove('showSearch');
        
        })
        const mobileSeacrhButton = document.querySelector('#mobileSearchButton')
        mobileSeacrhButton.addEventListener('click', function() {
         
          if(mobileMenu.classList != 'mobile-menu__modal showMenu'){
            body.classList.toggle('overflow-lock');
          }
          else if(mobileMenu.classList == 'mobile-menu__modal'){
            body.classList.remove('overflow-lock');
          }
          mobileMenu.classList.toggle('showSearch');
          mobileMenu.classList.remove('showMenu');
         
        })
