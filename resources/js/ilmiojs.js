
        const logo = document.querySelector('.logo_navbar')
        const logo_small = document.querySelector('.logo_navbar_small')
        const navbar = document.querySelector('#navbar')
        const link = document.querySelectorAll('.nav-link')
        
        console.log(link.length)

        logo.src = "/media/small_s_w.png"
        logo_small.src = "/media/small_s_w.png"
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
            logo_small.src = "/media/small_s_w.png"
            for (let i = 0; i < link.length; i++) {
                link[i].classList.add("accent_hover");
                link[i].classList.remove("secondary_hover");
            }


        }
        })