AOS.init();





var d = document;
var navTab = d.getElementsByClassName('nav-tabs');
var tabContent = d.getElementsByClassName('tab-content');
var animateSelect = d.querySelector('.choice-menu > select');
// Default
var animateName = animateSelect.value;
var tempAnimateName = animateSelect.value;

animateSelect.onchange = function(){
  animateName = this.value;
};

for(let i=0; i < navTab.length;i++){
  
  var navTabLink = navTab[i].getElementsByClassName('nav-tabs__link');
  var tabPane = tabContent[i].getElementsByClassName('tab-content__item');

  for(let i=0; i < navTabLink.length;i++){
    
    navTabLink[i].addEventListener('click', function(){
      
      const id = this.getAttribute('href').replace('#','');
      const tabNeedActive = d.getElementById(id);
      
      // remove all class .active
      for(let i=0; i < navTabLink.length;i++){
        navTabLink[i].classList.remove('active');
        tabPane[i].classList.remove('active');
        tabPane[i].classList.remove(tempAnimateName);
      };
      // add class .active
      this.classList.add('active');
      tabNeedActive.classList.add('active');
      tempAnimateName = animateName;
      setTimeout(function(){
        tabNeedActive.classList.add(tempAnimateName);
      }, 1);
    });
  };
}


// Numbre Input


