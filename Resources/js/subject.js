const physicsSubject = document.getElementById('phy');
const maths1Subject = document.getElementById('maths1');
const beeSubject = document.getElementById('bee');
const englishSubject = document.getElementById('english');
const maths2Subject = document.getElementById('maths2');
const ppsSubject = document.getElementById('pps');
const chemSubject = document.getElementById('chem');
const wtSubject = document.getElementById('wt');




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
maths1Subject.addEventListener('click',toggle_physics);
beeSubject.addEventListener('click',toggle_physics);
englishSubject.addEventListener('click',toggle_physics);
maths2Subject.addEventListener('click',toggle_physics);
ppsSubject.addEventListener('click',toggle_physics);
chemSubject.addEventListener('click',toggle_physics);
wtSubject.addEventListener('click',toggle_physics);



// areaBlur.addEventListener('click',removeDiv);