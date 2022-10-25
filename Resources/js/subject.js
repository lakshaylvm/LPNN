const physicsSubject = document.getElementById('phy');
const physicsArea =document.getElementById('physics');

const areaBlur = document.getElementById('blur');

const toggle_physics = function(){
    physicsArea.classList.toggle('visible');
    areaBlur.classList.toggle('invisible');
};
// const toggle_blur = function(){
//     areaBlur.classList.toggle('visible');
// };
// const removeDiv = function(){
//     physicsArea.classList.remove('visible');
//     areaBlur.classList.remove('visible');
// };

physicsSubject.addEventListener('click',toggle_physics);
// areaBlur.addEventListener('click',removeDiv);