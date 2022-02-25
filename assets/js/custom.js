$('.mobile-toggle').click(function(){
    $('.mobile-wrap').toggleClass('active');
});


// Progress Bar
let  numberPercent = document.querySelectorAll('.countbar')
let getPercent = Array.from(numberPercent)

getPercent.map((items) => {
    let startCount = 0
    let progressBar = () => {
        startCount ++
        items.innerHTML = `<h3>${startCount}%</h3>`
        items.style.width = `${startCount}%`
        if(startCount == items.dataset.percentnumber) {
            clearInterval(stop)
        }
    }
    let stop = setInterval(() => {
        progressBar()
    },25)
});


// =======
// ==========================
// Swiper 1
var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  // ===========================
  function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
  }
  
  function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
  }


  // Spin Wheel Js
  function shuffle(array) {
    var currentIndex = array.length,
        randomIndex;
  
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex],
        array[currentIndex],
      ];
    }
  
    return array;
  }
  
  function spin() {
  
    // Play the sound
    // wheel.play();
  
    const box = document.getElementById("box");
    const element = document.getElementById("mainbox");
    let SelectedItem = "";
  
    let MagicRoaster = shuffle([1890, 2250, 2610]);
    let Sepeda = shuffle([1850, 2210, 2570]); //Kemungkinan : 100%
    let RiceCooker = shuffle([1810, 2170, 2530]);
    let LunchBox = shuffle([1770, 2130, 2490]);
    let Sanken = shuffle([1750, 2110, 2470]);
    let Electrolux = shuffle([1630, 1990, 2350]);
    let JblSpeaker = shuffle([1570, 1930, 2290]);
  
    let Hasil = shuffle([
      MagicRoaster[0],
      Sepeda[0],
      RiceCooker[0],
      LunchBox[0],
      Sanken[0],
      Electrolux[0],
      JblSpeaker[0],
    ]);
    // console.log(Hasil[0]);
  
    // get the value of selected item
    if (MagicRoaster.includes(Hasil[0])) SelectedItem = "Magic Roaster";
    if (Sepeda.includes(Hasil[0])) SelectedItem = "Sepeda Aviator";
    if (RiceCooker.includes(Hasil[0])) SelectedItem = "Rice Cooker Philips";
    if (LunchBox.includes(Hasil[0])) SelectedItem = "Lunch Box Lock&Lock";
    if (Sanken.includes(Hasil[0])) SelectedItem = "Air Cooler Sanken";
    if (Electrolux.includes(Hasil[0])) SelectedItem = "Electrolux Blender";
    if (JblSpeaker.includes(Hasil[0])) SelectedItem = "JBL Speaker";
  
    // spin
    box.style.setProperty("transition", "all ease 5s");
    box.style.transform = "rotate(" + Hasil[0] + "deg)";
    element.classList.remove("animate");
    setTimeout(function () {
      element.classList.add("animate");
    }, 5000);
  
    // alert
  //   setTimeout(function () {
  //     applause.play();
  //     swal(
  //       "Congratulations",
  //       "You Won The " + SelectedItem + ".",
  //       "success"
  //     );
  //   }, 5500);
  
    // delay
    setTimeout(function () {
      box.style.setProperty("transition", "initial");
      box.style.transform = "rotate(90deg)";
    }, 6000);
  }