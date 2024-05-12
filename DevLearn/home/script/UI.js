let layout1, layout2, layout3 , card_layout1,card_layout2,card_layout3;

document.addEventListener("DOMContentLoaded", () => {
  layout1 = document.querySelector(".layout1");
  layout2 = document.querySelector(".layout2");
  layout3 = document.querySelector(".layout3");
  card_layout1 = document.getElementById("card-layout1");
  card_layout2 =document.getElementById("card-layout2")
  card_layout3 =document.getElementById("card-layout3")
  const ch3btn = document.getElementById("changetolayout3");
  const ch2btn = document.getElementById("changetolayout2");
  const ch1btn = document.getElementById("changetolayout1");
  const chtc =document.getElementById("changetocoursesbtn")
  const chtp =document.getElementById("changetoprivacybtn")
  const chts =document.getElementById("changetouserbtn")

  if (ch2btn && layout2 && ch1btn && layout1 && ch3btn && layout3 && card_layout1 && card_layout2 && chts && card_layout3) {
    ch2btn.addEventListener("click", () => {
      changetolayout2();
    });

    ch1btn.addEventListener("click", () => {
      changetolayout1();
    });

    ch3btn.addEventListener("click", () => {
      changetolayout3();
    });
chtc.addEventListener("click",()=>{
  changetoCourses()
})
chtp.addEventListener("click",()=>{
  changetoPrivacy()
})
chts.addEventListener("click",()=>{
  changetoUser()
})
  } else {
    console.error("iniciando diagnostico");
    çonsole.error(chts)
    çonsole.error(chtp)
    çonsole.error(chtc)
    console.error(card_layout3)
    console.error(card_layout2)
};

function changetolayout2() {
  console.log("Changing to layout 2...");
  layout1.classList.add('hidden');
  layout2.classList.remove('hidden');
  layout3.classList.add('hidden');
}

function changetolayout1() {
  console.log("Changing to layout 1...");
  layout2.classList.add('hidden');
  layout3.classList.add('hidden');
  layout1.classList.remove('hidden');
}

function changetolayout3() {
  console.log("Changing to layout 3...");
  layout1.classList.add('hidden');
  layout2.classList.add('hidden');
  layout3.classList.remove('hidden');
}
function changetoCourses(){
  card_layout2.classList.add('hidden');
  card_layout1.classList.remove('hidden');
  card_layout3.classList.add('hidden');
}
function changetoPrivacy(){
  card_layout1.classList.add('hidden');
  card_layout3.classList.add('hidden');
  card_layout2.classList.remove('hidden');
}
function changetoUser(){
  card_layout1.classList.add('hidden');
  card_layout2.classList.add('hidden');
  card_layout3.classList.remove('hidden');
}
});
