
        const logo = document.querySelector('.logo_navbar')
        const logo_small = document.querySelector('.logo_navbar_small')
        const navbar = document.querySelector('#navbar')
        const link = document.querySelector('#nav_link')
        const link1 = document.querySelector('#nav_link_1')
        const link2 = document.querySelector('#nav_link_2')
        const link3 = document.querySelector('#nav_link_3')
        const link4 = document.querySelector('#nav_link_4')

        


        logo.src = "/media/small_s_w.png"
        logo_small.src = "/media/small_s_w.png"
        link.classList.add("accent_hover")
        link1.classList.add("accent_hover")
        link2.classList.add("accent_hover")
        link3.classList.add("accent_hover")
        link4.classList.add("accent_hover")
        


        window.addEventListener("scroll", ()=> {

        let scrolled = window.pageYOffset
        if (scrolled > 100) {
            console.log(link)

            navbar.classList.remove("bg-dark","navbar-dark")
            navbar.classList.add("navbar-light","bg-white")
            logo.src = "/media/small_s.png"
            logo_small.src = "/media/small_s.png"
            link.classList.remove("accent_hover")
            link1.classList.remove("accent_hover")
            link2.classList.remove("accent_hover")
            link3.classList.remove("accent_hover")
            link4.classList.remove("accent_hover")
            link.classList.add("secondary_hover")
            link1.classList.add("secondary_hover")
            link2.classList.add("secondary_hover")
            link3.classList.add("secondary_hover")
            link4.classList.add("secondary_hover")



        } else {
            navbar.classList.remove("navbar-light","bg-white")
            navbar.classList.add( "bg-dark","navbar-dark")
            logo.src="/media/small_s_w.png"
            logo_small.src = "/media/small_s_w.png"
            link.classList.add("accent_hover")
            link1.classList.add("accent_hover")
            link2.classList.add("accent_hover")
            link3.classList.add("accent_hover")
            link4.classList.add("accent_hover")
            link.classList.remove("secondary_hover")
            link1.classList.remove("secondary_hover")
            link2.classList.remove("secondary_hover")
            link3.classList.remove("secondary_hover")
            link4.classList.remove("secondary_hover")




        }
        })