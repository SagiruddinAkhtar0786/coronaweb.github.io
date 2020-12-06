<style>
html{
    scroll-behavior: smooth;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Baloo Bhai 2', cursive;  
}
.nav_style{
    /* background-color : #a29bfe!important; */
    opacity : 0.8;
}
.nav_style a{
    color : white!important;
}

.first-sec{
    background : url("image/c1.jpg") no-repeat;
    width : 100%;
    height : 100vh;
    background-position:center;
    background-size:cover;
}
/* main header */
.main-header{
    height:450px;
    width:100%;
}
.right h1{
    font-size : 4rem;
    color: rgb(254, 253, 255);
    text-shadow: 2px 2px 4px #000000;
    font-weight: bold;

}
.corona_rotate img{
    animation:gocorona 3s linear infinite;

}
@keyframes gocorona{
    0% {transform: rotate(0); }
    100% {transform: rotate(360deg);  }
}

.left img{
    animation : heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0% {transform: scale(.75); }
    20% {transform: scale(1);  }
   40% {transform: scale(.75); }
    60% {transform: scale(1);  }
    80% {transform: scale(.75);  }
    100% {transform: scale(.75);  }
}
a.nav-link {
    text-align: center;
}

/****************** corona_update******************** */
.corona_update{
    margin: 20px 0 30px 0;
}

.corona_update h3{
    color: skyblue;
}
.corona_update h1{
    font-size: 2rem;
    text-align: center;
}
/* **********subsection************ */
.sub-section{
    background-color: aliceblue;
}

/* footer */
.footer_style{
    background-color: black!important;
    padding: 5px;
}

.footer_style p{
    margin-bottom: 0!important;
}

#mybtn{
     
    display: none;  /* hidden by default */
    position: fixed;   /* fixed sticky position */
    bottom: 30px; /* place the button at the buttom of the page */
    right: 40px;  
    z-index: 99;  /* make sure it does not overlap */
    border: none; /* remove borders */
    outline: none;  /* remove outline; */
    background-color: #00a8ff; /* set a background color */
    color: white;   /* text color */
    cursor: pointer; /* add a mouse pointer to hover */
    padding: 10px;   /* some padding */
    border-radius: 10px;  /* rounded corners */
} 

#mybtn:hover{
     background: #606060; /*adda dark gary  background on hover */
}
.row{
    margin-left: 0!important;
    margin-right: 0!important;
}

span {
           
            color: red;
            font-weight: bold;
           
        }

/* responsive mobile friendly */

@media (max-width:780px){
    .main-header{
        /* height: 00px; */
        text-align: center;
    }
    .main-header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }
    .left img{
        position: absolute;
        bottom: -30%;
    }
    h1.h1 {
        position: absolute;
        top: 10%;
        font-size: 49px;
    }
    .first-sec{
       
        height : 600px;
       
    }
    .corona_data{
        display: inline!important;
    
    }
    .corona_data p{
        text-align: center;
    }
    
}
@media (max-width: 350px){
.left img {
   
    bottom: -40%;
}

}
</style>