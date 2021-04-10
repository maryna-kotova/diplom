const h3s = document.querySelectorAll('.point__title');
const divs = document.querySelectorAll('.point__text');

for (const item of divs) {
   item.classList.add('hide');      
}

for (const item of h3s) {      
      item.addEventListener('click', (event)=>{       
         let parent = event.target.parentElement;        
         let children = parent.children; 
         let h3Element = parent.firstElementChild; 
         let divElement = parent.lastElementChild; 
         let IInH3 = h3Element.firstElementChild;   
         let divElementClassList = divElement.classList;
         console.log(IInH3);             
         for (let i = 0; i < children.length; i++) {
               children[i].classList.toggle('show');                                             
         }  
         if( divElementClassList.contains('show') ){
            IInH3.classList.add('fa-angle-up');
            IInH3.classList.remove('fa-angle-down');
         }
         else{
            IInH3.classList.add('fa-angle-down');
            IInH3.classList.remove('fa-angle-up');
         }      
      })
}

