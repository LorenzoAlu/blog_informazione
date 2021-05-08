const { identity } = require("lodash")

const logo = document.querySelector('.logo_navbar')
const logo_small = document.querySelector('.logo_navbar_small')
const navbar = document.querySelector('#navbar')
const link = document.querySelectorAll('.nav-link')
const img_show = document.querySelector('#img_show')
const modifyComment = document.querySelectorAll('#ModifyComment')
const attualComment = document.querySelectorAll('#commentWrapper')
const NewComment = document.querySelectorAll('#commentWrapperNew')
const navbarToggle = document.querySelector('#navbarToggle')

let comment_opened = false
let img_opened = false

logo.src = "/media/small_s_w.png"
logo_small.src = "/media/small_s_w.png"
navbar.style.height = "100px"
for (let i = 0; i < link.length; i++) {
    link[i].classList.add("accent_hover");
}
navbarToggle.classList.add('bg-dark')

window.addEventListener("scroll", () => {

    let scrolled = window.pageYOffset
    if (scrolled > 100) {

        navbar.classList.remove("bg-dark", "navbar-dark")
        navbar.classList.add("navbar-light", "bg-white")
        logo.src = "/media/small.png"
        logo.style.width = "90px"
        navbar.style.height = "90px"
        logo_small.src = "/media/small_s.png"
        // for (let i = 0; i < link.length; i++) {
        //     link[i].classList.remove("accent_hover");
        //     link[i].classList.add("secondary_hover");
        // }
        link.forEach(el => {
            el.classList.remove("accent_hover");
            el.classList.add("secondary_hover");
        })

        
        navbarToggle.classList.remove('bg-dark')
        navbarToggle.classList.add('bg-white')

    } else {
        navbar.classList.remove("navbar-light", "bg-white")
        navbar.classList.add("bg-dark", "navbar-dark")
        logo.src = "/media/small_s_w.png"
        logo.style.width = "100px"
        navbar.style.height = "100px"
        logo_small.src = "/media/small_s_w.png"
        // for (let i = 0; i < link.length; i++) {
        //     link[i].classList.add("accent_hover");
        //     link[i].classList.remove("secondary_hover");
        // }
        link.forEach(el => {
            el.classList.add("accent_hover");
            el.classList.remove("secondary_hover");
        })

        navbarToggle.classList.add('bg-dark')
        navbarToggle.classList.remove('bg-white')



    }
})

if (img_show) {
    img_show.addEventListener('click', () => {
        if (img_opened == false) {

            img_show.classList.remove("show_img");
            img_show.classList.add("show_img_b");

            img_opened = !img_opened;
        } else {
            img_show.classList.add("show_img");
            img_show.classList.remove("show_img_b");

            img_opened = !img_opened;

        }




    })

}

modifyComment.forEach((element,i)  => {
    element.addEventListener('click',()=>{
        if (comment_opened == false) {
                          
                            NewComment[i].classList.add("d-block");
                            NewComment[i].classList.remove("d-none");
                            attualComment[i].classList.add("d-none");
                            attualComment[i].classList.remove("d-block");
                            
                            comment_opened=!comment_opened

                        } else {

                            NewComment[i].classList.add("d-none");
                            NewComment[i].classList.remove("d-block");
                            attualComment[i].classList.add("d-block");
                            attualComment[i].classList.remove("d-none");
                            comment_opened=!comment_opened
            
                        }
    })
});

const btn_replay=document.querySelectorAll('#btn_replay')
const add_replay=document.querySelectorAll('#ReplayWrapped')

let replay_opener = false

if(btn_replay){

    btn_replay.forEach((el,i) => {
       
        el.addEventListener('click',()=>{
            if (replay_opener == false) {
                add_replay[i].classList.add("d-block");
                add_replay[i].classList.remove("d-none");
                replay_opener=!replay_opener

            } else {
                add_replay[i].classList.remove("d-block");
                add_replay[i].classList.add("d-none");
                replay_opener=!replay_opener

            }

        })

    });

  
    
}






