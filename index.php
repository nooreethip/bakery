<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</head>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
    body {
        text-align: center;
        margin: 0;
        background-color: #FFF4E0;
    }

    .head {

        color: rgb(0, 0, 0);
        height: 70px;
        width: 100%;
        padding-top: 0px;

    }

    .head img {
        padding-left: 40px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #FFA900;
    }

    li {
        float: left;
        padding-left: 30px;

    }

    li a {
        display: block;
        color: hsl(0, 0%, 0%);
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #FFBE40;
    }

    .active {
        background-color: #FFBE40;
    }

    .img {
        height: 20px;
        width: 10px;

    }

    .img1 {
        /* Rectangle 31 */

        width: 500px;
        height: 323px;

        margin-top: 150px;
        margin-left: 170px;


        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        border-radius: 16px;

    }

    .drop {
        float: right;
        margin-right: 35em;
        top: 3em;

    }

    body {
        background-color: #FFF4E0;
    }

    .text {


        width: 588px;
        height: 216px;
        left: 708px;
        top: 462px;

        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 3px;
    }

    footer {

        padding: 10px;
        text-align: center;
        color: rgb(0, 0, 0);
    }

    .btn {
        background-color: #A66E00;
        border-radius: 10% / 50%;
        font-size: 14px;
        border: 1px solid black;
        color: white;

    }

    .btn:hover {
        background-color: #FFCF73;
        color: #A66E00;

    }
</style>
</head>

<body>
    <div class="head">

        <div class="row">
            <div class=" span ">
                <img
                    src="https://scontent.xx.fbcdn.net/v/t1.15752-9/263800363_632087001314699_3746873862771308394_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeEc5e_1GhX5Nj4wbhkcfOxf9HdN9pn8pZb0d032mfyllsd7Z6-TPxV20ZCrjbQuH-5u-e2jGKsnuQ8ClQGyMi79&_nc_ohc=FXfEjKEStgcAX8-h4kr&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKv6AYEsOS-Dda4Ui01pLCjYq15aWXC9gs4kZfmJ_iVWg&oe=61DEFE02">
            </div>

        </div>

        <div class="nav justify-content-end">
            <a href="#" class="btn btn-lg active text2-white " role="button" aria-pressed="true">เลือกซื้อสินค้า</a>
            <a href="#" class="btn btn-lg active text2-white" role="button" aria-pressed="true">สั่งสินค้า</a>
            <a href="#" class="btn btn-lg active text2-white" role="button" aria-pressed="true">เพิ่มเมนูพิเศษ</a>
            <a href="#" class="btn btn-lg active text2-white" role="button" aria-pressed="true">คลังสินค้า</a>

        </div>


        <ul>
            <li><a href="#">เค้ก </a></li>
            <li><a class="active" href="#">ครัวซอง</a></li>
            <li><a href="#">คัพเค้ก</a></li>
            <li><a href="#">คุ๊กกี้</a></li>
        </ul>


        <div class="group">
            <div class="dropdown drop">
                <button class="btn  dropdown-toggle"
                    style="float: right; background-color: #FFA900; width: 9em;height: 3em;" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    เลือกใส้
                </button>
                <div class="dropdown-menu" aria-labelledby="เลือกใส้" style="background-color: #FFBE40;">
                    <a class="dropdown-item" href="#">ใส้กรอก</a>
                    <a class="dropdown-item" href="#">ใส้ชีส</a>
                    <a class="dropdown-item" href="#">ใส้ช็อกโกแลต</a>
                    <a class="dropdown-item" href="#">ใส้เผือก</a>
                </div>
            </div>
            <div class="img1"><img
                    src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p206x206/266250439_436577054854173_87257453603767011_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeE3uJcqqquw2BpBxc4pcr7JaulYtYepaJVq6Vi1h6lolT7h81dsnf20BR7LUia8hH-8tXQXhvUqNA_te1H1rXCn&_nc_ohc=oJcjH11z8Y4AX_UUb2M&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVK6Q6uNpB-P5zLoBmAGruuy3J08Sw9LhBzgOgLsHyWQNg&oe=61E1DE91">
                <br> </br>

                <p style="color:black">จำนวน : &nbsp; <i class="fa fa-plus-circle" aria-hidden="true">&emsp;3&emsp;
                        <i class="fa fa-minus-circle" aria-hidden="true"></i></i></p>

            </div>
        </div>

        </p>
        <p>เลือกหน้าครัวซอง
            <hr style="border: -1px solid #000000;">
        </p>

        <footer>
            <div class="card-deck ">
                <div class="card " style="padding-right: 35px;padding-top: 35px; background-color: #FFD2D2;">
                    <img class="card-img-top img-fluid  text-center" style="width: 100;height: inherit;"
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p206x206/264811300_673200203682871_5412591932594716151_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeFQHzXe7G89RVueBx-3nsBusMFShtORgBmwwVKG05GAGU9C_hzxhZQTynB7Lr7BDNE3j4L3oLmV-631rL8K7bn4&_nc_ohc=jTlcdqlocp0AX89MgSq&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLpKuf-tbrKoF9WL2EJHQlb8Dz0z52FXxXps7m0hOFrOA&oe=61E2B965"
                        alt="Card image cap" style="width: 179.82px;height: 120px;">
                    <div class="card-body">
                        <h5 class="card-title">&emsp;หน้าผักขม</h5>
                        <div class="form-check">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form" for="exampleRadios1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card" style="padding-right: 35px;padding-top: 35px; background-color:#C4C4C4;">
                    <img class="card-img-top"
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p296x100/265954038_1058417698276533_5347709801327791935_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeH_O1NdLk1Zajxeax-OnPTMHpxi0_z9LVEenGLT_P0tUfbMo6bG1m54FZ2vPNsNo8KyBWYp8fiETMzjAbQO0FEc&_nc_ohc=TL0vlDs4ip0AX92juI3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVK3TXlk1TPwHxmvJA5hTCJ1YmL8rMs-0pvplZaC7ooDOw&oe=61E5D7A9"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">&emsp;หน้าฝอยทอง</h5>
                        <div class="form-check">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form" for="exampleRadios1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card " style="padding-right: 35px;padding-top: 35px; background-color: #FFD2D2;">
                    <img class="card-img-top img-fluid  text-center" style="width: 100;height: inherit;"
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p206x206/268017374_4840637079324976_141148307383020467_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeGg6o7i-Tzy67qM4t66Z0NBytFoKiNWPAXK0WgqI1Y8BYAUPVb89eSyGkehqpvDz2AC4F3I9dF3qzlQZy5aeQTJ&_nc_ohc=ZT9EaPI83AIAX8NDzMf&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKl_xnrd_-R6LjVias2--OT1fJJiWRQgm49scJK_4pSLw&oe=61E2EAA1"
                        alt="Card image cap" style="width: 179.82px;height: 120px;">
                    <div class="card-body">
                        <h5 class="card-title">&emsp;หน้าครีมชีส</h5>
                        <div class="form-check">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form" for="exampleRadios1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card" style="padding-right: 35px;padding-top: 35px; background-color:#C4C4C4;">
                    <img class="card-img-top"
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p206x206/267906036_1047442192493060_3581367351472099531_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeEKFH774zQohfRMYv0i2_Op6paM1q_TXuzqlozWr9Ne7Gp-kJaRkcOjocpEIuxcCszFiqzqDyVyaRLKJLGoumRZ&_nc_ohc=M8qyxaQZd1IAX-Nuw6-&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKCFTlGve7TK6q1JukeDZTsCDSSqCzwVHth4Hmgg6b7Sg&oe=61E2E356"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">&emsp;หน้าช็อกโกแลต</h5>
                        <div class="form-check">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form" for="exampleRadios1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card " style="padding-right: 35px;padding-top: 35px; background-color: #FFD2D2;">
                    <img class="card-img-top img-fluid  text-center" style="width: 100;height: inherit;"
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p206x206/267371241_277635571005988_6797663851470542833_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeHzNrYRU5OCP_hjSvWCX9P6U2VWYRSeKDdTZVZhFJ4oN_r9VfKNfi-4e2IjLAKxzxjb7J0izNSUwNJvgGZCxSlF&_nc_ohc=PqlxPMeBs7gAX80yjgI&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKxSA6rMCdnLzKNPMsEfXtoiZCfBL7MC2Iav2cyo0abNg&oe=61E330A3"
                        alt="Card image cap" style="width: 179.82px;height: 120px;">
                    <div class="card-body">
                        <h5 class="card-title">&emsp;หน้าครีมชีส</h5>
                        <div class="form-check">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form" for="exampleRadios1">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="text-center text-white"></footer>
</body>



</html>
