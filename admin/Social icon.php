<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
.wrapper{
    display: inline-flex;
     margin-left: 0;
     margin-top: 0;
}

.wrapper .icon{
    position: relative;
    background: #fff;
    border-radius: 50%;
    padding: 15%;
    margin: 10px;
    width: 20px;
    height: 20px;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip{
    position: absolute;
    top: 0;
    font-size: 14px;
    background: #ffffff;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 5px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before{
    position: absolute;
    content: "";
    height: 8px;
    width: 8px;
    background: #fff;
    bottom: -3px;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);

}

.wrapper .icon:hover .tooltip{
    top: -45px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;

}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip{
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);

}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before{
    background: #3b5999;
    color: white;

}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before{
    background: #46c1f6;
    color: white;

}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before{
    background: #e1306c;
    color: #ffffff;

}

.wrapper .google:hover,
.wrapper .google:hover .tooltip,
.wrapper .google:hover .tooltip::before{
    background:  #800020;
    color: white;

}

.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before{
    background: #de463b;
    color: white;

}

</style>
</head>
<body>
<!-- Add font awesome icons -->
<div class="wrapper">
	<div class="icon facebook">
	<div class="tooltip">Facebook</div>
	<span><i class="fab fa-facebook-f"></i></span>
	</div>
	<div class="icon twitter">
	<div class="tooltip">Twitter</div>
	<span><i class="fab fa-twitter"></i></span>
	</div>
	<div class="icon instagram">
	<div class="tooltip">Instagram</div>
	<span><i class="fab fa-instagram"></i></span>
	</div>
	<div class="icon google">
	<div class="tooltip">Google</div>
	<span><i class="fab fa-google-plus"></i></span>
	</div>
	<div class="icon youtube">
	<div class="tooltip">Youtube</div>
	<span><i class="fab fa-youtube"></i></span>
	</div>
</div> 
</body>
</html> 
