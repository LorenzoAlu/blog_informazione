
const logo = document.querySelector('.logo_navbar')
const logo_small = document.querySelector('.logo_navbar_small')
const navbar = document.querySelector('#navbar')
const link = document.querySelectorAll('.nav-link')
const img_show = document.querySelector('#img_show')
const modifyComment = document.querySelectorAll('#ModifyComment')
const attualComment = document.querySelectorAll('#commentWrapper')
const NewComment = document.querySelectorAll('#commentWrapperNew')

let comment_opened = false
let img_opened = false

logo.src = "/media/small_s_w.png"
logo_small.src = "/media/small_s_w.png"
navbar.style.height = "100px"
for (let i = 0; i < link.length; i++) {
    link[i].classList.add("accent_hover");
}

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

// if(ModifyComment){
//     ModifyComment.forEach(el => {
//         el.addEventListener('click',()=>{
//             if (comment_opened == false) {
//                 NewComment.forEach(el => {
//                     el.classList.add("d-block");
//                     el.classList.remove("d-none");
//                 });
//                 attualComment.forEach(el => {
//                     el.classList.add("d-none");
//                     el.classList.remove("d-block");
//                 });
//                 // NewComment.classList.add("d-block");
//                 // NewComment.classList.remove("d-none");
//                 // attualComment.classList.add("d-none");
//                 // attualComment.classList.remove("d-block");
//                 comment_opened=!comment_opened
//             } else {

//                 NewComment.forEach(el => {
//                     el.classList.add("d-none");
//                     el.classList.remove("d-block");
//                 });
//                 attualComment.forEach(el => {
//                     el.classList.add("d-block");
//                     el.classList.remove("d-none");
//                 });
//                 // NewComment.classList.add("d-none");
//                 // NewComment.classList.remove("d-block");
//                 // attualComment.classList.add("d-block");
//                 // attualComment.classList.remove("d-none");
//                 comment_opened=!comment_opened

//             }

//         })
//     });

// }