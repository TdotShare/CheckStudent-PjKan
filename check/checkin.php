<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Gothic+A1:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Poppins:300,400,500,600,700,800,900');
@import url('https://fonts.googleapis.com/css?family=Forum');

@import url('https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Josefin+Slab:100,100i,300,300i,400,400i,600,600i,700,700i|Marcellus|Nanum+Myeongjo:400,700,800|Old+Standard+TT:400,400i,700|Prata|Vidaloka');

body {
    background: #F0F0F0;
    margin: 0;
    color: white;
}

.subscribe-box {
    background: #2bb24c;
    font-family: 'Gothic A1', serif;
    padding: 6em 0;
    text-align: center;
    h2 {
        margin: 0 0 .85em 0;
        font-weight: 100;
        font-size: 30px;
        font-family: 'Marcellus', serif;
    }
    .subscribe {
        width: 100%;
        max-width: 600px;
        margin: auto;
        input {
            width: 100%;
            background: transparent;
            border: 0;
            border-bottom: 1px solid;
            padding: 1em 0 .8em;
            text-align: center;
            font-size: 18px;
            font-family: inherit;
            font-weight: 300;
            line-height: 1.5;
            color: inherit;
            outline: none;
            &::placeholder { 
                color: hsla(0, 0%, 100%, 0.5);
            }
        }

        button {    
            all: unset;
            margin-top: 2.4em;
            background: transparent;
            border: 2px solid white;
            padding: 1em 4em;
            border-radius: 50px;
            cursor: pointer;
            display: inline-block;
            font-weight: 700;
            position: relative;
            transition: all 300ms ease;
            span {
                display: inline-block;
                transition: all 300ms ease;
                //z-index: 2;
            }
            &:before, &:after {
                content: "";
                display: block;
                position: absolute;
                transition: all 300ms ease;
                opacity: 0;
            }
            &:before {
                height: 7px;
                width: 7px;
                background: transparent;
                border-right: 2px solid;
                border-top: 2px solid;
                right: 30px; top: 21px;
                transform: rotate(45deg);
            }
            &:after {
                background: white;
                height: 2px;
                width: 50px;
                left: 0;
                top: 1.49em;
                //z-index: 1;
            }
            &:hover {
                span {
                    transform: translateX(-10px);
                }
                &:before {
                    opacity: 1;
                }
                &:after {
                    width: 14px;
                    opacity: 1;
                    transform: translateX(160px);
                }
            }
        }
    }

}


.subscribe-box 
    h2 Subscribe to our mailing list
    form.subscribe
        input(type="email", placeholder="example@gmail.com", autocomplete="off" required)
        button(type="submit") 
            span Subscribe</style>
	


      </html>