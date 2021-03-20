
        const logo = document.querySelector('.logo_navbar')
        const logo_small = document.querySelector('.logo_navbar_small')
        const navbar = document.querySelector('#navbar')
        const link = document.querySelectorAll('.nav-link')
        const img_show=document.querySelector('#img_show')
        
        let img_opened = false

        logo.src = "/media/small_s_w.png"
        logo_small.src = "/media/small_s_w.png"
        navbar.style.height="100px"
        for (let i = 0; i < link.length; i++) {
            link[i].classList.add("accent_hover");
        }

        window.addEventListener("scroll", ()=> {

        let scrolled = window.pageYOffset
        if (scrolled > 100) {
            console.log(link)

            navbar.classList.remove("bg-dark","navbar-dark")
            navbar.classList.add("navbar-light","bg-white")
            logo.src = "/media/small.png"
            logo.style.width = "90px"
            navbar.style.height="90px"
            logo_small.src = "/media/small_s.png"
            for (let i = 0; i < link.length; i++) {
                link[i].classList.remove("accent_hover");
                link[i].classList.add("secondary_hover");
            }

        } else {
            navbar.classList.remove("navbar-light","bg-white")
            navbar.classList.add( "bg-dark","navbar-dark")
            logo.src="/media/small_s_w.png"
            logo.style.width = "100px"
            navbar.style.height="100px"
            logo_small.src = "/media/small_s_w.png"
            for (let i = 0; i < link.length; i++) {
                link[i].classList.add("accent_hover");
                link[i].classList.remove("secondary_hover");
            }


        }
        })

        if(img_show){
            img_show.addEventListener('click',()=>{
                if(img_opened == false){

                    img_show.classList.remove("show_img");
                    img_show.classList.add("show_img_b");

                    img_opened = !img_opened;
                }else {
                    img_show.classList.add("show_img");
                    img_show.classList.remove("show_img_b");

                    img_opened = !img_opened;

                }



               
            })
        }