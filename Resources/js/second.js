const semOpen = document.querySelectorAll(".semester");
const subjectOpen = document.querySelectorAll(".firstUl");
// for (let pp of semOpen){
//     pp = document.semOpen.children;
// }

const toggleSubject = () =>{
    for(let sub of subjectOpen){
    subjectOpen.classList.toggle('visible');
    }
};
// for(let sem of semOpen){
//     sem.addEventListener('click',toggleSubject);
// }
// console.log(open);
